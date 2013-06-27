<?php

class Widgets_SidebarSuccessView extends agentWidgetsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Sidebar');
	}
}

?>