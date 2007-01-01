<?php

class Admin_Comment_Answer_AddAction extends agentAdminBaseAction
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
		$cm = TourCommentQuery::create()->findById($id);
		$this->setAttribute('comment', $cm->toArray());
		return 'Input';
	}
public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$desc = $rd->getParameter('desc');
		$object = TourCommentQuery::create()->filterById($id)
		->update(
		array(
		'Publish' => true,
		'Answer' => $desc
		)
		);
		return 'Success';
	}
}

?>