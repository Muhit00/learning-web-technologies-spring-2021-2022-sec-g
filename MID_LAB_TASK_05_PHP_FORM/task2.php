<?php
    $uerror = "";
    $Gmail = "";
    if(isset($_REQUEST["submit"])){
        if($_REQUEST["gmail"]==null){
            $uerror = "Invalid Gmail!!!";
        }else{
            $Gmail = $_REQUEST["gmail"];
        }
    }
?>
<html>
    <head></head>
    <body>
        <fieldset>
            <legend>Gmail</legend>
            <form method="get" action="">
                <label for="gmail">Gmail</label><br>
                <input type="email" name="gmail" value="<?=$Gmail?>"><br>
                <?=$uerror?>
                <hr>
                <input type="submit" value="Submit" name="submit">
                
            </form>
        </fieldset>        
    </body>
</html>