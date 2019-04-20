<?php

namespace App\Controller;

use App\Controller\AppController;

class TestsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('showlayout');
    }

    public function method()
    {
        /* Use if no view file exits */
        // $this->autoRender = false;

        /* Use if there is no content in view file */
        // echo "Its a simple text from TestsController";
    }

    public function methodCase()
    {
        /* Sending data to view */
        $this->set("name", "Piyush Gupta");
        $this->set("email", "piyush@gmail.com");
        
        /* Sending Array Data */
        $arrayName = array(
            'color' => "Red",
            'shade' => "Blue",
            'theme' => "Orange" );
        $this->set(compact("arrayName"));
    }

    public function methodShow($arg1="", $arg2="")
    {
        // print_r($this->request->params['pass']);
        $this->set("zero", $this->request->params['pass'][0]);
        $this->set("one", $arg2);
        $this->set("title", "CakePHP App");
    }
}
