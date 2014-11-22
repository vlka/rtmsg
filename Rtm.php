<?php
namespace vlka\rtmsg;

use Yii;
use yii\base\Component;
class Rtm extends Component
{
	public function register($messages = null){
		echo '<pre>';
		print_r($messages);
		echo '</pre>';
	}
}