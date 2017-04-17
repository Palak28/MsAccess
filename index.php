<?php
//$dbName = "C:\\xampp\htdocs\msaccess\RAS.mdb";

$dbName = "D://RAS.mdb";
//check file exist before we proceed
if (!file_exists($dbName)) {
    die("Access database file not found !");
}
else{
    
    echo "found";
    
    $db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=ras258;");


$sql  = "SELECT * from ras_AttRecord order by ras_AttRecord.ID ASC";

    $c = 0;

$result = $db->query($sql);
while ($row = $result->fetch()) {
    
    echo $c++;
    echo"<br/>";
   
    print_r($row);
    
   echo  $row["Clock"];
    
  echo"<br/>";
    
}
    
    echo "total - ". $c;

}
?>

<?php

/*

if (!file_exists($dbName)) {
    die("Could not find database file.");
}


$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=;");


$sql  = "SELECT * from ras_AttRecord";


$result = $db->query($sql);
while ($row = $result->fetch()) {
    $productName        = $row["ID"];
    $productDescription = $row["DN"];
    $productPrice       = $row["Clock"];
    
    
}

*/

?>