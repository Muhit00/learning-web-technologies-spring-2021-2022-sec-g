<?php
    $uerror = "";
    $username = "";
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
            <legend>Name</legend>
            <form method="get" action="">
                <label for="radio">date</label><br>
                <input type="radio" name="radio" value="<?=$Gender?>">Male
                <input type="radio" name="radio" value="<?=$Gender?>">Female
                <input type="radio" name="radio" value="<?=$Gender?>">Other
                
                <hr>
                <input type="submit" value="Submit" name="submit">
                <?uerror?>
            </form>
        </fieldset>        
    </body>
</html>