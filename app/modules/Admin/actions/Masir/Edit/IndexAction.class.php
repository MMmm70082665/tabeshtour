<?php

class Admin_Masir_Edit_IndexAction extends agentAdminBaseAction
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
		$city = CityQuery::create()->findPks($id);
		$this->setAttribute('city', $city->toArray());
		return 'Input';
	}
public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$city = $rd->getParameter('city');
		$country= $rd->getParameter('country');
		$desc = $rd->getParameter('desc');
		$res = $rd->getParameter('restoran');
		$hotel = $rd->getParameter('hotel');
		$place = $rd->getParameter('place');
		$buy = $rd->getParameter('buy_center');
		$info = $rd->getParameter('useful_info');
		$object = CityQuery::create()->filterById($id)
		->update(
		array(
		'City' => $city,
		'Country' => $country,
		'Desc' => $desc,
		'Restoran' => $res,
		'Hotel' => $hotel,
		'Place' => $place,
		'BuyCenter' => $buy,
		'UsefulInfo' => $info
		)   
		);
		return 'Success';
	}
}

?>