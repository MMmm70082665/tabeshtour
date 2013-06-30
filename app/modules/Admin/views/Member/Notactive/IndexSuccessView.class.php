<?php

class Admin_Member_Notactive_IndexSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Member.Notactive.Index');
	}
}

?>