<?php

class Admin_Post_Create_AddSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.post.admin.index',array('id' => 1)));
		$this->setAttribute('_title', 'Post.Create.Add');
	}
}

?>