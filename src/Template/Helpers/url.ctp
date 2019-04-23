<h2>URL Helper Examples</h2>
<br>
<h5>1. Simple Url BUILD :-</h5>
<a href="<?php echo $this->Url->build([
    "controller" => "Helpers",
    "action" => "breadcrumbs",
    "bar",
]); ?>">helpers/breadcrumbs</a>
<br>
<br>
<h5>2. URL with GET parameters and fragment anchor:-</h5>
<a href="<?php echo $this->Url->build([
    "controller" => "Helpers",
    "action" => "url",
    "?" => ["name" => "naval", "email" => "naval@gmail.com"],
]); ?>">helpers/breadcrumbs</a>
<br>
<br>
<h5>3. Attaching CSS file:-</h5>
<a href="<?php echo $this->Url->css("main.css"); ?>">Css File Link</a>
<br>
<br>
<h5>4. Attaching SCRIPT file:-</h5>
<a href="<?php echo $this->Url->script("main.js"); ?>">Script File Link</a>
<br>
<br>
<h5>5. Attaching IMAGE file:-</h5>
<a href="<?php echo $this->Url->image("shutterbug.jpg"); ?>">Image File Link</a>
<br>
<br>




<br><br>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
Quos est provident eaque non accusamus nesciunt adipisci 
consequatur numquam nisi repellat soluta, quidem ab assumenda 
nostrum impedit omnis iusto. Accusamus, exercitationem!
Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
Quos est provident eaque non accusamus nesciunt adipisci 
consequatur numquam nisi repellat soluta, quidem ab assumenda 
nostrum impedit omnis iusto. Accusamus, exercitationem!
<br><hr>
<p>Name :
<?php isset($_GET["name"]) ? print_r($_GET["name"]) : "" ?></p>
<p>Email :
<?php isset($_GET["email"]) ? print_r($_GET["email"]) : "" ?></p>