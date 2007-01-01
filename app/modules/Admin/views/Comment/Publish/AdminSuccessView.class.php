<?php

class Admin_Comment_Publish_AdminSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		foreach ($this->getAttribute('comment') as $cm)
		{
			$tour = TourQuery::create()->findPk($cm['TourId']);
		}
		$this->setAttribute('tour', $tour->toArray());
		$this->setAttribute('_title', 'Comment.Publish.Admin');
	}
}

?>