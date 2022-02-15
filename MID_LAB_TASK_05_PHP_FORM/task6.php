<?php
    $uerror = "";
    $bld = "";
    if(isset($_REQUEST["submit"])){
        if($_REQUEST["bld"]==null){
            $uerror = "Invalid Input!!!";
        }else{
            $Checkbox = $_REQUEST["bld"];
            echo "$Checkbox";
        }
    }
?>
<html>
    <head></head>
    <body>
        <fieldset>
            <legend>Blood Group</legend>
            <select name="bld" id="">
                <option value="">Please Select a option</option>
                <option value="1">A+</option>
                <option value="2">B+</option>
                <option value="2">AB+</option>
                <option value="1">O+</option>
                <option value="2">A-</option>
                <option value="2">B-</option>
                <option value="1">AB-</option>
                <option value="2">O-</option>
            </select>

                <?=$uerror?>
                <hr>
                <input type="submit" value="Submit" name="submit">
        </fieldset>        
    </body>
</html>