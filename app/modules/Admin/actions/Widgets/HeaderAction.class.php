<?php

class Admin_Widgets_HeaderAction extends agentAdminBaseAction
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
		$new_tiket = TiketQuery::create()->filterByPublish(false)->find();
		$this->setAttribute('new_tiket', count($new_tiket));
		$non_publish_post = PostQuery::create()->filterByPublisher(false)->find();
		$this->setAttribute('non_publisher', count($non_publish_post));
		$non_publish_member = MemberQuery::create()->filterByPublish(false)->find();
		$this->setAttribute('non_member', count($non_publish_member));
		$non_tour = CountryQuery::create()->filterByPublish(false)->find();
		$this->setAttribute('non_tour', count($non_tour));
		$non_city = CityQuery::create()->filterByPublish(false)->find();
		$this->setAttribute('non_city', count($non_city));
		return 'Success';
	}
}

?>