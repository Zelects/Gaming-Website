<?php
session_start();

if (isset($_POST['item_key'])) {
    $itemKey = $_POST['item_key'];

    if (array_key_exists($itemKey, $_SESSION['wishlist'])) {
        unset($_SESSION['wishlist'][$itemKey]);
    }
}

header("Location: index.php"); 
exit();
?>