<?php
$fp=fopen('contact.dat','r');
echo"<table border=1>";
echo"
<tr>
<th>sr.no</th>
<th>name</th>
<th>residence no</th>
<th>mob. no.</th>
</tr>
";
while($row = fscanf($fp,"%s %s %s %s %s"))
{
    echo "<tr>";
    foreach($row as $r)
        echo "<td>$r</td>";
    echo"</tr>";
}
echo"</table>";
fclose($fp);
?>