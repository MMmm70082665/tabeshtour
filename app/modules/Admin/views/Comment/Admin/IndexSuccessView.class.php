<?php

class Admin_Comment_Admin_IndexSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		foreach ($this->getAttribute('comment') as $cm)
		{
			$tour = TourQuery::create()->findPk($cm['TourId']);
		}
		$this->setAttribute('tour', $tour->toArray());
		$this->setAttribute('_title', 'Comment.Admin.Index');
	}
}

?>