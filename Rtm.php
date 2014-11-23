<?php
namespace vlka\rtmsg;

use Yii;
use yii\helpers\Html;
use yii\base\Component;
class Rtm extends Component implements \yii\base\BootstrapInterface
{
	public $node_host = null;
	public $node_port = 3000;
	public $node_path = '@app/node_server';
	
	public function init() {
		parent::init();
		if(Yii::$app instanceof \yii\web\Application && !$this->node_host){
			$this->node_host = Yii::$app->urlManager->createAbsoluteUrl(['/']);
		}
	}
	
	public function bootstrap($app) {
		if($app instanceof \yii\console\Application){
			Yii::$app->controllerMap['rtmsg'] = 'vlka\rtmsg\console\RtmsgController';
		}
		
		Yii::$app->i18n->translations['rtmsg*'] = [
			'class' => 'yii\i18n\PhpMessageSource',
			'fileMap' => [
				'rtmsg' => 'rtmsg.php',
			],
		];
	}

	public function register($messages = null){
		$view = Yii::$app->view;
		$view->registerJsFile($this->node_host . ':' . $this->node_port . '/socket.io/socket.io.js');
		$view->registerJs(<<<JS
			alert($messages);
JS
		);
	}
}