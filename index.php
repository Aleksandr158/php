<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная 9</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите число x между -1 и 1:</p>
        <input type="text" name="x">
        <p>Введите число n:</p>
        <input type="text" name="n">
        <input type="submit" value="OK">
    </form>
    <?php
        $x=$_POST["x"];
        $n=$_POST["n"];
        $vspcisl = 1;
        $vspznam = 1;
        $vspc=-1;
        $vspz=0;
        for($i=0;$i<$n;$i++){
            $vspc=$vspc+2;
            $vspcisl = $vspcisl*$vspc;
        }        
        for($i=0;$i<$n;$i++){
            $vspz=$vspz+2;
            $vspznam = $vspznam*$vspz;
        }        
        $b = 0;
        for($a=1; $a<=$n; $a++){
            $b=$b+(($vspcisl*(2*$a-1)*($x**(2*$a+1)))/($vspznam*(2*$a)*(2*$a+1)));
        }
        $b=$x+$b;
        echo $b;
    ?>
</body>
</html>