<?php

class Admin_Member_Edit_IndexInputView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Member.Edit.Index');
	}
}

?>