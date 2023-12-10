<?php

// $contact_submit =  $_POST['contact_form'] ?? "";
// $search_submit =  $_POST['search_form'] ?? "";

// if ($contact_submit === "submited") {
//   echo "User data was sent";
// }

// if ($search_submit === "searched") {
//   echo "Search in progress";
// }
$success = false;
$contact_submit =  $_POST['contacts_form'] ?? "";

// $name = strip_tags($_POST['name'] ?? "");

// $phone = strip_tags($_POST['phone'] ?? "");

// $comment = strip_tags($_POST['comment'] ?? "");

// $checked = strip_tags($_POST['checked'] ?? "");

if ($contact_submit === 'submited') {
  $name = trim(strip_tags($_POST['name']));

  $phone = trim(strip_tags($_POST['phone']));

  $comment = trim(strip_tags($_POST['comment']));

  $checked = strip_tags($_POST['checked'] ?? "");




  $body = $name . "\n" . $phone . "\n" . $comment . "\n" . $checked;

  if ($name === '' || $phone = '' || $comment = '' || $checked = '') {

    $errors = "Заповніть всі поля форми";
  } else if (mb_strlen($name) > 20) {
    echo "Name can't consist more then 20 letters";
  } else {
    mail("aleksei.kochuroff@icloud.com", "Contact Form", $body);
    $success = true;
  }
}

?>


<!-- <form action='engine/contact.php' method='POST'>
  <input type="text" name='name'>
  <input type="number" name='id'>
  <input type="checkbox" name="check">
  <select name="color[]" multiple="">
    <option value="red">red</option>
    <option value="blue">blue</option>
    <option value="green">green</option>

  </select>
  <button name="contact_form" value="submited">Send</button>
</form> -->
<!-- 
<form action='' method='POST'>
  <input type="text" name='search'>

  <button name="search_form" value="searched">Search</button>
</form> -->


<h1>Contact Us</h1>
<style>
  form {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  label {
    display: block;
    width: 150px;
    margin-bottom: 16px;
  }

  button {
    width: 150px;
    height: 32px;
  }
</style>
<?php
if ($success) {
  echo "Форма успішно відправлена";
} else {
  if (isset($errors)) echo $errors ?>

  <form action='' method='POST'>
    <label for="name">Name:<input type="text" id='name' name='name' value="<?php if (isset($name)) echo $name; ?>"></label>
    <label for="phone">Phone:<input type="phone" id='phone' name='phone' value="<?php if (isset($phone)) echo $phone; ?>"></label>
    <label for="comment">Comment:<textarea rows="5" cols="" id='comment' name='comment'><?php if (isset($comment)) echo $comment; ?></textarea></label>
    <label for=" check">Agree with Privacy Policies<input type="checkbox" id='check' name="check" <?php if (isset($checked)) echo "checked"; ?>></label>

    <button name="contacts_form" value="submited">Send</button>
  </form> <?php
        } ?>