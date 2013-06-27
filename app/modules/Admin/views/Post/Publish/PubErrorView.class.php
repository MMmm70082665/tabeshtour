<?php

class Admin_Post_Publish_PubErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Post.Publish.Pub');
	}
}

?>