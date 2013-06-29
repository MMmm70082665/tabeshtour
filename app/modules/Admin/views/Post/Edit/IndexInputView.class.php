<?php

class Admin_Post_Edit_IndexInputView extends agentAdminBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('admin.post.edit.index',array('id' => $id)));
		$this->setAttribute('_title', 'Post.Edit.Index');
	}
}

?>