<?php
/**
 * Created by Navatech.
 * @project nava-demo
 * @author  LocPX
 * @email   loc.xuanphama1t1[at]gmail.com
 * @date    2/19/2016
 * @time    2:19 PM
 */
namespace phamxuanloc\header;

use yii\base\Widget;

class HeaderWidget extends Widget {

	public $username;

	public function init() {
		// TODO: Change the auto generated stub
		parent::init();
	}

	public function run() {
		echo "chào mừng" . $this->username;
		parent::run();
	}
}