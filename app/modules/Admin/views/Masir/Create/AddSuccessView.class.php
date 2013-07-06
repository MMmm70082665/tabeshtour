<?php

class Admin_Masir_Create_AddSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.masir.admin.index'));
		$this->setAttribute('_title', 'Masir.Create.Add');
	}
}

?>