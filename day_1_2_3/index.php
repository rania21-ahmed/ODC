<?php 

// $R = 66;


// if($R >= 90){
//     echo " A+ ";
// }elseif($R < 90 && $R >85){
//     echo " A ";
// }elseif($R < 85 && $R >75){
//     echo " B+ || B ";
// }elseif($R < 75 && $R >60){
//     echo "C+ || C";
// }elseif($R < 60 && $R >50){
//     echo " D ";
// }else{
//     echo " F ";
// }


// //Task 2

// $l =20;
// $oil = 95;

// switch($oil){
//     case 95:
//         echo $l*5;
//         break;
//     case 90:
//         echo $l*3;
//         break;
//     case 85:
//         echo $l*2;
//         break;
//     default:
//       echo "Not Found";

// }



//Task 3

// $person =["Rania Ahmed",22,"Cairo"];

// $i=0;
// while($i < 3){

//     echo $person[$i]. "<br>";
//     $i++;
// }


//task 4

// $number =[1,2,30,21];
// $max=0;
// for($i=0;$i<count($number);$i++){
    
//     if($max<$number[$i]){
//         $max=$number[$i];
//     }
// }

// echo $max;

//task 5

// $number = [1 ,23,45,10,3,33,56];
// $target =0;

// for($i=0;$i<count($number);$i++){
//     if ($target == $number[$i]){
//         echo "Done";
//         break;
//     }
// }


//Assament

// $number = [2,55,7,22,88,7];
// $target = 9;

// $number = [3,2,4];
// $target = 6;

// $number = [3,3];
// $target = 6;


// for ($i=0; $i <count($number)-1 ; $i++) { 
//     for ($j=$i+1 ; $j <count($number); $j++) { 
//         if($number[$i]+$number[$j] == $target){
//             echo " [ ".$i." , ". $j ." ]"; 
//             break;
//         }
//     }
// }





//Day 2

//Task01

// $person =[
//     "name"=>"Rania",
//     "LastName"=>"Ahmed",
//     "age"=>22
// ];
// $key = array_keys($person);
// for ($i=0; $i <count($person) ; $i++) { 
//     echo $person[$key[$i]] . "<br>";
// }

// $value = array_value($person);
// for ($i=0; $i <count($person) ; $i++) { 
//     echo $person[$value[$i]] . "<br>";
// }


//task 2
// $persons =[
//     [
//         "name"=>"mohamed",
//         "age"=>20
//     ],
//     [
//         "name"=>"eslam",
//         "age"=>30
//     ],
//     [
//         "name"=> "radwa",
//         "age"=>10
//     ]
// ];


// $keys = array_keys($persons);
// for($i = 0; $i < count($persons); $i++) {
    
//     foreach($persons[$keys[$i]] as $key => $value) {
//         echo $key . " : " . $value . "<br>";
//     }
//     echo "<br>-----------------------------<br>";
// }
//OR

// foreach($persons as $person){
//     foreach($person as $key => $value){
//         echo $key ." : " .$value . "<br>";
//     }
//     echo  "<hr>";
// }


//task 3

// $account =[
//     [123,23,4],
//     [1,6,2],
//     [654,23,8]
// ];

// $sum=0;
//  $arSum =[];
// foreach($account as $acc){
//     // echo $acc;
//     foreach($acc as $k){
//         $sum=$sum+$k;
//     }
//    // echo $sum . "<br>";
//     $arSum[]=$sum;
// }
// //print_r($arSum);
// $max=0;
// for ($i=0; $i <count($arSum) ; $i++) { 
//     if($max<$arSum[$i]){
//         $max=$arSum[$i];
//     }
// }

// echo "Max = " . $max;

//OR
// $max =0;
// foreach($account as $acc){
//     $sum=0;
//     foreach($acc as $k){
//         $sum +=$k;

//         if($max <$sum){
//             $max =$sum;
//         }

//     }
   
// }

// echo $max;

//task 4

// $n=15;

// for ($i=1; $i <=$n ; $i++) { 
//     if( $i%3 == 0 && $i%5 == 0){
//         echo "FizzBuzz <br>";
//     }elseif($i%3 == 0){
//         echo "FIZZ <br>";
//     }elseif($i%5 == 0){
//         echo"BUZZ <br>";
//     }else{
//         echo $i ."<br>";
//     }
// }


//task 5

// echo $_POST[x]+$_POST[y];
// $p =$_POST;
// // print_r($p);
// $s=0;
// foreach($p as $value){
//     $s+=$value;
// }
// echo $s;
//OR

// print_r($_POST['x']+$_POST['y']);

//task 6

// for ($i=1 ; $i <= 100 ; $i++) { 
//     if( $i == $_POST['x']){
//         echo $_POST['y'] . "<br>";
//         //echo $i . "<br>";
//     }else{
//         echo $i . "<br>";
//     }
// }



///function


// function Hello($x,$y){
//     echo $x+$y;
// }

// 10 + Hello($x,$y);

//task 7
// function IPa($ip){
//    echo str_replace(".", "[.]", $ip);
// }

// IPa("255.100.23.3");

//OR

// function IPa($ip){
//     $count = strlen($ip);
//     for ($i=0; $i <$count ; $i++) { 
//         if($ip[$i] == "."){
//             $ip[$i]="/";
//         }
//     }
//     return $ip;
// }
 
// echo IPa("255.100.23.3");

//task 8

// $s =["m","o","h","m","e","d"];
// echo "[";
// while ($a = array_pop($s)) {
//     echo "\"". $a."\""." , ";
// }
// echo "]";


// function Rplace($s){
//     echo "[";
//     while ($a = array_pop($s)) {
//         echo "\"". $a."\""." , ";
//     }
//     echo "]";
// }
// $s =["m","o","h","m","e","d"];
// Rplace($s);


////////////////
// function increment($number){
//     return ++$number;
// }

// $x =10;
// echo increment($x);


//// $num = 123; //output 6
// $c=0;
// while ($num > 0) {
//     if($num % 2 ==0 ){
//         $num /=2;   
        
//     }else{
        
//         $num--;  
//     }
// echo $c;



//day 3

//task 2
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
// $extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);

// $imgname = $_FILES['img']['name'];
// $imgname =$_REQUEST['name'];
// $tem = $_FILES['img']['tmp_name'];

// move_uploaded_file($tem,$imgname.".".$extension);

//task 1-3


// $imgname = $_FILES['img']['name'];
// $tem = $_FILES['img']['tmp_name'];

// // move_uploaded_file($tem,$imgname);


// $file_count = count($imgname);
// for ($i = 0; $i < $file_count; $i++) {
  
//     move_uploaded_file($tem[$i], $imgname[$i]);
//     echo "Done";
// }




