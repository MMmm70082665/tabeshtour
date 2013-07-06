<?php

class Admin_Masir_Publish_AdminSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Masir.Publish.Admin');
	}
}

?>