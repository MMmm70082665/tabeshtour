<?php

class Admin_Post_Edit_IndexAction extends agentAdminBaseAction
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
		$post = NewsQuery::create()->findPks($id);
		$this->setAttribute('post', $post->toArray());
		return 'Input';
	}
	public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$subject = $rd->getParameter('subject');
		$long_desc = $rd->getParameter('long_desc');
		$short_desc = $rd->getParameter('short_desc');
		$tag = $rd->getParameter('tag');
		$pub = $rd->getParameter('publisher');
		$object = NewsQuery::create()->filterById($id)
		->update(
		array(
		'Subject' => $subject,
		'Publish' => $pub,
		'LongDesc' => $long_desc,
		'ShortDesc' => $short_desc,
		'Tag' =>$tag
		)
		);
		return 'Success';
	}
	public function isSecure()
	{
		return 'true';
	}
}

?>