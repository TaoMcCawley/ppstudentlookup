<?php
/**
 * Created by PhpStorm.
 * User: adriansmith
 * Date: 3/1/18
 * Time: 11:12 AM
 */

$sid = $_POST['studentid'];

$dbh = new PDO("mysql:dbname=asmithgr_grc", "asmithgr_asmith", "Oceans5796!");

$sql = "SELECT * FROM student WHERE sid = :sid";

$stmt = $dbh->prepare($sql);

$stmt->bindParam(":sid", $sid);

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row){
    echo "SID: ".$row['sid']."<br>";
    echo "Name: ".$row['first']." ".$row['last']."<br>";
    echo "Birthdate: ".$row['birthdate']."<br>";
    echo "GPA: ".$row['gpa']."<br>";
}