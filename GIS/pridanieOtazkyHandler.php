<?php
session_start();
require 'connection.php';

if(isset($_POST['pridanieOtazkyButton'])){
    $typOtazky = $_POST['typOtazky'];
    $kategoria = $_POST['kategoria'];
    $questionTitle = $_POST['questionTitle'];
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
    $question5 = $_POST['question5'];
    $question6 = $_POST['question6'];
    $question7 = $_POST['question7'];

    if($typOtazky == "text" || $typOtazky == "optionlist"){
        $query = $con->prepare("INSERT INTO otazky VALUES('',?,?,?)");
        $query->bind_param("sss", $typOtazky,$question1,$kategoria);
        $query->execute();

        header("Location: /GIS/uvodnaStranka.php");
    }else if($typOtazky == "checkbox3" || $typOtazky == "radius button3"){

        $array = [
            "questionTitle" => $questionTitle,
            "question1" => $question1,
            "question2" => $question2,
            "question3" => $question3
        ];

        $insert_data = implode(",", $array);
        $query = $con->prepare("INSERT INTO otazky VALUES('',?,?,?)");
        $query->bind_param("sss", $typOtazky,$insert_data,$kategoria);
        $query->execute();

        header("Location: /GIS/uvodnaStranka.php");
    }else if($typOtazky == "checkbox5" || $typOtazky == "radius button5"){

        $array = [
            "questionTitle" => $questionTitle,
            "question1" => $question1,
            "question2" => $question2,
            "question3" => $question3,
            "question4" => $question5,
            "question4" => $question5
        ];

        $insert_data = implode(",", $array);
        $query = $con->prepare("INSERT INTO otazky VALUES('',?,?,?)");
        $query->bind_param("sss", $typOtazky,$insert_data,$kategoria);
        $query->execute();

        header("Location: /GIS/uvodnaStranka.php");
    }else if($typOtazky == "checkbox7" || $typOtazky == "radius button7"){

        $array = [
            "questionTitle" => $questionTitle,
            "question1" => $question1,
            "question2" => $question2,
            "question3" => $question3,
            "question4" => $question4,
            "question5" => $question5,
            "question6" => $question6,
            "question7" => $question7
        ];

        $insert_data = implode(",", $array);
        $query = $con->prepare("INSERT INTO otazky VALUES('',?,?,?)");
        $query->bind_param("sss", $typOtazky,$insert_data,$kategoria);
        $query->execute();

        header("Location: /GIS/uvodnaStranka.php");
    }
}
?>