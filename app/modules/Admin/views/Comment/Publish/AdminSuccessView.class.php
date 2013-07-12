<?php

class Admin_Comment_Publish_AdminSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		foreach ($this->getAttribute('comment') as $comment)
		{
		$tour_name = TourQuery::create()->findPk($comment['TourId']);
		$this->setAttribute('tour_name', $tour_name->getId());
		}
		$this->setAttribute('_title', 'Comment.Publish.Admin');
	}
}

?>