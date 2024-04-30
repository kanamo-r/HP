<?php
require_once('common.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $db->deletesyain($id);
  header('Location: index.php');
  exit();
} else {
  $id = $_GET['id'];
  $post = $db->getsyain($id);
}

html_header('社員情報削除');
html_form($post, 'syain_delete.php', '削除');
html_footer();
?>