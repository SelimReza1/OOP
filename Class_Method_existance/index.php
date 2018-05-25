<?php
include "Student.php";
// for check existancy of class and method we can use this two reserve method class_exists , method_exists
if (class_exists("Student")){
    $st = new Student();
    if(method_exists($st ,"information")){ //1st parameter obj 2nd method name
        $st->information();
    }
    else{
        echo "Method not found";
    }
}
else{
    echo "class does not exist";
}
?>