<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $albums = new Application_Model_DbTable_Albums();
        $this->view->albums = $albums->fetchAll();
    }

    public function addAction()
    {
        // action body
        $form = new Application_Form_Album();
        $form->submit->setLabel('Add');
        $form->view->form = $form;

        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                $artist = $form->getValue('artist');
                $title = $form->getValue('title');
                $albums = new Application_Model_DbTable_Albums();
                $albums->addAlbum($artist,$title);

                $this->_helper->redirector('index');
            } else {
                $form->populate($formData);
            }
            
        } else {
            # code...
        }
        
    }

    public function editAction()
    {
        // action body
    }

    public function deleteAction()
    {
        // action body
    }


}







