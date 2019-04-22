<?php  

namespace App\Controller;

use App\Controller\AppController;

class HelpersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('bootlayout');
    }

    public function breadcrumbs()
    {
        $this->set("title", "Cake App");
    }

    
}








?>