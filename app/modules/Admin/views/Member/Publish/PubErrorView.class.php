<?php

class Admin_Member_Publish_PubErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$this->setAttribute('_title', 'Member.Publish.Pub');
	}
}

?>