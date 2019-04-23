<h2>Breadcrumbs Helper Examples</h2>

<?php

$this->Breadcrumbs->add([
    ['title' => 'Dashboard', 'url' => ['controller' => 'tests', 'action' => 'method_case']],
    ['title' => 'Members', 'url' => ['controller' => 'tests', 'action' => 'method_case']],
    ['title' => 'Current', 'url' => ['controller' => 'tests', 'action' => 'method_case']],
    ['title' => 'Google', 'url' => ['controller' => 'tests', 'action' => 'method_case']]
]);

$this->Breadcrumbs->templates([
    'wrapper' => '<ol class="breadcrumb">{{content}}</ol>',
    'item' => '<li class="breadcrumb-item"><a href="{{url}}">{{title}}</a></li>',
]);


echo $this->Breadcrumbs->render();

?>

I m a plain text in method.ctp file.
Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
Nemo illo soluta aut labore laborum fugiat iusto deserunt, 
aliquid odio ad quam qui pariatur nihil cupiditate possimus 
magni? Obcaecati, iste voluptatem.
<br><hr>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
Nemo illo soluta aut labore laborum fugiat iusto deserunt, 
aliquid odio ad quam qui pariatur nihil cupiditate possimus 
magni? Obcaecati, iste voluptatem.Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
Nemo illo soluta aut labore laborum fugiat iusto deserunt, 
aliquid odio ad quam qui pariatur nihil cupiditate possimus 
magni? Obcaecati, iste voluptatem.
<br><hr><br>