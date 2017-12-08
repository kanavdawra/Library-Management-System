<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div> <?php
include "connection.php";
$sql = "SELECT * FROM books";
$result = $con->query($sql);

if ($result->num_rows > 0) {
     echo "<table><thead><tr><th>ID</th><th>NAME</th><th>AUTHOR</th><th>PUBLISHER</th><th>EDITION</th><th>ACCESSION</th><th>AVAILABILITY</th></tr></thead>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
        // echo "<tr><td><strong>" . $row["NAME"]. "</strong></td><td>" . $row["AUTHOR"]. "</td><td>" . $row["PUBLISHER"]. "</td></tr>";
         echo "<tr><td><strong>" . $row["ID"]. "</strong></td><td>" . $row["NAME"]. "</td><td>" . $row["AUTHOR"]. "</td><td>" . $row["PUBLISHER"]. "</td><td>" . $row["EDITION"]. "</td><td>" . $row["ACCESSION"]. "</td><td>" . $row["AVAILABILITY"]. "</td></tr>";

	}
     echo "</table>";
} else {
     echo "0 results";
}?>
</body>
</html>
