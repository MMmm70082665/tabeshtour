<?php

class Admin_Masir_Edit_IndexErrorView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.masir.edit.index',array('id' => $id)));
		
		$this->setAttribute('_title', 'Masir.Edit.Index');
	}
}

?>