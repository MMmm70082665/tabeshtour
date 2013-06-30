<?php

class Admin_Member_Publish_PubAction extends agentAdminBaseAction
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
		return 'Success';
	}
	public function executeRead(AgaviRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$object = MemberQuery::create()->findOneById($id);
		if ($object->getPublish() == true)
		$object->setPublish(false);
		else 
		$object->setPublish(true);
		$object->save();
		return 'Success';
	}
}

?>