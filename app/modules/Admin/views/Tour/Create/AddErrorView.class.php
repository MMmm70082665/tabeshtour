<?php

class Admin_Tour_Create_AddErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.tour.create.add'));
		$this->setAttribute('_title', 'Tour.Create.Add');
	}
}

?>