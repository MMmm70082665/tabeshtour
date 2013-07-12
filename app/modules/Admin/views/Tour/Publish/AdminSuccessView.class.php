<?php

class Admin_Tour_Publish_AdminSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Tour.Publish.Admin');
	}
}

?>