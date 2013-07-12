<?php

class Admin_Tour_Create_AddErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Tour.Create.Add');
	}
}

?>