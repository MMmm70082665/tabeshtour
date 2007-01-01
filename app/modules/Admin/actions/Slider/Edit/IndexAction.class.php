<?php

class Admin_Slider_Edit_IndexAction extends agentAdminBaseAction
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
		$slider = SliderQuery::create()->findPks($id);
		$this->setAttribute('slider', $slider->toArray());
		return 'Input';
	}
	public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$content = $rd->getParameter('mohtava');
		$effect = $rd->getParameter('effect');
		$xpos = $rd->getParameter('xpos');
		$ypos = $rd->getParameter('ypos');
		$shenase = $rd->getParameter('shenase');
		$object = SliderQuery::create()->filterById($id)
		->update(
		array(
		'Content' => $content,
		'Effect' => $effect,
		'Xpos' => $xpos,
		'Ypos' => $ypos,
		'Shenase' =>$shenase
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