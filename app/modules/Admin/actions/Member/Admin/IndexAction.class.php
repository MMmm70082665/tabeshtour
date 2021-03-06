<?php

class Admin_Member_Admin_IndexAction extends agentAdminBaseAction
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
		$office = PartnersQuery::create()->find();
		$this->setAttribute('member', $office->toArray());
		return 'Success';
	}
	public function isSecure()
	{
		return 'true';
	}
}

?>