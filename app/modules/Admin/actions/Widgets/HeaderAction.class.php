<?php

class Admin_Widgets_HeaderAction extends agentAdminBaseAction
{
	/**
	 * Returns the default view if the action does not serve the request
	 * method used.
	 *
	 * @return     mixed <ul>
	 *                     <li>A string containing the view name associated
	 *                     with this action; or</li>
	 *                     <li>An array with two indices: the parent module
	 *                     of the view to be executed and the view to be
	 *                     executed.</li>
	 *                   </ul>
	 */
	public function getDefaultViewName()
	{
		$new_tiket = TiketQuery::create()->filterByPublish(false)->find();
		$this->setAttribute('new_tiket', count($new_tiket));
		
		$non_news = NewsQuery::create()->filterByPublish(false)->find();
		$this->setAttribute('non_news', count($non_news));
		
		$close_tour = TourQuery::create()->filterByStatus(false)->find();
		$this->setAttribute('close_tour', count($close_tour));
		
		$tour_comment = TourCommentQuery::create()->filterByPublish(false)->find();
		$this->setAttribute('tour_comment', count($tour_comment));
		
		return 'Success';
		
	}
	public function isSecure()
	{
		return 'true';
	}
}

?>