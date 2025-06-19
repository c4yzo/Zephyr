<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    $search = $_POST['search'];
    include './connection.php';
    $results = [];
    $db_data = mysqli_query($con,"SELECT DISTINCT State FROM Resorts WHERE State LIKE '%$search%';");
    while($tabledata=mysqli_fetch_row($db_data)) {
        $results[] = "$tabledata[0]"; 
    }
    $db_data = mysqli_query($con,"SELECT DISTINCT District,State FROM Resorts WHERE District LIKE '%$search%';");
    while($tabledata=mysqli_fetch_row($db_data)) {
        $results[] = "$tabledata[0],$tabledata[1]"; 
    }
    $db_data = mysqli_query($con,"SELECT DISTINCT Town,District,State FROM Resorts WHERE Town LIKE '%$search%';");
    while($tabledata=mysqli_fetch_row($db_data)) {
        $results[] = "$tabledata[0],$tabledata[1],$tabledata[2]"; 
    }
    $json = json_encode($results);
    echo $json;
?>