<?php

class DijitTooltipController extends Zend_Controller_Action
{

    public function init()
    {
    }

    public function indexAction()
    {
        $this->_redirect('/index/index/');
    }

    public function simpleAction()
    {
    }

    public function selectFormAction()
    {
        $this->view->form = new Default_Form_SelectExample();
    }
}
