<?php
if($_GET['searchkey']!='')
{
    $skey = $_GET['searchkey'];
    echo "The search key is : ".$skey;
}
else{
    header("Location: index.php");
}
?>