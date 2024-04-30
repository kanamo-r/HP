<?php
require_once('common.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $work = $_POST['work'];

    $error = '';
    if (check_input($id, $name, $age, $work, $error)) {
        $db->updatesyain($id, $name, $age, $work);
        header('Location: index.php');
        exit();
    }
} else {
    $id = $_GET['id'];
    $post = $db->getsyain($id);
}

html_header('社員情報更新');
if (isset($error)) {
    echo '<div class="error">' . $error . '</div>';
}
html_form($post, 'syain_update.php', '更新');
html_footer();

?>