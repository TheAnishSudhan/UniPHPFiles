<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>

    <?php

//Echo
    echo "Man, Mac is a Pain. <br> A huge one.\n\t";
    echo "Yoo";

//Variable Declaration
    $anish1="Trynna install XAMPP";
    $anish2="But life's a pain";
    $a=41;
    $b=70;
    $crying=56.89;
    $stillCrying=true;
    $wantToContinueCrying=9.9;

//Data Types
    echo "<br>".var_dump($anish1);
    echo "<br>".var_dump($a);
    echo "<br>".var_dump($crying);
    echo "<br>".var_dump($stillCrying);

    echo"<h2>".$anish1."</h2>";
    echo"<But man>".$anish2."<br>";
    echo $a+$b;

//Array Stuff
    $gaadiyan=array("Maybach", "Meri Back", "Amrutanjan", "Volini");
    $testingArray=array("Yo man", 34, true);
    var_dump($gaadiyan);
    var_dump($testingArray);

//NULL data type
    $nullTest="Hey man in Jamaican accent";
    $nullTest=null;
    echo "<br>";
    var_dump($nullTest);
    $nullTest2;
    echo "<br>";
    var_dump($nullTest2);


//str_word_count, strrev, strpos, strlen,
    $stringFunctionTest="Anish happens to be the unfortunate lord of schmucks";
    echo "<br>".strlen($stringFunctionTest);
    echo "<br>".strpos($stringFunctionTest, "schmucks");
    echo "<br>".strrev($stringFunctionTest);
    echo "<br>".str_word_count($stringFunctionTest);
    $han=str_replace($stringFunctionTest, "schmucks", "AAAAAAschmucks");
    echo "<br>".$han;
    echo "<br>".$stringFunctionTest;


    echo "<br>".(min(0,150,30,-39));
    echo "<br>".(min(0,150,30,-39));
    echo "<br>".(abs(-39));
    echo "<br>".(sqrt(4));
    echo "<br>".(round(0.60));
    echo "<br>".(rand(30,31));

    echo "<br>".(2<=>2);
    echo "<br>".(3<=>2);
    echo "<br>".(2<=>3);

    echo "<br>".((2>3)? "2 is greater": "3 is greater");

    $t = date("H"); // For 24 hr format use H, and for 12 hr format use h
    if ($t < "20") {
      echo  "<br>"."Life's great";
    } else {
      echo "<br>".'Maybe life aint all that great';
    }

    $bachhe=array("Ramu", "Shyamu", "Babu", "lalu");
    foreach ($bachhe as $bachha) {
      echo "<br>".$bachha;
    }

    echo "<br>";
    $number=array(1,2,3,4,5,6,7,8,9,10);
    foreach ($number as $variable) {
      if ($variable<10) {
        echo $variable."-";
      } else {
        echo $variable;
      }

    }

    function seekhrahehaihumkuch($oohLaLa){
      echo "<br>".'Wah bhai wah!'.$oohLaLa."<br>";
    }

    seekhRaheHaiHumKuch("Perfecto");


    $YasheshWunderKids=array("Ramesh"=>20, "Suresh"=>39, "Sathish"=>40);
    echo "Ramesh is ".$YasheshWunderKids['Ramesh']." years old.<br>";

    foreach ($YasheshWunderKids as $key => $key_value) {
      echo $YasheshWunderKids[$key].": Value<br>";
      echo $key.": Key<br>";
      echo $key_value.": Value again<br>";
    }

    //Question 3b

    $arr=array("geeks","For","GEEks");
    // $arr=array_flip($arr);
    //$arr=array_change_key_case($arr, CASE_UPPER);

    for ($i=0; $i<3;$i++) {
      $arr[$i]=strtoupper($arr[$i]);
      echo "<br>".$arr[$i];
    }


    ?>



  </body>
</html>
