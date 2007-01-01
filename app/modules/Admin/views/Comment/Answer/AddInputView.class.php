<?php

class Admin_Comment_Answer_AddInputView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Comment.Answer.Add');
	}
}

?>