<?php
//mysql_connect('localhost','root',' ');
mysql_select_db('ETS');

$sql = "Select type from parts";
$result = mysql_query($sql);

echo "<select type = 'type1'>";
while ($row = mysql_fetch_array ($result)){
echo "option value ='". $row['type']."'</option>";
}
echo "</select>";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
