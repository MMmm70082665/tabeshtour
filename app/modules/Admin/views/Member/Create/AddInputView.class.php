<?php

class Admin_Member_Create_AddInputView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Member.Create.Add');
	}
}

?>