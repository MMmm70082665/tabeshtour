<?php

class Admin_Communication_Contact_DeleteSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.communication.contact.admin'));
		$this->setAttribute('_title', 'Communication.Contact.Delete');
	}
}

?>