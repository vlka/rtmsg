<?php
namespace vlka\rtmsg\console;

use Yii;
use yii\console\Controller;
use vlka\rtmsg\Rtm;
class RtmsgController extends Controller
{
	public function actionInit(){
		$rtm = new Rtm();
//		if(file_exists($this->node_path)){
//			exec('rm -R '.Yii::getAlias($rtm->node_path));
//		}
//		mkdir(Yii::getAlias($rtm->node_path));
		exec('cp -rf '.Yii::getAlias('@vendor/vlka/rtmsg/node_modules').' '.Yii::getAlias($rtm->node_path));
	}
}