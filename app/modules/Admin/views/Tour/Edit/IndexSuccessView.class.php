<?php

class Admin_Tour_Edit_IndexSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.tour.admin.index'));
		$this->setAttribute('_title', 'Tour.Edit.Index');
	}
}

?>