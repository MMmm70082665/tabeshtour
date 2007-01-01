<?php

class Admin_Comment_Answer_AddErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.comment.answer.add',array('id' => $rd->getParameter('id'))));
		$this->setAttribute('_title', 'Comment.Answer.Add');
	}
}

?>