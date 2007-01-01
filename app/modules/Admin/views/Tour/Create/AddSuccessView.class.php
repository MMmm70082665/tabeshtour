<?php

class Admin_Tour_Create_AddSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.tour.admin.index'));
		$this->setAttribute('_title', 'Tour.Create.Add');
	}
}

?>