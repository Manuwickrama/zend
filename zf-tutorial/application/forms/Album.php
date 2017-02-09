<?php

class Application_Form_Album extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $this->setName('album');
        $id = new Zend_Form_Element_Hidden('id');
        $id->addFilter('Int');

        // The Artist text box for the form
        $artist = new Zend_Form_Element_Text('artist');
        $artist->addFilter('StripTags');
        $artist->addFilter('StringTrim');
        $artist->setLabel('Artist');
        $artist->setRequired(true);
        $artist->addValidator('NotEmpty');

        // The Title box
        $title = new Zend_Form_Element_Text('title');
        $title->addFilter('StripTags');
        $title->addFilter('StringTrim');
        $title->addValidator('NotEmpty');
        $title->setLabel('Title');
        $title->setRequired(true);

        // The submit button to submit the form.
        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setAttrib('id','submitbutton');

        $this->addElements(array($id,$artist,$title,$submit));
    }


}

