<?php

class FacebookNotification{
	var $FB_APP_ID = null;
	var $FB_APP_SECRET = null;
	var $FACEBOOK = null;

	public function FacebookNotification($fb_app_id, $fb_app_secret){
		$this->FB_APP_ID = $fb_app_id;
		$this->FB_APP_SECRET = $fb_app_secret;

		$this->FACEBOOK = new Facebook(array('appId' => $this->FB_APP_ID, 'secret' => $this->FB_APP_SECRET, 'grant_type' => 'client_credentials'));
	}

	public function send($user_id, $notification, $ref="string_for_fb_insights"){
		try{
			return $this->FACEBOOK->api('/'.$user_id.'/notifications/', 'post', array('access_token' => $this->FB_APP_ID.'|'.$this->FB_APP_SECRET, 'template' => $notification, 'ref' => $ref));
		}catch(Exception $e){
			return $e;
		}
	}
}

?>