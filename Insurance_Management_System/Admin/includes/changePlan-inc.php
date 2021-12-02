<?php

if (isset($_POST['submit'])) {
    require '../../database.php';

    $Plan_no = $_POST['Plan_no'];
    $Name = $_POST['Name'];
    $Name = str_replace(' ', '', $Name);
    $MMA = $_POST['MMA'];
    $min_SA = $_POST['min_SA'];
    $max_SA = $_POST['max_SA'];
    $min_age = $_POST['min_age'];
    $max_age = $_POST['max_age'];
    $Mode_Yearly = $_POST['Mode_Yearly'];
    $Mode_Halfly = $_POST['Mode_Halfly'];
    $Mode_Quartely = $_POST['Mode_Quartely'];
    $Mode_Monthly = $_POST['Mode_Monthly'];
    $Mode_Single = $_POST['Mode_Single'];
    $Type_term = $_POST['Type_term'];
    $T1 = $_POST['T1'];
    $T2 = $_POST['T2'];
    $T3 = $_POST['T3'];
    $T4 = $_POST['T4'];
    $P1 = $_POST['P1'];
    $P2 = $_POST['P2'];
    $P3 = $_POST['P3'];
    $P4 = $_POST['P4'];



    if ($min_SA>$max_SA) {
        $min_SA=0;
    }

    if ($min_age>$max_age) {
        $min_age=0;
    }

    if (empty($Plan_no) || empty($Name)) {
        header("Location: ../View/ViewPlan.php?error=emptyfields");
        exit();
    } elseif ($Plan_no<=0) {
        header("Location: ../View/ViewPlan.php?error=invalidCode");
        exit();
    } else {
        $sql = "SELECT Plan_no FROM Plan WHERE Plan_no = ?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../View/ViewPlan.php?error=sqlerror1");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "i", $Plan_no);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $sql = "UPDATE plan SET Name = ?, MMA = ?, min_SA = ?, max_SA = ?, min_age = ?, max_age = ?, Mode_Yearly = ?, Mode_Halfly = ?, Mode_Quartely = ?, Mode_Monthly = ?, Mode_Single = ?, Type_term = ?, T1 = ?, T2 = ?, T3 = ?, T4 = ?, P1 = ?, P2 = ?, P3 = ?, P4 = ? WHERE Plan_no = ?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../View/ViewPlan.php?error=sqlerror2");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "siiiiiiiiiiiiiiiiiiii", $Name, $MMA, $min_SA, $max_SA, $min_age, $max_age, $Mode_Yearly, $Mode_Halfly, $Mode_Quartely, $Mode_Monthly, $Mode_Single, $Type_term, $T1, $T2, $T3, $T4, $P1, $P2, $P3, $P4, $Plan_no);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                header("Location: ../View/ViewPlan.php?success=planUpdated");
                exit();
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}
