<?php

echo 'hello kamran';

$address = $_GET['path'];

echo $address;

switch ($address){
    case 'contact':
        include 'src/Controllers/contact.php';
        break;
    case 'about':
        include 'about.php';
        break;
    default:
        echo 'home page';
}
?>

<ul>
    <a href="src/Controllers/contact.php"><li>contact</li></a>
    <li>about</li>
    <li>home</li>
</ul>
