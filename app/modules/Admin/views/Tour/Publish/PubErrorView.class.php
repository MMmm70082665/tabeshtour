<?php

class Admin_Tour_Publish_PubErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Tour.Publish.Pub');
	}
}

?>