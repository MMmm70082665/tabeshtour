<?php

class Admin_Tour_Admin_IndexSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$city_code = $this->getAttribute('city_code');
		$tour = TourQuery::create()->filterByCityId($city_code)->find();
		$this->setAttribute('tour', $tour->toArray());
		$this->setAttribute('_title', 'Tour.Admin.Index');
	}
}

?>