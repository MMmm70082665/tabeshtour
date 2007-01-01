<?php

class Default_LogoutErrorView extends agentDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		$url = $this->getContext()->getRouting()->gen('admin.index');
		$this->getContainer()->getResponse()->setRedirect($url);
		$this->setAttribute('_title', 'Logout');
	}
}

?>