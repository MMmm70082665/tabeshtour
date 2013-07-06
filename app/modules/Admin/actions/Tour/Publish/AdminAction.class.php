<?php

class Admin_Tour_Publish_AdminAction extends agentAdminBaseAction
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
		$tour  = CountryQuery::create()->filterByPublish(false)->find();
		$this->setAttribute('tour', $tour->toArray());
		return 'Success';
	}
}

?>