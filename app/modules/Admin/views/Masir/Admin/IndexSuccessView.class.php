<?php

class Admin_Masir_Admin_IndexSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$this->setAttribute('_title', 'Masir.Admin.Index');
	}
}

?>