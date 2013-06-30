<?php

class Admin_Member_Delete_IndexSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.member.admin.index'));
		$this->setAttribute('_title', 'Member.Delete.Index');
	}
}

?>