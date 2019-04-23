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

    public function form()
    {
        $this->viewBuilder()->setLayout(false);
        
        // Case 1 : Collect submitted from data
        if($this->request->is('post')){
            $data = $this->request->data;
            print_r("Case 1 : Collected within same controller & same method ==> ");
            print_r($data);
        }
    }

    public function formSubmitted()
    {
        $this->viewBuilder()->setLayout(false);

        // Case2 : Collect submitted from data
        if($this->request->is('post')){
            $this->autoRender = false;
            $data = $this->request->data;
            print_r("Case 2 : Collected within same controller but different method ==> ");
            print_r($data);
        }
    }

    // Step 3 : Create a method in controller to call 
    public function maths()
    {
        $this->viewBuilder()->setLayout(false);
    }
}








?>