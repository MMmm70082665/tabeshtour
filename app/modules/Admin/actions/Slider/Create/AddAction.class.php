<?php

class Admin_Slider_Create_AddAction extends agentAdminBaseAction
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
	public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$content = $rd->getParameter('mohtava');
		$effect = $rd->getParameter('effect');
		$xpos = $rd->getParameter('xpos');
		$ypos = $rd->getParameter('ypos');
		$shenase = $rd->getParameter('shenase');
		$obj = new Slider();
		$obj->setContent($content);
		$obj->setEffect($effect);
		$obj->setXpos($xpos);
		$obj->setYpos($ypos);
		$obj->setShenase($shenase);
		$obj->save();
		return 'Success';
	}
public function isSecure()
	{
		return 'true';
	}
}

?>