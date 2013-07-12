<?php

class Admin_Tour_Publish_PubSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Tour.Publish.Pub');
	}
}

?>