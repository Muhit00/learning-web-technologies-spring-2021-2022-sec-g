<?php
    $uerror = "";
    $Checkbox = "";
    if(isset($_REQUEST["submit"])){
        if($_REQUEST["checkbox"]==null){
            $uerror = "Invalid Gender!!!";
        }else{
            $Checkbox = $_REQUEST["checkbox"];
            echo "$Checkbox";
        }
    }
?>
<html>
    <head></head>
    <body>
        <fieldset>
            <legend>Degree</legend>
            <form method="get" action="">
                <input type="checkbox" name="checkbox" value="<?=$Checkbox?>">SSC
                <input type="checkbox" name="checkbox" value="<?=$Checkbox?>">HSC
                <input type="checkbox" name="checkbox" value="<?=$Checkbox?>">BSc
                <input type="checkbox" name="checkbox" value="<?=$Checkbox?>">MSc
                
                <hr>
                <input type="submit" value="Submit" name="submit">
                <?$uerror?>
            </form>
        </fieldset>        
    </body>
</html>