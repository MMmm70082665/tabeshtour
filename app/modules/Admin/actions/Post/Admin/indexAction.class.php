<?php

class Admin_Post_Admin_indexAction extends agentAdminBaseAction
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
		$value = array();
		$id = $rd->getParameter('id');
		$post = NewsQuery::create()->filterByPublish(true)->paginate($id,20);
		$page = $post->getLinks(100);
		$this->setAttribute('page', $page);
		foreach ($post as $p)
		{
			$value[] = $p->toArray();
		}
		$this->setAttribute('post', $value);
		return 'Success';
	}
}

?>