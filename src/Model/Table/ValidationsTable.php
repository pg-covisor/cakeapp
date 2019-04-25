<?php
    namespace App\Model\Table;

    use Cake\ORM\Table;
    use Cake\Validation\Validator;

    // Step 1 : Create Modal
    class ValidationsTable extends Table
    {

        // This method will be called automatically by cakephp 
        // on creation of object of this class. For Example :
        // (ValidationController.php - line no. 101 - newEntity())
        public function validationDefault(Validator $validator)
        {
            $validator
            ->requirePresence('email', 'create', 'Email is required')
            ->add('email',[
                'unique'=>[
                    'rule'=>'validateUnique',
                    'provider'=>'table',
                    'message'=>'Email should be unique',
                ]
            ])
            ->requirePresence('password', 'create', 'Password is required')
            ->requirePresence('confirm_password', 'create', 'Password is required')
            ->add('confirm_password',[
                'password_mismatch'=>[
                    'rule'=>['compareWith', 'password'],
                    'message'=>'Password not matched',
                ]
            ])
            ;
            return $validator;
        }

    }


?>