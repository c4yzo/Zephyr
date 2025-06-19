<?php
    $data = [
        'highlightArray' => $_POST['highlightArray'],
        'facilityArray' => $_POST['facilityArray'],
        'nofPolicy' => $_POST['nofPolicy'],
        'typesOfRooms' => $_POST['typesOfRooms']
    ];
    session_start();
    $_SESSION['New-Admin-Data'] = $data;
    echo "Success";
?>