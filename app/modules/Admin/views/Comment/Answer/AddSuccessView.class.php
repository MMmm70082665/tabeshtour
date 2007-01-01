<?php

class Admin_Comment_Answer_AddSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.comment.admin.index'));
		$this->setAttribute('_title', 'Comment.Answer.Add');
	}
}

?>