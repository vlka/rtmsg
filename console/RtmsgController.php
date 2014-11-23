<?php
namespace vlka\rtmsg\console;

use Yii;
use yii\console\Controller;
use vlka\rtmsg\Rtm;
class RtmsgController extends Controller
{
	public function actionInit(){
		$rtm = new Rtm();
		mkdir(Yii::getAlias($rtm->node_path));
		exec('cp -R '.Yii::getAlias('@vendor/vlka/rtmsg/node_modules').' '.Yii::getAlias($rtm->node_path));
	}
}