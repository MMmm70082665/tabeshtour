<?php

class Admin_Post_Publish_PubSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Post.Publish.Pub');
	}
}

?>