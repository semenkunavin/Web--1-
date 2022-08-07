<?php
    $a = rand(0,100);
    $b = rand(0,100);
    
    echo "$a + $b" . $a + $b;

?>
<br>
<?php
    $str_one = bin2hex(random_bytes(10));
    $str_two = bin2hex(random_bytes(10));
    echo "$str_one $str_two"
?>
<br>
<?php
    $rand = array("Dog", "Cat", "Fish", "Potato");
    shuffle($rand);
    $type_animal = $rand[0];
    $a = "Шарик";
    $b = "Барсик";
    $c = "Немо";
    if ($type_animal == "Cat") {echo $b;}
    else if ($type_animal == "Dog") {echo $a;}
    else if ($type_animal == "Fish") {echo $c;}
    else {echo "Error";}
?>

<br>
<?php
  require_once "index.html";
?>