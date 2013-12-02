<?php
	function buildBody($fields){
		$body = array();
		foreach($fields as $field=>$title) {
			if(isset($_POST[$field]) && trim($_POST[$field])) {
				$body[] = $title." - ".trim($_POST[$field]);
			}
		}
		return implode("\n", $body);
	}
 	function validEmail($email){
		if(function_exists('filter_var')){
			return filter_var($email, FILTER_VALIDATE_EMAIL);
		} else {
			return (preg_match("/[a-zA-Z0-9-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/", $email) > 0);
		}
	}	
	
		
	if(!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))) return;
	
	require_once('_config.php');
	
	$action = $_POST['action'];
	
	$error = false;
	$res = array();
	$addr = '';
	$subj = '';
	$body = '';

	switch($action){
		case 'contact':
			if(!isset($_POST['f_name']) || !trim($_POST['f_name'])) {
				$error = true;
				$res['error'][] = 'f_name';
			}
			if(!isset($_POST['f_email']) || !trim($_POST['f_email']) || !validEmail($_POST['f_email'])) {
				$error = true;
				$res['error'][] = 'f_email';
			}		
			if(!isset($_POST['f_subj']) || !trim($_POST['f_subj'])) {
				$error = true;
				$res['error'][] = 'f_subj';
			}
			if(!isset($_POST['f_message']) || !trim($_POST['f_message'])) {
				$error = true;
				$res['error'][] = 'f_message';
			}
			if(!$error) {
				$fields = array(
					'f_name' => 'Full name',				
					'f_email' => 'Email address',
					'f_message' => 'Message',
				);
				$addr = $settings['email_contact']['email'];
				$subj = $_POST['f_subj'];
				$body = buildBody($fields);
				
				require_once('lib/mailer/class.phpmailer.php');
				$mail = new PHPMailer();

				$mail->SetFrom($settings['email_contact']['email']);
				$mail->AddAddress($addr);
				$mail->Subject = $subj;
				$mail->isHtml = false;
				$mail->Body = $body;
				
				$res['send'] = true;
				ob_start();
				if(!$mail->Send()) $res['send'] = false;
				ob_end_clean();				
			}

			echo json_encode($res);
			exit;		
		case 'get_tweets':
			require_once('lib/twitter/StormTwitter.class.php');
			
			$config['key'] = $settings['twitter']['key'];
			$config['secret'] = $settings['twitter']['secret'];
			$config['token'] = $settings['twitter']['token'];
			$config['token_secret'] = $settings['twitter']['token_secret'];
			$config['screenname'] = $settings['twitter']['screenname'];
			$config['cache_expire'] = $settings['twitter']['cache_expire'];			
			$config['directory'] = dirname(__FILE__).'/lib/twitter/';

			$obj = new StormTwitter($config);
			$res = $obj->getTweets($settings['twitter']['tweets']);

			$html = '';
			if($res){
				foreach($res as $tweet){
					$script_tz = date_default_timezone_get();
					date_default_timezone_set('America/Los_Angeles');
					$time = strtotime($tweet['created_at']);
					date_default_timezone_set($script_tz);
					

					if ( !empty($tweet['entities']) ) {
						foreach ($tweet['entities'] as $area => $items) {
							switch ( $area ) {
								case 'hashtags':
									$find = 'text';
									$prefix = '#';
									$url = 'https://twitter.com/search/?src=hash&q=%23';
									break;
								case 'user_mentions':
									$find = 'screen_name';
									$prefix = '@';
									$url = 'https://twitter.com/';
									break;
								case 'media': case 'urls':
									$find = 'display_url';
									$prefix = '';
									$url = '';
									break;
								default: break;
							}
							foreach ($items as $item) {
								$text = $tweet['text'];
								$string = $item[$find];
								$href = $url.$string;
								if (!(strpos($href, 'http://') === 0)) $href = "http://".$href;
								$replace = substr($text,$item['indices'][0],$item['indices'][1]-$item['indices'][0]);
								$with = "<a href=\"$href\">{$prefix}{$string}</a>";
								$replace_index[$replace] = $with;
							}
						}
						foreach ($replace_index as $replace => $with) $tweet['text'] = str_replace($replace,$with,$tweet['text']);
					}

					$html .= '<li><p class="tweet">@<a href="https://twitter.com/'.$settings['twitter']['screenname'].'">'.$settings['twitter']['screenname'].'</a> '.$tweet['text'].'</p><p class="date"><span class="date">'.get_time_ago(strtotime($tweet['created_at'])).'</span></p></li>';
				}
			} else {
				$html .= '<li><p class="tweet">No tweets yet</p></li>';
			}
			$html .= '<li><p class="follow">Follow @<a href="https://twitter.com/'.$settings['twitter']['screenname'].'">'.$settings['twitter']['screenname'].'</a></p></li>';
								
			echo $html;
			break;
	}

function get_time_ago($time_stamp)
{
    $time_difference = strtotime('now') - $time_stamp;

    if ($time_difference >= 60 * 60 * 24 * 365.242199)
    {
        /*
         * 60 seconds/minute * 60 minutes/hour * 24 hours/day * 365.242199 days/year
         * This means that the time difference is 1 year or more
         */
        return get_time_ago_string($time_stamp, 60 * 60 * 24 * 365.242199, 'year');
    }
    elseif ($time_difference >= 60 * 60 * 24 * 30.4368499)
    {
        /*
         * 60 seconds/minute * 60 minutes/hour * 24 hours/day * 30.4368499 days/month
         * This means that the time difference is 1 month or more
         */
        return get_time_ago_string($time_stamp, 60 * 60 * 24 * 30.4368499, 'month');
    }
    elseif ($time_difference >= 60 * 60 * 24 * 7)
    {
        /*
         * 60 seconds/minute * 60 minutes/hour * 24 hours/day * 7 days/week
         * This means that the time difference is 1 week or more
         */
        return get_time_ago_string($time_stamp, 60 * 60 * 24 * 7, 'week');
    }
    elseif ($time_difference >= 60 * 60 * 24)
    {
        /*
         * 60 seconds/minute * 60 minutes/hour * 24 hours/day
         * This means that the time difference is 1 day or more
         */
        return get_time_ago_string($time_stamp, 60 * 60 * 24, 'day');
    }
    elseif ($time_difference >= 60 * 60)
    {
        /*
         * 60 seconds/minute * 60 minutes/hour
         * This means that the time difference is 1 hour or more
         */
        return get_time_ago_string($time_stamp, 60 * 60, 'hour');
    }
    else
    {
        /*
         * 60 seconds/minute
         * This means that the time difference is a matter of minutes
         */
        return get_time_ago_string($time_stamp, 60, 'minute');
    }
}

function get_time_ago_string($time_stamp, $divisor, $time_unit)
{
    $time_difference = strtotime("now") - $time_stamp;
    $time_units      = floor($time_difference / $divisor);

    settype($time_units, 'string');

    if ($time_units === '0')
    {
        return 'less than 1 ' . $time_unit . ' ago';
    }
    elseif ($time_units === '1')
    {
        return '1 ' . $time_unit . ' ago';
    }
    else
    {
        /*
         * More than "1" $time_unit. This is the "plural" message.
         */
        // TODO: This pluralizes the time unit, which is done by adding "s" at the end; this will not work for i18n!
        return $time_units . ' ' . $time_unit . 's ago';
    }
}
?>