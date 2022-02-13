<?php
    $uerror = "";
    $Gender = "";
    if(isset($_REQUEST["submit"])){
        if($_REQUEST["radio"]==null){
            $uerror = "Invalid Gender!!!";
        }else{
            $Gender = $_REQUEST["radio"];
            echo "$Gender";
        }
    }
?>
<html>
    <head></head>
    <body>
        <fieldset>
            <legend>Gender</legend>
            <form method="get" action="">
                <label for="radio">date</label><br>
                <input type="radio" name="radio" value="<?=$Gender?>">Male
                <input type="radio" name="radio" value="<?=$Gender?>">Female
                <input type="radio" name="radio" value="<?=$Gender?>">Other
                
                <hr>
                <input type="submit" value="Submit" name="submit">
                <?$uerror?>
            </form>
        </fieldset>        
    </body>
</html>