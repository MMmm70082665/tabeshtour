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
		$city = CityQuery::create()->find();
		$this->setAttribute('city', $city->toArray());
		return 'Input';
	}
	public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$code = $rd->getParameter('package_code');
		$desc = $rd->getParameter('desc');
		$madarek = $rd->getParameter('madarek');
		$khadamat = $rd->getParameter('khadamat');
		$status = $rd->getParameter('status');
		$cost = $rd->getParameter('cost');
		$mabda = $rd->getParameter('mabda');
		$maghsad = $rd->getParameter('maghsad');
		$begin_date = $rd->getParameter('begin_date');
		$end_date = $rd->getParameter('end_date');
		$type = $rd->getParameter('type');
		$kind = $rd->getParameter('kind');
		$travel = $rd->getParameter('travel');
		$obj = new Tour();
		$obj->setPackageCode($code);
		$obj->setDesc($desc);
		$obj->setMadarek($madarek);
		$obj->setKhadamat($khadamat);
		$obj->setStatus($status);
		$obj->setCost($cost);
		$obj->setMabda($mabda);
		$obj->setCityId($maghsad);
		$obj->setBeginDate($begin_date);
		$obj->setEndDate($end_date);
		$obj->setType($type);
		$obj->setKind($kind);
		$obj->setTravel($travel);
		$obj->save();
		return 'Success';
		
	}
}

?>