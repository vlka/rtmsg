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
		exec('cp -rf ' . Yii::getAlias('@vendor/vlka/rtmsg/node_modules') . ' ' . Yii::getAlias($rtm->node_path));
		exec('cp ' . Yii::getAlias('@vendor/vlka/rtmsg/server.js') . ' ' . Yii::getAlias($rtm->node_path));
		$conf = Json::encode([
			'port' => $rtm->node_port,
		]);
		file_put_contents(Yii::getAlias($rtm->node_path) . '/conf.js', $conf);
	}
}