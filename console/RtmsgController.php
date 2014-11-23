<?php
namespace vlka\rtmsg\console;

use Yii;
use yii\console\Controller;
use vlka\rtmsg\Rtm;
class RtmsgController extends Controller
{
	public function actionInit(){
		$rtm = new Rtm();
		echo Yii::getAlias($rtm->node_path);
	}
}