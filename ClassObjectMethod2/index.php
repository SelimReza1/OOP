<?php include "function.php"?>
<form action="" method="post">
    <table>
        <tr>
            <td>Enter the first Number:  </td>
            <td><input type="number" name="num1" /> </td>
        </tr>
        <tr>
            <td>Enter the Second Number:  </td>
            <td><input type="number" name="num2" /> </td>
        </tr>
        <tr>
            <td><input type="submit" name="calculation" value="calculate" /> </td>
        </tr>
    </table>
</form>

<?php
if(isset($_REQUEST['calculation'])){
    $numone = $_REQUEST['num1'];
    $numtwo = $_REQUEST['num2'];
    if(empty($numone) or empty($numtwo)){
        echo "<span style='color:#EE6554'>Field mus not be empty</span>";
    }
    else {
        echo "First number is : ".$numone." Second number is :".$numtwo."<br>";
        $cal = new Calculation();
        $cal->add($numone, $numtwo);
        $cal->sub($numone, $numtwo);
        $cal->mul($numone, $numtwo);
        $cal->div($numone, $numtwo);
    }
}
?>
