<div style="width: 300px; margin: 0 auto;">
        <h3>Login Form</h3>
        <?php
            echo $this->Form->create(null, [
                'url'=>['action'=>'loginFormValidation']
            ]);
        
            echo $this->Form->text('email', ['class'=>'form_input', 'placeholder'=>'Email']);
            echo $this->Form->password('password', ['class'=>'form_input', 'placeholder'=>'Password']);
            echo $this->Form->text('confirm_password', ['class'=>'form_input', 'placeholder'=>'Confirm Password']);
            echo "<br>";
            echo $this->Form->button('Submit');

            echo $this->Form->end();
        ?>
    </div>