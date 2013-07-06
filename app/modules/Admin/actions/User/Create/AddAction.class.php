<?php

class Admin_User_Create_AddAction extends agentAdminBaseAction
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
		$user = UserQuery::create()->find();
		$this->setAttribute('user', $user->toArray());
		return 'Input';
	}
	public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$username = $rd->getParameter('username');
		$password = $rd->getParameter('password');
		UserQuery::create()
		->filterById(1)
		->update(array(
		'Username' => $username,
		'Password' => $password
		)
		);
		return 'Success';
	}
}

?>