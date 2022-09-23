<?php

if(empty($_POST['students'])  ){
    header("location: form.html");
    echo "Student empty ........";
}

if(empty($_POST['course'])  ){
    echo "course empty ........";

    header("location: form.html");
    echo "course empty ........";

}

$list_of_students =  explode(",",$_POST['students']);
$course =$_POST['course'];
$content = file_get_contents("certificate.html");


foreach($list_of_students as $key => $student){
    $location = $student.".html";
    fopen($location,"w");

    $new_content =  str_replace(["name","course"],[$student,$course],$content);
    // $new_contentC =  str_replace("course",$course,$new_content);

    file_put_contents($location,$new_content);
}