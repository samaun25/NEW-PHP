<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    
<div class="container">
    <h2>Calculator</h2>
    <form method="post"action=>
        <input type="number" name="num1" placeholder="Enter First Number" required><br>
        <input type="number" name="num2" placeholder="Enter Second Number" required><br>
       <select name="operator" id="">
        <option value="add">addition + </option>
        <option value="sub">subtraction - </option>
        <option value="mul">multiplication * </option>
        <option value="div">division / </option>
        <option value="bin">Binary </option>
        <option value="oct">Octal </option>
        <option value="hex">Hexadecimal</option>
     </select><br>
     <button type="submit">calculate</button>
    </form>
    <div id="result">



<?php
                        //php start//

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];
        
        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                echo "Result: " . $result;
                break;
            case "sub":
                $result = $num1 - $num2;
                echo "Result: " . $result;
                break;
            case "mul":
                $result = $num1 * $num2;
                echo "Result: " . $result;
                break;
            case "div":
                if ($num2 != 0) {
                 $result = $num1 / $num2;
                    echo "Result: " . $result;
                }
                else {
                    echo "Can't divide by zero";
                }
                break;
            case "bin":
                echo "Binary:",decbin($num1);
                break;
            case "oct":
                echo "Octal:",decoct($num1);
                break;
            case "hex":
                echo "Hexadecimal:",dechex($num1);
                break;
            }
        }
         ?>   



    </div>
</div>







    
</body>
</html>