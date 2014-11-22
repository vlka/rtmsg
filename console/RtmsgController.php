<?php
namespace vlka\rtmsg\console;

use Yii;
use yii\console\Controller;
class RtmsgController extends Controller
{
	public function actionTest(){
		echo "test 777";
	}
	
	public function actionInit(){
		$path = $this->prompt(Yii::t('rtmsg', 'Enter path for node server'));
		echo $path*3;
	}
}