<?php
    $uerror = "";
    $username = "";
    if(isset($_REQUEST["submit"])){
        if($_REQUEST["date"]==null){
            $uerror = "Invalid Date!!!";
        }else{
            $Date = $_REQUEST["date"];
        }
    }
?>
<html>
    <head></head>
    <body>
        <fieldset>
            <legend>Name</legend>
            <form method="get" action="">
                <label for="date">date</label><br>
                <input type="date" name="date" value="<?=$Date?>">
                
                <hr>
                <input type="submit" value="Submit" name="submit">
                <?uerror?>
            </form>
        </fieldset>        
    </body>
</html>