

<html>
<body>

<form action="ProjectWeb.php" method="get">
    Parametru: <input type="text" name="parameter" /><br />
    <input type="submit" name="submit" value="Submit me!" />
</form>

</html>
<?php
// START
$conn = oci_connect('STUDENT', 'STUDENT', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

if (isset($_GET['submit'])){
    $id = $_GET['parameter'];
    $stid = oci_parse($conn, "SELECT * FROM STUDENTI where nume = :myid");
    oci_bind_by_name($stid, ':myid', $id);
    oci_execute($stid);

    echo "<table border='1'>\n";
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
        echo "<tr>\n";
        foreach ($row as $item) {
            echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
}

?>

