<?php
require_once 'class_account.php';

$ac1 = new Account("C001",6000000);
$ac2 = new Account("C002",5350000);
$ac3 = new Account("C003",2500000);

$ac1->cetak();
$ac1->deposit(1000000);
echo '<br/>nabung : 1000000 <br/>';
$ac1->cetak();

?>