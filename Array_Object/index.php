<?php
//object oriented way te array iteration and print
//for($i=0 ; $i<10 ; $i++);

$arr = array("java" , "php" , "rubey" ,"python");
$coding = new ArrayObject($arr);
$coding->append("Go");
$iterator= $coding->getIterator();
while ($iterator->valid()){
echo $iterator->current()."<br>";
$iterator->next();
}
?>