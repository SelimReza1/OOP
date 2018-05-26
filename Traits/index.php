<?php
// by using trait we use facility of multiple inheritance which is not supported in php

trait Java
{
    public function javaCoder()
    {
        return "I love java<br>";
    }
}

trait Php
{
    public function phpCoder()
    {
        return "I love Php<br>";
    }
}

class CoderOne{
    use Java, Php;
}
class CoderTwo{
    use Php;
    public function phpCoder()  //override
    {
        return "I love php and swift<br>";
    }
}

$cd1 = new CoderOne();
echo $cd1->javaCoder();
echo $cd1->phpCoder();

$cd2 = new CoderTwo();
echo $cd2->phpCoder();
?>