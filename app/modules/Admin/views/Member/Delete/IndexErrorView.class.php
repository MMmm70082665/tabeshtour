<?php

class Admin_Member_Delete_IndexErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Member.Delete.Index');
	}
}

?>