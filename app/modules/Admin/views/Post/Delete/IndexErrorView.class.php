<?php

class Admin_Post_Delete_IndexErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Post.Delete.Index');
	}
}

?>