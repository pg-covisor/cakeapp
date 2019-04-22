<?php  

namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

class ThemeController extends AppController
{
    public $base_url;

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('themelayout');
        $this->base_url = Router::url("/", true);
    }

    public function index()
    {
        $this->set("title", "Cake App");
        $this->set('base_url', $this->base_url);
    }
}








?>