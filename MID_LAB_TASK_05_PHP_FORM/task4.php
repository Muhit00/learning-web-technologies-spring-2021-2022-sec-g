<?php
    $uerror = "";
    $Gender = "";
    if(isset($_REQUEST["submit"])){
        if($_REQUEST["gender"]==null){
            $uerror = "Invalid Gender!!!";
        }else{
            $Gender = $_REQUEST["gender"];
        }
    }
?>
<html>
    <head></head>
    <body>
        <fieldset>
            <legend>Gender</legend>
            <form method="get" action="">
                <input type="radio" name="gender" value="<?=$Male?>">
                <input type="radio" name="gender" value="<?=$Female?>">
                <input type="radio" name="gender" value="<?=$Other?>">
                <?=$uerror?>
                <hr>
                <input type="submit" value="Submit" name="submit">
                
            </form>
        </fieldset>        
    </body>
</html>