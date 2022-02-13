<?php
    $uerror = "";
    $Date = "";
    if(isset($_REQUEST["submit"])){
        if($_REQUEST["date"]==null){
            $uerror = "Invalid Date!!!";
        }else{
            $Date = $_REQUEST["date"];
            echo "$Date";
        }
    }
?>
<html>
    <head></head>
    <body>
        <fieldset>
            <legend>Date of Birth</legend>
            <form method="get" action="task3.php">
                <label for="date">date</label><br>
                <input type="date" name="date" value="<?=$Date?>">
                
                <hr>
                <input type="submit" value="Submit" name="submit">
                <?$uerror?>
            </form>
        </fieldset>        
    </body>
</html>