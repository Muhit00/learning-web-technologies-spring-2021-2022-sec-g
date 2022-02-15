<?php
    $uerror = "";
    $Checkbox = "";
    if(isset($_REQUEST["submit"])){
        if($_REQUEST["checkbox"]==null){
            $uerror = "Invalid Input!!!";
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
                <input type="checkbox" id="ssc" name="checkbox"  value="SSC">
                <label for="ssc">SSC</label>
                <input type="checkbox" id="hsc" name="checkbox"  value="HSC">
                <label for="hsc">HSC</label>
                <input type="checkbox" id="bsc" name="checkbox"  value="BSc">
                <label for="bsc">BSc</label>
                <input type="checkbox" id="msc" name="checkbox" value="MSc">
                <label for="msc">MSc</label>
                <?=$uerror?>
                <hr>
                <input type="submit" value="Submit" name="submit">
                
            </form>
        </fieldset>        
    </body>
</html>