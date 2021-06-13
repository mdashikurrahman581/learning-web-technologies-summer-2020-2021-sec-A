<?php
$Students = array("Ashik", "Toma", "Nazrul", "Khaleq", "Mercedes","Tesla");
$SearchStudents= readline("Search for any car ::\n");
for($i=0;$i<sizeof($Students);$i++)
{
    if($Students[$i]==$SearchStudent)
    {
        echo"Found in ".$i+1 ." no index";
        echo"\n";
        break;
    }
    else
    {
        echo "not Found in ".$i+1 ." no index";
        echo"\n";
        
    }
}
?>