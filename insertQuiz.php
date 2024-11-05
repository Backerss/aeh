<?php
    session_start();
    include('include/include_db_oo.php');
    $quizName = $_POST['result'];
    $users_id = $_SESSION['users_id'];

    $sql = "INSERT INTO quiz (users_id_num, q_one, q_two, q_three, q_four, q_five, q_six, q_seven, q_eight, q_nine, q_ten, q_eleven, q_twelve, q_thirteen, q_fourteen) VALUES ('$users_id', '$quizName[0]', '$quizName[1]', '$quizName[2]', '$quizName[3]', '$quizName[4]', '$quizName[5]', '$quizName[6]', '$quizName[7]', '$quizName[8]', '$quizName[9]', '$quizName[10]', '$quizName[11]', '$quizName[12]', '$quizName[13]')";
    $result = $conn->query($sql);

    if ($result) {
        echo "บันทึกข้อมูลเรียบร้อย";
    } else {
        echo "ไม่สามารถบันทึกข้อมูลได้";
    }

?>