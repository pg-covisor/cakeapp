<div style="text-align: center">
    <h3>FORM Data Validation</h3>

    <div style="width: 300px; margin: 0 auto;">
        <h3>Contact Form</h3>
        <?php
            echo $this->Form->create(null, [
                'url'=>['action'=>'contactFormValidation']
            ]);
        
            echo $this->Form->text('name', ['class'=>'text_input', 'placeholder'=>'Name']);
            echo $this->Form->text('email', ['class'=>'text_input', 'placeholder'=>'Email']);
            echo $this->Form->select('service', ['o'=>'Choose Service', 'm'=>'Mobile App','w'=>'Website', 's'=>'Software'], ['default' => 'o']);
            echo "<br>";
            echo $this->Form->button('Submit');

            echo $this->Form->end();
        ?>
    </div>
</div>