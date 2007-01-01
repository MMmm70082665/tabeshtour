<?php

class Admin_Slider_Edit_IndexErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.slider.edit.index',array('id' => $id)));
		$this->setAttribute('_title', 'Slider.Edit.Index');
	}
}

?>