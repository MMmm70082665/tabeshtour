<?php

class Admin_Communication_Contact_DeleteErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Communication.Contact.Delete');
	}
}

?>