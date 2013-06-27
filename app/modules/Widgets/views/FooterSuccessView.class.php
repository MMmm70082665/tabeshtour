<?php

class Widgets_FooterSuccessView extends agentWidgetsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Footer');
	}
}

?>