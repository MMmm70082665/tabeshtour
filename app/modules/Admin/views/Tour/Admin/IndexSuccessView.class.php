<?php

class Admin_Tour_Admin_IndexSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$city = array();
		$this->setupHtml($rd,'admin');
		foreach ($this->getAttribute('tour') as $tour)
		{
			$city = CityQuery::create()->filterByCountryId($tour['Id'])->find();
		}
		$this->setAttribute('city_count', count($city));
		$this->setAttribute('_title', 'Tour.Admin.Index');
	}
}

?>