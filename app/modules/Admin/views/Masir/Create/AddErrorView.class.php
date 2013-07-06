<?php

class Admin_Masir_Create_AddErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.masir.create.add'));
		$this->setAttribute('_title', 'Masir.Create.Add');
	}
}

?>