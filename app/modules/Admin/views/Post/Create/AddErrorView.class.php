<?php

class Admin_Post_Create_AddErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.post.create.add'));
		$this->setAttribute('_title', 'Post.Create.Add');
	}
}

?>