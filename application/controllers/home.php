<?php

class Home_Controller extends Base_Controller {

	public function action_index()
	{
		echo '<h3> Opauth For Laravel - v.0.2</h3>';
		echo 'You can signup with: <a href="'.URL::to('facebook').'">Facebook</a> <br />';
		echo 'You can signup with: <a href="'.URL::to('twitter').'">Twitter</a> <br />';
		echo '<br /> I\'m gonna test this bundle with other supported websites by Opauth.';
	}

}