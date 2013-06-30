<?php

class Admin_Member_Create_AddErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.member.create.add'));
		$this->setAttribute('_title', 'Member.Create.Add');
	}
}

?>