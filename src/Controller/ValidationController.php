<?php  

namespace App\Controller;

use App\Controller\AppController;
use Cake\Validation\Validator;

class ValidationController extends AppController
{
   
    public function initialize()
    {
        parent::initialize();
    }

    // FROM INPUT DATA VALIDATION BEFORE INSERTING INTO DB
    // OPTION 1 : VIA CONTROLLER ITSELF

    public function contactForm(){}

    public function contactFormValidation()
    {
        if($this->request->is('post')){
            $this->autoRender = false;

            $data = $this->request->data;
            // print_r("Contact from data collected");
            // print_r($data);

            $req_data = array(
                'name' => $data['name'],
                'email' => $data['email'],
                'service' => $data['service'],
                'age' => 45,
                'url' => "sd.com"
            );
            // print_r($req_data);

            $this->_validateDataByController($req_data);
        }
    }

    protected function _validateDataByController($req_data)
    {
        // Creating instance
            $validator = new Validator;

            // Rules
            $validator
            ->requirePresence('name', 'create', 'Name is required')
            // ->add('name', [
            //     'length'=>[
            //         'rule'=>['minLength', 6],
            //         'message'=>'Name length should be min 6'
            //     ]
            // ])
            ->add('name', 'length', [
                    'rule'=>['minLength', 6],
                    'message'=>'Name length should be min 6'
            ])
            ->allowEmpty('name')
            ->requirePresence('email', 'create', 'Email is required')
            ->add('email',[
                'email'=>[
                    'rule'=>['email'],
                    'message'=>'Invalid Email Address'
                ]
            ])
            // ->notEmpty('email', 'Email is required', 'create')
             ->requirePresence('age', 'create', 'Age is required')
             ->numeric('age', 'Age should be numeric', 'create')
             ->url('url', 'Invalid Url', 'create')
            ;
            

            $validationResult = $validator->errors($req_data);
            if(!empty($validationResult)) {
                print_r($validationResult);
                // echo $validationResult['url']['url'];
            } else {
                echo "Form Validated Successfully";
            }
    }

    // OPTION 2 : VIA MODAL TABLE

    public function loginForm(){}

    public function loginFormValidation()
    {
        if($this->request->is('post')){
            $this->autoRender = false;
            $data = $this->request->data;
            $this->_validateDataByModal($data);
        }
    }

    protected function _validateDataByModal($data)
    {
        $this->loadModel('Validations');
        $validation = $this->Validations->newEntity($data);
        $validationErrors = $validation->errors();
        if(!empty($validationErrors)) {
            print_r($validationErrors);
        } else {
            echo "Validation Passed";
        }
    }
}

?>