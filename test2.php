<?php 


$message = 'hello';
if(isset($_POST['a'])){
    $message = 'bye';
}
echo $message;


?>