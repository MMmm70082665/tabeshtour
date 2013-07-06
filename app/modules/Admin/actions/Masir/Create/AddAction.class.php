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
		$tour = CountryQuery::create()->filterByPublish(true)->find();
		$this->setAttribute('tour', $tour->toArray());
		return 'Input';
	}
	public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
        $shamsi = new jDateTime();
		$name = $rd->getParameter('name');
		$publish  = $rd->getParameter('publish');
		$tour_id = $rd->getParameter('tour');
		$desc = $rd->getParameter('desc');
		$useful_info = $rd->getParameter('useful_info');
		$restoran = $rd->getParameter('restoran');
		$hotel = $rd->getParameter('hotel');
		$place = $rd->getParameter('place');
		$buy = $rd->getParameter('buy_center');
		$obj = new City();
		$obj->setName($name);
		$obj->setPublish($publish);
		$obj->setCountryId($tour_id);
		$obj->setDesc($desc);
		$obj->setUsefulInfo($useful_info);
		$obj->setRestoran($restoran);
		$obj->setHotel($hotel);
		$obj->setPlace($place);
		$obj->setBuyCenter($buy);
        $obj->setDate($shamsi->date('d M Y',time()));
		return 'Success';
	}
}

?>