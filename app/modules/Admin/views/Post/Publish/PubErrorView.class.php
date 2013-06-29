<?php

class Admin_Post_Publish_PubErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.post.publish.admin'));
		$this->setAttribute('_title', 'Post.Publish.Pub');
	}
}

?>