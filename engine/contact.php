<?php

// print_r($_GET);
// echo "<br>";
// print_r($_POST);


// $name = $_POST['name'] ?? "";
$name = htmlspecialchars($_POST['name'] ?? "");
echo "You've added name: " . $name . "<br>";

// $id = (int) (strip_tags($_POST['id'] ?? ""));
$id = strip_tags($_POST['id'] ?? "");
echo "User's ID: " . $id . "<br>";

$checked = strip_tags($_POST['check'] ?? "");
if ($checked === "on") echo "Checked <br>";

$selectedColor = $_POST['color'] ?? "";
var_dump($selectedColor);
