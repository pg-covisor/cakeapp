<!-- Step 4 : Create corresponding view file  -->
<h2>Custom Helper Examples</h2>
<p>Square root of 5 is : </p>
<?php
    echo $this->Math->square(5);
?>
<br>
<p>Length of this word [Atmosphere] is : </p>
<?php
    echo $this->Math->stringLength("Atmosphere");
?>