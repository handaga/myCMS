<?php 

require_once('cmsBase.php');
class TemplateFunctions extends CmsBase {

	var $templateName = 'default';

	function show() {
		require_once($this->getCurrentTemplatePath() . 'template.php');
	}

	function getCurrentTemplatePath() {
		//untuk mendapatkan nama folder tempat menyimpan TEMPLATE
		return 'templates/' . $this->templateName . '/';
	}

	function setTemplate($templateName) {
		$this->templateName = $templateName;
	}


	//fungsi untuk menggabungkan TEMPLATE
	//dengan mangement CONTENT
	function appOutput() {
		require_once('includes/cmsApplication.php');
		$app = new CmsApplication();
		$app->run();
	}



}