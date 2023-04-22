<?php
    $question1 = $_POST ['question1'];
    $question2 = $_POST ['question2'];
    $question3 = $_POST ['question3'];
    $question4 = $_POST ['question4'];
    $question5 = $_POST ['question5'];
    $question6 = $_POST ['question6'];
    $question7 = $_POST ['question7'];
    $question8 = $_POST ['question8'];
    $question9 = $_POST ['question9'];
    $question10 = $_POST ['question10'];
    $question11 = $_POST ['question11'];
    $question12 = $_POST ['question12'];

    $conn = new mysqli('localhost', 'root', 'Hajna@2004' , 'career');
    if($conn ->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into new(question1, question2, question3, question4, question5, question6, question7, question8, question9, question10, question11, question12) values(? ,? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssss" ,$question1, $question2, $question3, $question4, $question5, $question6, $question7, $question8, $question9, $question10, $question11, $question12);
        $stmt->execute();
        echo "form submitted...";
        $stmt->close();
        $conn->close();

    }

?>
