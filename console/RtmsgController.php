<?php
namespace vlka\rtmsg\console;

use yii\console\Controller;
class RtmsgController extends Controller
{
	public function actionTest(){
		echo "test 777";
	}
	
	public function actionInit(){
		$test = $this->confirm('Введите тестовое слово');
	}
}