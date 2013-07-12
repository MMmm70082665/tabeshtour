<?php

class Admin_Tour_Delete_IndexErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Tour.Delete.Index');
	}
}

?>