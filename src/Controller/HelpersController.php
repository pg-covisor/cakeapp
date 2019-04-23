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

    public function url()
    {
        $this->set("title", "Cake App");
    }

    public function flash()
    {
        $this->set("title", "Cake App");
        $this->Flash->set('Form submitted successfully');
        $this->Flash->set('Unable to update records.', ['element' => 'error']);
        $this->Flash->set('The user has been saved.', ['element' => 'success']);
    }
}








?>