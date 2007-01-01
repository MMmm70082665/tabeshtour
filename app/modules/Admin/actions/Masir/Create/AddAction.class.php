<?php

class Admin_Masir_Create_AddAction extends agentAdminBaseAction
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
		$city = $rd->getParameter('city');
		$country= $rd->getParameter('country');
		$desc = $rd->getParameter('desc');
		$res = $rd->getParameter('restoran');
		$hotel = $rd->getParameter('hotel');
		$place = $rd->getParameter('place');
		$buy = $rd->getParameter('buy_center');
		$info = $rd->getParameter('useful_info');
		$obj = new City();
		$obj->setCity($city);
		$obj->setCountry($country);
		$obj->setDesc($desc);
		$obj->setRestoran($res);
		$obj->setHotel($hotel);
		$obj->setPlace($place);
		$obj->setBuyCenter($buy);
		$obj->setUsefulInfo($info);
		$obj->save();
		return 'Success';
	}
}

?>