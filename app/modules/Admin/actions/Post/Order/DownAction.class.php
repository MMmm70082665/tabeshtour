<?php

class Admin_Post_Order_DownAction extends agentAdminBaseAction
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
		return 'Success';
	}
	public function executeRead(AgaviRequestDataHolder $rd)
	{
		$_find = $rd->getParameter('id');
		$v = PostQuery::create()->findPk($_find);
		$order = $v->getOrder();
		PostQuery::create()
		->filterByOrder($order + 1)
		->update(array('Order' => $order));
		PostQuery::create()
		->filterById($_find)
		->update(array('Order' => $order + 1));
		return 'Success';
	}
}

?>