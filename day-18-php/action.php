<?php

require_once 'vendor/autoload.php';
use App\classes\FullName;

//echo '<pre/>';
//print_r($_POST);

if (isset($_GET['pages']))
{
    if ($_GET['pages']== 'full-name')
    {
        include 'pages/full-name.php';
    }
}
elseif (isset($_POST['btn']))
{
   $fullName= new FullName($_POST);
   $result =$fullName->getFullName();
//   echo $result;
   include 'pages/full-name.php';

}