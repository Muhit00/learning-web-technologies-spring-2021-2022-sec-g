<?php
    $uerror = "";
    $username = "";
    if(isset($_REQUEST['submit'])){
        if($_REQUEST['username']==null){
            $uerror = 'Invalid Username!!!';
        }else{
            $username = $_REQUEST['username'];
            echo "$username";
        }
    }
?>
<html>
    <head></head>
    <body>
        <fieldset>
            <legend>Name</legend>
            <form method="get" action="">
                <label for="username">Username</label><br>
                <input type="text" name="username" value="<?=$username?>">
                
                <hr>
                <input type="submit" value="Submit" name="submit">
                <?$uerror?>
            </form>
        </fieldset>        
    </body>
</html>