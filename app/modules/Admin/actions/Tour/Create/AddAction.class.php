<?php

class Admin_Tour_Create_AddAction extends agentAdminBaseAction
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
		return 'Input';
	}
	public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$shamsi = new jDateTime();
		$name = $rd->getParameter('tour');
		$pub = $rd->getParameter('publish');
		$obj = new Country();
		$obj->setName($name);
		$obj->setPublish($pub);
		$obj->setDate($shamsi->date('d M Y',time()));
		$obj->save();
		return 'Success';
		
	}
}

?>