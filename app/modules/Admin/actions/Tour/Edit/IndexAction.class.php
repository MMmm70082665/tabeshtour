<?php

class Admin_Tour_Edit_IndexAction extends agentAdminBaseAction
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
		$city = CityQuery::create()->find();
		$this->setAttribute('city', $city->toArray());
		$tour =TourQuery::create()->findPks($id);
		$this->setAttribute('tour', $tour->toArray());
		return 'Input';
	}
		public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
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
		$object = TourQuery::create()->filterById($id)
		->update(
		array(
		'PackageCode' => $code,
		'Desc' => $desc,
		'Madarek' => $madarek,
		'Khadamat' => $khadamat,
		'Status' => $status,
		'Cost' => $cost,
		'Mabda' => $mabda,
		'CityId' => $maghsad,
		'BeginDate' => $begin_date,
		'EndDate' => $end_date,
		'Type' => $type,
		'Kind' => $kind,
		'Travel' => $travel
		)
		);
		return 'Success';
	}
	
}

?>