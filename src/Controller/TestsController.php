<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

class TestsController extends AppController
{
    public $url;

    // Load Custom Layout for this controller
    // i.e. Kis layout mein yield honge iss controller ke views
    // [If not defined then default will be used]
    // C:\xampp\htdocs\cakeapp\src\Template\Layout\default.ctp
    public function initialize()
    {
        parent::initialize();
        // $this->viewBuilder()->layout('showlayout');

        /* Class 10 : Using Helper Methods */
         // Calling a static method [url()] of [Router] class
        // and saving its initialized object in $url variable.
        $this->url = Router::url("/", true);
        // print_r($this->url);die;
        // echo $this->url."webroot/img/cake-logo.png"; die;
       
    }

    // CASE 1 :  DISPLAY DATA DIRECTLY WITHOUT VIEW
    public function method()
    {
        /* Use if no view file exits */
        // $this->autoRender = false;

        /* Use if there is no content in view file */
        // echo "Its a simple text from TestsController";
    }

    /* CASE 2 :  DISPLAY DATA via VIEW &
     * SENDING DATA TO VIEW via CONTROLLER */
    public function methodCase()
    {
        // Sending VVariables
        $this->set("name", "Piyush Gupta");
        $this->set("email", "piyush@gmail.com");
        
        // Sending Array Data
        $arrayName = array(
            'color' => "Red",
            'shade' => "Blue",
            'theme' => "Orange" );
        $this->set(compact("arrayName"));
    }

    /* CASE 3 : DISPLAY DATA via VIEW &
     * SENDING DATA TO VIEW via CONTROLLER 
     * DATA COLLECTED FROM WEB URL */
    public function methodShow($arg1="", $arg2="")
    {
        // For Debugging
        // print_r($this->request->params['pass']);
        $this->set("title", "CakePHP App");

        // Sending value as-it-is
        $this->set("zero", $this->request->params['pass'][0]);

        // Sending Conditional Data
        switch ($arg2) {
            case 1:
                $this->set("one", "Piyush Gupta");
                break;

            case 55:
                $this->set("one", "Raju Chandan");
                break;
            
            default:
                $this->set("one", "No Proper Value Found for {$arg2}");
                break;
        }
    }
}
