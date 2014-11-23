<?php
namespace vlka\rtmsg\console;

use Yii;
use yii\console\Controller;
use vlka\rtmsg\Rtm;
use yii\helpers\Json;
class RtmsgController extends Controller
{
	public function actionInit(){
		$rtm = new Rtm();
		if(file_exists(Yii::getAlias($rtm->node_path))){
			exec('rm -R ' . Yii::getAlias($rtm->node_path));
		}
		exec('cp -R ' . Yii::getAlias('@vendor/vlka/rtmsg/node_modules') . ' ' . Yii::getAlias($rtm->node_path));
		exec('cp ' . Yii::getAlias('@vendor/vlka/rtmsg/server.js') . ' ' . Yii::getAlias($rtm->node_path));
		exec('cp ' . Yii::getAlias('@vendor/vlka/rtmsg/package.json') . ' ' . Yii::getAlias($rtm->node_path));
		$conf = 'exports.port = ' . $rtm->node_port . ";\n";
		file_put_contents(Yii::getAlias($rtm->node_path) . '/conf.js', $conf);
	}
}