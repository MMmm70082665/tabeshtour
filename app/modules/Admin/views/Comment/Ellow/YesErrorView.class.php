<?php

class Admin_Comment_Ellow_YesErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Comment.Ellow.Yes');
	}
}

?>