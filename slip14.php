<?php
$q = $_GET["q"];
$conn = pg_connect("host=localhost dbname=test2 user=postgres");
$res = pg_query($conn, "select * from Teacher where id=".$q);
echo "<table border=1>
<tr>
<th>Id</th>
<th>Name</th>
<th>Sub</th>
<th>Research Area</th>
</tr>";

while ($row = pg_fetch_array($res)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['sub'] . "</td>";
    echo "<td>" . $row['rarea'] . "</td>";
    echo "</tr>";
}
echo "</table>";
pg_close($conn);
?>
