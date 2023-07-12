<! DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <title> php calculator </title>
        <link rel="stylesheet" href="calc.css">
</head>

<body>

<form>
    <input type = "text" name =" num1" placeholder ="num1">
    <input type = "text" name =" num2" placeholder ="num2">
    <select name ="operator">
       <option>none</option> 
       <option>add</option>
       <option>subtract</option>
       <option>multiply</option>
       <option>divide</option>
    </select>
    <br>
    <button class ="button" type ="submit" name ="submit" value ="submit"> calculate </button>
</form>
<p> the answer is :<?php
if(isset($_GET['submit'])){
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];

    switch($operator){
        case "none":
            echo" please select the operator";
            break;

            case "add":
                echo $result1 + $result2 ;
                break;

                case "subtract":
                    echo $result1 - $result2;
                    break;

                    case "multiply":
                        echo $result1 * $result2;
                        break;

                        case "divide":
                            echo $result1 / $result2;
                            break;
    }
}
?>
  </p>

</body>
</html>