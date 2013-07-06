<?php

class Admin_Masir_Edit_IndexInputView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Masir.Edit.Index');
	}
}

?>