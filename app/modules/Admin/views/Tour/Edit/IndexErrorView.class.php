<?php

class Admin_Tour_Edit_IndexErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.tour.edit.index',array('id' => $id)));
		$this->setAttribute('_title', 'Tour.Edit.Index');
	}
}

?>