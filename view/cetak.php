<!DOCTYPE html>
<html>
<body>
<table border="1">
<?php
    for($n=0;$n<count($result);$n++){
        echo "<tr><td>".$result[$n]->id."</td>";
        echo "<td>".$result[$n]->nama."</td>";
        echo "<td>".$result[$n]->desc."</td>";
    }
?>
</table>    
</body>
</html>