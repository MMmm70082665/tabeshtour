<?php

class Admin_Comment_Ellow_YesSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.comment.publish.admin'));
		$this->setAttribute('_title', 'Comment.Ellow.Yes');
	}
}

?>