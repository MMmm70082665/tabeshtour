<?php

class Admin_Member_Create_AddAction extends agentAdminBaseAction
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
		$office = $rd->getParameter('office');
		$website = $rd->getParameter('website');
		$phone = $rd->getParameter('phone');
		$fax = $rd->getParameter('fax');
		$desc = $rd->getParameter('desc');
		$address = $rd->getParameter('address');
		$obj = new Partners();
		$obj->setOffice($office);
		$obj->setWebsite($website);
		$obj->setFax($fax);
		$obj->setPhone($phone);
		$obj->setDesc($desc);
		$obj->setAddress($address);
		$obj->setDate($shamsi->date('d M Y',time()));
		$obj->save();
		return 'Success';
		
	}
}

?>