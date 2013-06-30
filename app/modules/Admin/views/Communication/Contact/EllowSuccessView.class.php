<?php

class Admin_Communication_Contact_EllowSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.communication.contact.new'));
		$this->setAttribute('_title', 'Communication.Contact.Ellow');
	}
}

?>