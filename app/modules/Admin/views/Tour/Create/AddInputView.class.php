<?php

class Admin_Tour_Create_AddInputView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Tour.Create.Add');
	}
}

?>