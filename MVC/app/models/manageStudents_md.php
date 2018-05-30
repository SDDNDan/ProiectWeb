<?php

/**
 * Created by PhpStorm.
 * User: Dan
 * Date: 5/29/2018
 * Time: 11:25 PM
 */
class manageStudents_md
{
    protected $conn;

    public function __construct()
    {
        $this->conn = oci_connect('STUDENT', 'STUDENT', 'localhost/XE');
    }

    public function getPrezente($username, $prenume)
    {
        $result = array();
        $stid = oci_parse($this->conn, "SELECT DATA FROM PREZENTE where NUME = :nume and PRENUME = :prenume");
        oci_bind_by_name($stid, ':nume', $username);
        oci_bind_by_name($stid, ':prenume', $prenume);
        oci_execute($stid);
        while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
            foreach ($row as $item) {
                array_push($result, $item);
            }
        }
        oci_free_statement($stid);
        oci_close($this->conn);
        return $result;

    }

    public function getGrades($username, $prenume)
    {
        $result = array();
        $stid = oci_parse($this->conn, "SELECT ID FROM STUDENTI where NUME = :nume and PRENUME = :prenume");
        oci_bind_by_name($stid, ':nume', $username);
        oci_bind_by_name($stid, ':prenume', $prenume);
        oci_execute($stid);
        while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
            foreach ($row as $item) {
                $idul = $item;
            }
        }

        $stid = oci_parse($this->conn, "SELECT VALOARE,DATA_NOTARE FROM NOTE where ID_STUDENT = :idul");
        oci_bind_by_name($stid, ':idul', $idul);
        oci_execute($stid);
        while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
            foreach ($row as $item) {
                array_push($result,$item);
            }
        }
        oci_free_statement($stid);
        oci_close($this->conn);
        return $result;
    }

    public function getInterventions($username, $prenume)
    {
        $result = array();
        $stid = oci_parse($this->conn, "SELECT INTERVENTIE FROM INTERVENTI where NUME = :nume and PRENUME = :prenume");
        oci_bind_by_name($stid, ':nume', $username);
        oci_bind_by_name($stid, ':prenume', $prenume);
        oci_execute($stid);
        while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
            foreach ($row as $item) {
                array_push($result, $item);
            }
        }
        oci_free_statement($stid);
        oci_close($this->conn);
        return $result;
    }

    public function insertGrade($username, $prenume, $nota)
    {
        $stid = oci_parse($this->conn, "SELECT ID FROM STUDENTI where NUME = :nume and PRENUME = :prenume");
        oci_bind_by_name($stid, ':nume', $username);
        oci_bind_by_name($stid, ':prenume', $prenume);
        oci_execute($stid);
        while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
            foreach ($row as $item) {
                $idul = $item;
            }
        }
        $stid = oci_parse($this->conn, "SELECT max(ID) FROM note");
        oci_execute($stid);
        while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
            foreach ($row as $item) {
                $maxidul = $item;
            }
        }

        $stid = oci_parse($this->conn, "SELECT sysdate from dual");
        oci_execute($stid);
        while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
            foreach ($row as $item) {
                $datanotare = $item;
            }
        }
        $intID = (int)$idul;
        $intNotaId = (int)$maxidul +1;
        $nota = (int)$nota;
        var_dump($intID);
        var_dump($intNotaId);
        var_dump(5);
        var_dump($nota);
        var_dump($datanotare);
        $created_at = $datanotare;
        $updated_at = $datanotare;
        $stid = oci_parse($this->conn, "INSERT INTO NOTE VALUES(:intNotaId,:intID,5,:nota,:datanotare,:created_at,:updated_at)");
        oci_bind_by_name($stid, ':intID', $intID);
        oci_bind_by_name($stid, ':intNotaId', $intNotaId);
        oci_bind_by_name($stid, ':nota', $nota);
        oci_bind_by_name($stid, ':datanotare', $datanotare);
        oci_bind_by_name($stid, ':created_at', $created_at);
        oci_bind_by_name($stid, ':updated_at', $updated_at);
        oci_execute($stid);
        oci_free_statement($stid);
        oci_close($this->conn);

    }

    public function insertInterventie($nume,$prenume,$interventie)
    {
        $stid = oci_parse($this->conn, "INSERT INTO INTERVENTI VALUES(:nume,:prenume,:interventie)");
        oci_bind_by_name($stid, ':nume', $nume);
        oci_bind_by_name($stid, ':prenume', $prenume);
        oci_bind_by_name($stid, ':interventie', $interventie);
        oci_execute($stid);
        oci_free_statement($stid);
        oci_close($this->conn);
    }

    public function insertPresence($nume,$prenume,$dataPresence)
    {
        $stid = oci_parse($this->conn, "INSERT INTO PREZENTE VALUES(:nume,:prenume,:dataPresence)");
        oci_bind_by_name($stid, ':nume', $nume);
        oci_bind_by_name($stid, ':prenume', $prenume);
        oci_bind_by_name($stid, ':dataPresence', $dataPresence);
        oci_execute($stid);
        oci_free_statement($stid);
        oci_close($this->conn);
    }

}

?>