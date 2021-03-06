<?php

class Admin_Post_Create_AddAction extends agentAdminBaseAction
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
		$subject = $rd->getParameter('subject');
		$long_desc = $rd->getParameter('long_desc');
		$short_desc = $rd->getParameter('short_desc');
		$tag = $rd->getParameter('tag');
		$pub = $rd->getParameter('publisher');
		$obj = new News();
		$obj->setSubject($subject);
		$obj->setLongDesc($long_desc);
		$obj->setShortDesc($short_desc);
		$obj->setPublish($pub);
        $obj->setDate($shamsi->date('d M Y',time()));
		$obj->save();
		return 'Success';
	}
	public function isSecure()
	{
		return 'true';
	}
}

?>