<h2>FORM Helper Examples</h2>
<div>
    <br>
    <h3>Form Post Request</h3>
    <?php
        // Case 1 : Same Controller - Same Method
        // echo $this->Form->create();
        
        // Case 2 : Same Controller - Different method
        // echo $this->Form->create(null, [
        //     'url'=>['action'=>'formSubmitted']
        // ]);

        // Case 3 : Different Controller - Different method
        // echo $this->Form->create(null, [
        //     'url'=>['controller'=>'tests', 'action'=>'formAction']
        // ]);

        // Case 4 : Add file to form as attachment
        echo $this->Form->create(null, [
            'url'=>['controller'=>'tests', 'action'=>'formAction'],
            'type'=>'file'
        ]);
    
        echo $this->Form->text('name', ['class'=>'name_input', 'placeholder'=>'Name']);
        echo "<br><br>";
        echo $this->Form->text('email', ['class'=>'email_input', 'placeholder'=>'Email']);
        echo "<br><br>";
        echo $this->Form->file('submitteddata');
        echo "<br><br>";
        echo $this->Form->button('Submit');

        echo $this->Form->end();
    ?>
    <br>
    <h3>Form Get Request</h3>
    <?php
        echo $this->Form->create(null, [
            'url'=>['action'=>'formSubmitted'],
            'type'=>'get'
        ]);

        echo $this->Form->text('name', ['class'=>'name_input', 'placeholder'=>'Name']);
        echo "<br><br>";
        echo $this->Form->text('email', ['class'=>'email_input', 'placeholder'=>'Email']);

        echo $this->Form->end();
    ?>

</div>
