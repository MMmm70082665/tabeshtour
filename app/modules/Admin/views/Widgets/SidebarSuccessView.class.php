<?php

class Admin_Widgets_SidebarSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Widgets.Sidebar');
	}
}

?>