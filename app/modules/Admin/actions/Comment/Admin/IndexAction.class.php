<?php

class Admin_Comment_Admin_IndexAction extends agentAdminBaseAction
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
		$comment = TourCommentQuery::create()->orderByTourId()->filterByPublish(true)->find();
		$this->setAttribute('comment', $comment->toArray());
		return 'Success';
	}
	public function isSecure()
	{
		return 'true';
	}
}

?>