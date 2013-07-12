<?php

class Admin_Member_Edit_IndexAction extends agentAdminBaseAction
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
	public function executeRead(AgaviRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$member = PartnersQuery::create()->findPks($id);
		$this->setAttribute('member', $member->toArray());
		return 'Input';
	}
	public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$office = $rd->getParameter('office');
		$website = $rd->getParameter('website');
		$phone = $rd->getParameter('phone');
		$fax = $rd->getParameter('fax');
		$desc = $rd->getParameter('desc');
		$address = $rd->getParameter('address');
		PartnersQuery::create()->filterById($id)
		->update(array(
		'Office' => $office,
		'Website' => $website,
		'Phone' => $phone,
		'Fax' => $fax,
		'Desc' => $desc,
		'Address' => $address
		)
		);
		
		return 'Success';
	}
}

?>