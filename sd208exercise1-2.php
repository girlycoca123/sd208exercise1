<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table width="100%" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
for($row=1;$row<=8;$row++)
   {
       echo "<tr>";
       for($col=1;$col<=8;$col++)
       {
       $total=$row+$col;
       if($total%2==0)
       {
       echo "<td height=100px width=100px bgcolor=#FFFFFF></td>";
       }
       else
       {
       echo "<td height=90px width=100px bgcolor=#000000></td>";
       }
       }
       echo "</tr>";
 }
       ?>
</table>    
    

    
</body>
</html>