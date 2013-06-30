<?php

class Admin_Post_Order_DownErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Post.Order.Down');
	}
}

?>