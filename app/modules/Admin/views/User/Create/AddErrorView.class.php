<?php

class Admin_User_Create_AddErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.user.create.add'));
		$this->setAttribute('_title', 'User.Create.Add');
	}
}

?>