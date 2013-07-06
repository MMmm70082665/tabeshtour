<?php

class Admin_User_Create_AddSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$this->setAttribute('_title', 'User.Create.Add');
	}
}

?>