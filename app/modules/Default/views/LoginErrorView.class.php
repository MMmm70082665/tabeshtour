<?php

class Default_LoginErrorView extends agentDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('login'));
		$this->setAttribute('_title', 'Login');
	}
}

?>