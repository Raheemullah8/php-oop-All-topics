


<?php

include '33th_connection_data-base.php';
$obj = new database();
$obj->insert('student',['Stu_name'=>'Qsaim','Age'=>'21']);
echo "insert Result is :";
print_r($obj->getResult());

?>