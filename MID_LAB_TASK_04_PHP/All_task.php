<?php
    function inti(){
        Task1();
        echo "<br>";
        Task2();
        echo "<br>";
        Task3();
        echo "<br>";
        Task4();
        echo "<br>";
        Task5();
        echo "<br>";
        Task6();
        echo "<br>";
    }
    function Task1(){
        echo "Task1 Start <br>";
        $length = 10;
        $width = 5;
        echo "The area of a Rectangle =";
        echo $length * $width;
        echo "<br>";
        echo "perimeter = ";
        echo 2*($length+$width);
    }
    function Task2(){
        echo "Task2 Start<br>";
        $amount = 10000;
        echo " Vat = 15% of the amount = ";
        echo $amount/15;
    }
    function Task3(){
        echo "Task3 Start <br>";
        $Cnumber = 9;
        if($Cnumber%2==0){
                    echo "The given number is even.";
                }
                else{
                    echo "The given number is odd.";
                }
            }
    function Task4(){
        echo "Task4 Start <br>";
        $number_1 = 5;
        $number_2 = 51;
        $number_3 = 151;
        if($number_1 > $number_2 ){
            if($number_1 > $number_3){
                echo "The largest number from three given numbers is :".$number_1;
                }else{
                    echo "The largest number from three given numbers is :".$number_3;
                }
            }
        if($number_2 > $number_1 ){
            if($number_2 > $number_3){
                echo "The largest number from three given numbers is :".$number_2;
                }else{
                    echo "The largest number from three given numbers is :".$number_3;
                }
            }
    }
    function Task5(){
        echo "Task5<br>";
        for($i=11;$i<=99;$i+=2){
            if($i%2==0){
                echo  $i."<br>";
            }
            else{
                echo  $i."<br>";
            }
        }
    }
    function Task6(){
        $name = array('HTML5','CSS3','JavaScript','Bootstrap4');
        foreach($name as $N){
            echo $N."<br>";
        }
        if(array('CSS3',$N)){
            echo "Find successfully.";
        }else{
            echo "Can't find.";
        }
    }
    inti();
    ?>