<?php  

namespace App\Controller;

use App\Controller\AppController;

// Step 1 : Import Connection Manager
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry; 

class DatabaseController extends AppController
{
    private $connection;
    private $table;

    public function initialize()
    {
        parent::initialize();

        // Step 2 : Call out the default database 
        // [Before calling set username, password & db_name in config/app.php]
        $this->connection = ConnectionManager::get('default');
        $this->table = TableRegistry::get('employees');
    }

    // Step 3 : Create a table in db named [employees], then create insert method
    public function insertEmployee()
    {
        $this->autoRender = false;
        $this->connection->insert('employees', [
            "name" => "Ravi Shankar",
            "email" => "ravi_101@gmail.com",
            "phone" => "123456789",
        ]);
        // Step 4 : Run in browser [database/insertemployee],
        // check database, new data has been inserted.
    }

    // Step 5 : Update Database values
    public function updateEmployeePhone($id="", $phone="")
    {
        $this->autoRender = false;
        if($id !== "" && $phone !== "") {
            $this->connection->update('employees', [
                "phone" => $phone, // Values for updation
            ],
            [
                "id" => $id, // Conditions for updation
            ]);
            // Step 6 : Run in browser [database/updateEmployeePhone/{id}/{new_phone_number}],
            // check database, data has been updated.
        } else {
            echo "Values are missing";
        }
    }

    // Step 7 : Update Database values
    public function deleteEmployee($id="")
    {
        $this->autoRender = false;
        if($id !== "") {
            $this->connection->delete('employees', [
                "id" => $id, // Conditions for updation
            ]);
        } else {
            echo "Unable to delete";
        }
    }

    // Step 8 : Selected Database values
    public function showAllEmployees()
    {
        $this->autoRender = false;
        // Option 1 : Fetch single record as object
        $oneemployee = $this->connection->execute('SELECT * FROM employees')->fetch();
        print_r($oneemployee["2"]);

        echo "<br><br>";

        // Option 2 : Get array but contains only one data
        $firstemployees = $this->connection->execute('SELECT * FROM employees LIMIT 1')->fetchAll("assoc");
        print_r($firstemployees);

        echo "<br><br>";

        // Option 3 :
        $employees = $this->connection->execute('SELECT * FROM employees')->fetchAll("assoc");
        foreach ($employees as $employee) {
            echo $employee['name']."<br>";
        }

        echo "<br><br>";

        // Option 4 :
        // $employeetwo = $this->connection->execute('SELECT * FROM employees WHERE id = 2')->fetchAll("assoc");
        // $employeetwo = $this->connection->execute('SELECT * FROM employees WHERE id = :id', ['id'=>3])->fetchAll("assoc");

        // Generating Dynamic Query [More Secure and detect database model automatically]
        // $employeetwo = $this->connection->newQuery()->select('*')->from('employees')->where(['id'=>2])->execute()->fetch('assoc');
        $employeetwo = $this->connection->newQuery()->select('*')->from('employees')->order(['id'=>'desc'])->execute()->fetchAll('assoc');

        print_r($employeetwo);
    }

    // Using Table Registry
    public function insertDummyEmployee()
    {
        $this->autoRender = false;

        // Create new Instance
        $tableObject = $this->table->newEntity();

        // Add data to it via KEY
        // $tableObject->name = "Rakesh Sharma";
        // $tableObject->email = "rakesh.sharma@yahoo.com";
        // $tableObject->phone = "9955995511";

        // Add data to it as ARRAY
        $tableObject['name'] = "Tarun Johar";
        $tableObject['email'] = "tarun.johar@rediff.com";
        $tableObject['phone'] = "8899889955";

        // Save and upload
        $this->table->save($tableObject);

        // 
        echo $tableObject->id;
    }

    // Fetching all data via Table Registry
    public function fetchAllEmployees() {
        $this->autoRender = false;

        // $allEmp = $this->table->find('all')->toArray();

        // With Conditions (inside)
        // $allEmp = $this->table->find('all', [
        //      'conditions'=>['id'=>2],
        //      'order'=>['id'='desc'],
        //      'limit'=>4
        // ])->toList();

        // With conditions (outside)
         $allEmp = $this->table->find('all')->toList();
        //  $allEmp = $this->table->find('all')->select(['name', 'email'])->order(['id'=>'desc'])->toList();
        //  $allEmp = $this->table
        //  ->find('all')
        //  ->select('name')
        //  ->where()
        //  ->order(['id'=>'desc'])
        //  ->limit(2)
        //  ->offset()
        //  ->toList();

        foreach ($allEmp as $key => $value) {
            echo $value->name." , ".$value->email."<br>";
        }
    }

    public function updateEmployeeEmail($id="", $email="")
    {
        $this->autoRender = false;
        if($id !== "" && $email !== "") {
            // 1. Get concerned data
            $temp = $this->table->get($id);
            // 2. Update its value
            $temp->email = $email;
            // 3. Save updated data
            if($this->table->save($temp)) {
                // 4a. Display Confirmation
                echo $temp->name." email-id updated successfully";
            } else {
                // 4b. Display Error
                echo "Unable to update, Try again";
            }
        } else {
            echo "Values are missing";
        }
    }

    public function deleteEmployeeRecord($id="")
    {
        $this->autoRender = false;
        if($id !== "") {
            // 1. Get concerned data
            $temp = $this->table->get($id);
            // 2. Delete its value
            if($this->table->delete($temp)) {
                // 4a. Display Confirmation
                echo $temp->name."'s account deleted successfully";
            } else {
                // 4b. Display Error
                echo "Unable to update, Try again";
            }
        } else {
            echo "Values are missing";
        }
    }
}

?>