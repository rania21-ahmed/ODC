<?php

//Part 000
// class opertation{
    
//     public $num1;
//     public $num2;


//     public function cal($num1,$num2){
        
//                 echo $num1 + $num2 . "<br>";
//                 echo $num1 * $num2 . "<br>";
//                 if($num1 > $num2){
//                     echo $num1 - $num2 . "<br>";
//                 }else{
//                     echo $num2 - $num1 . "<br>";
//                 }
                
//                 echo $num1 * $num2 . "<br>";
//                 echo $num1 % $num2 . "<br>";

      
//     }
// }

// $ob1= new opertation;

// $ob1->$num1 =4;

// $ob2= new opertation;

// $ob2->$num2 =2;
// $ob1->cal($ob1->$num1,$ob2->$num2);
// // $ob3= new opertation;

// // $ob3->$op ='+';




//Part 01 /inheritance, 02 A M

// class humman{
//     public $color;
//     public $name;
//     protected $lazyy = 'lazy';
//     private $tozz = 'toze';

//     public function move(){
//         echo 'move yaa '. $this->name ;
//     }
// }


// class person extends humman{
    
//     public function lazy()
//     {
//         echo "lazy" . $this->name;
//     }
// }

// class baird extends humman{
//     public function fly()
//     {
//         echo "fly" . $this->name;
//     }
// }

// $b =new baird();
// $b->name ="bolbol";
// $b->move();


//part 03 encapsulation

class humman{
    public $color;
    private $name;
 
    function setname($n){
        $this->name = md5($n);
    }

    function getname(){
        return $this->name;
    }

    public function move(){
        echo 'move yaa '. $this->name ;
    }
}

$p =new humman();

$p->setname('rania');

$p->move();
echo "<br>".$p->getname();