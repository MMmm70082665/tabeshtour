<?php

class Admin_Masir_Admin_IndexSuccessView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		foreach ($this->getAttribute('masir') as $city)
		{
		$tour_name = CountryQuery::create()
		->useCityQuery()
			->filterByCountryId($city['CountryId'])
			->endUse()
		->find();
		}
		foreach ($tour_name as $tour)
		{
			$this->setAttribute('tour_name', $tour->getName());
		}
		$this->setAttribute('_title', 'Masir.Admin.Index');
	}
}

?>