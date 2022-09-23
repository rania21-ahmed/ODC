<style>
    body{
        background:#ccc;
        border:0px;
        padding:0px
    }
    form{
        padding-top:20%;
    }
    .container{
        width:50%;
        margin:auto;
        text-align:center
    }
    input{
        padding:10px
    }
</style>

<form  action="" method="post" class="container">

    <input type="text"  name="num1">
    <input type="text" name="num2">
    <input type="text" name="ope">
    
    <input type="submit" value="send">
</form>

<?php


switch ($_POST['ope']) {
    case "+":
        echo "<p class='container'> num1 + num2 = ". ($_POST['num1'] + $_POST['num2'])."</p>";
        break;

    case "-":
        if($_POST['num1'] > $_POST['num2']){
            echo "<p class='container'> num1 - num2 = ". ($_POST['num1'] - $_POST['num2'])."</p>";
        }else{
            echo "<p class='container'> num2 - num1 = ". ($_POST['num2'] - $_POST['num1'])."</p>";
        }
        break;

    case "*" :
        echo "<p class='container'> num1 * num2 = ". ($_POST['num1'] * $_POST['num2'])."</p>";
        break;

    case "/":
        echo "<p class='container'> num1 / num2 = ". ($_POST['num1'] / $_POST['num2']) ."</p>";
        break;

    default:
        echo "<p class='container'> NO "."</p>";
        break;
}
