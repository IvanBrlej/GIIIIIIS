<?php
session_start();
require 'connection.php';

if(isset($_POST['kategoria'])){
    $kategoria = $_POST['kategoria'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vyber typ otazky</title>
</head>
<body>



<div class="container">
    <form id="pridanieOtazkyForm" method="post" action="pridanieOtazky.php" name="pridanieOtazkyForm">
        <input type="hidden" name="kategoria" value="<?php  echo $kategoria; ?>">
        <div class="container">
            <select type="select" class="form-control" name="typOtazky" id="typOtazky" style="max-width: 50%; text-align: center">
                <option value="text">Text</option>
                <option value="checkbox3">Checkbox 3 odpovede</option>
                <option value="checkbox5">Checkbox 5 odpovedi</option>
                <option value="checkbox7">Checkbox 7 odpovedi</option>
                <option value="radius button3">Radius Button 3 odpovede</option>
                <option value="radius button5">Radius Button 5 odpovedi</option>
                <option value="radius button7">Radius Button 7 odpovedi</option>
                <option value="optionlist">Option List</option>
                <option value="lokalita kraj">Lokalita Kraj</option>
                <option value="lokalita okres">Lokalita Okres</option>
                <option value="lokalita uj">Lokalita územmná jednotka</option>
            </select>
        </div>
        <div class="container">
            <div class="col-sm-10">
                <button type="submit" class="button_send" id="vybertTypuOtazky" name="vybertTypuOtazky">Vyber typu</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
