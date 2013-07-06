<?php

class Admin_Tour_Publish_AdminSuccessView extends agentAdminBaseView
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
		$this->setAttribute('_title', 'Tour.Publish.Admin');
	}
}

?>