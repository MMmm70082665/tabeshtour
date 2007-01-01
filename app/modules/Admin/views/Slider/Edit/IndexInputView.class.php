<?php

class Admin_Slider_Edit_IndexInputView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Slider.Edit.Index');
	}
}

?>