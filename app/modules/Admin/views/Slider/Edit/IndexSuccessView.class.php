<?php

class Admin_Slider_Edit_IndexSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.slider.admin.index'));
		$this->setAttribute('_title', 'Slider.Edit.Index');
	}
}

?>