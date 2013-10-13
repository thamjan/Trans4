<?php

echo '<script>alert("' . @$_SESSION['username'] . '");</script>';

$offerType = @$_POST['slOfferType'];
if (@$offerType != null) {

    require("common.php");

    if ($offerType == 'cargo')
        $update = " 
            INSERT INTO offers_cargo
            VALUES(
            666,
            :starting_adress,
            :destination_adress,
            :length,
            :width,
            :height,
            :weight,
            :material_type,
            :budget,
            :remarks,
            :creation_date,
            'active',
            :user
            )";

    $update_params = array(
        ':starting_adress' => $_POST['txtStartAdress'],
        ':destination_adress' => $_POST['txtDestinationAdress'],
        ':length' => $_POST['txtCargoLength'],
        ':width' => $_POST['txtCargoWidth'],
        ':height' => $_POST['txtCargoHeight'],
        ':weight' => $_POST['txtCargoWeight'],
        ':material_type' => $_POST['slCartgoType'],
        ':budget' => $_POST['txtBudget'],
        ':remarks' => $_POST['taCargoRemarks'],
        ':creation_date' => date('Y-m-d H:i:s',$_SERVER['REQUEST_TIME']),
//            ':status' => $_POST['username'],
        ':user' => @$_SESSION['username']
    );

    try {
        $stmt = $db->prepare($update);
        $result = $stmt->execute($update_params);
    } catch (PDOException $ex) {
        die("Failed to run update: " . $ex->getMessage());
    }

    header("Location: ../offerList.php");
    die("Redirecting to: dashboard.php");
}
?>
