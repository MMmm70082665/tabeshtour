<?php

class Admin_Tour_Edit_IndexInputView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Tour.Edit.Index');
	}
}

?>