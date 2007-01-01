<?php

class Admin_Comment_Delete_IndexSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.comment.admin.index'));
		$this->setAttribute('_title', 'Comment.Delete.Index');
	}
}

?>