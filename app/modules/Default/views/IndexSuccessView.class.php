<?php

class Default_IndexSuccessView extends agentDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Index');
	}
}

?>