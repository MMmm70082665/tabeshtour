<?php

class Admin_Member_Create_AddSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.member.admin.index'));
		$this->setAttribute('_title', 'Member.Create.Add');
	}
}

?>