<?php

class Admin_Slider_Create_AddErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.slider.create.add'));
		$this->setAttribute('_title', 'Slider.Create.Add');
	}
}

?>