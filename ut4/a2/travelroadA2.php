<?php

include "/home/dpl_javier/config.php";

$db_handle = pg_connect("host=$host dbname=$dbName user=$user password=$passwd");

$query1 = "SELECT * FROM places where visited = false";
$query2 = "SELECT * FROM places where visited = true";

$wished = pg_exec($db_handle, $query1);
$visited = pg_exec($db_handle, $query2);

echo "<h1>My Travel Bucket List</h1>";

if ($wished && $visited) {
	echo "<h2>Places I'd Like to Visit</h2>";

	echo "<ul>";
	for ($i = 0; $i < pg_numrows($wished); $i++) {
		$name = pg_result($wished, $i, 'name');
		echo "<li>" . $name . "</li>";
	}
	echo "</ul>";

	echo "<h2>Places I've Already Been To</h2>";

        echo "<ul>";
        for ($i = 0; $i < pg_numrows($visited); $i++) {
                $name = pg_result($visited, $i, 'name');
                echo "<li>" . $name . "</li>";
        }
        echo "</ul>";
} else {
	echo "The query failed with the following error:<br>";

	echo pg_errormessage($db_handle);
}

pg_close($db_handle);

?>
