<?php
    $existingNames = array("fundpercent","medpercent","surgepercent","anapercent","pharpercent","pubpercent","general_comment","osce","micropercent","sociolpercent","psycopercent","nutripercent","propercent","","","","","","","","","","","","","","","","","",
  "","","","","","","","","","");
  $number=count($existingNames);

    if(isset($_POST['suggestion'])){
        $name=strtolower($_POST['suggestion']);
        foreach ($existingNames as $existingName){
            if(strpos($existingName, $name) !== false){
                echo "<a href='#' id='result'>$existingName</a>";
                echo "<hr>";
            }
        }
    }
?>
