<?php
namespace vlka\rtmsg;

use Yii;
use yii\base\Component;
class BootConsole extends Component
{
	public function init() {
		parent::init();
		Yii::$app->controllerMap['rtmsg'] = 'vlka\rtmsg\console\RtmsgController';
	}
}
?>