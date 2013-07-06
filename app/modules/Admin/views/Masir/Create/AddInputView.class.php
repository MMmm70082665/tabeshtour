<?php

class Admin_Masir_Create_AddInputView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Masir.Create.Add');
	}
}

?>