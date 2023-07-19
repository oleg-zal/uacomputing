<?php /* Template Name: addProject */ ?>
<?php get_header(); ?>
<div style="width:100%; display:block; height:100%; background:#ebebeb">
<h2 style="margin:0 auto; display:block; padding-top:220px; text-align:center">Добавляем проект...

</h2>
</div>
<div class="mainWrapper inner">

<?php
if($_FILES['uploadfile']['name']){
$newFolder = time();
$uploaddir = './logos/'.$newFolder.'/';
mkdir($uploaddir);

$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
echo "<h3>Файл успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

// Выводим информацию о загруженном файле:
/*
echo "<h3>Информация о загруженном на сервер файле: </h3>";
echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']."</b></p>";
echo "<p><b>Mime-тип загруженного файла: ".$_FILES['uploadfile']['type']."</b></p>";
echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']."</b></p>";
echo "<p><b>Временное имя файла: ".$_FILES['uploadfile']['tmp_name']."</b></p>";
*/
	
}
// Каталог, в который мы будем принимать файл:

$title = $_POST['title'] ; 
$url = $_POST['url'] ; 
if($_FILES['uploadfile']['name']){
	$logo = get_bloginfo('url').'/logos/'.$newFolder.'/'.$_FILES['uploadfile']['name']; 
}
$typeCat = $_POST['cat'];
$description = $_POST['description'] ;
$money = $_POST['money'] ; 
$moneyNeeds = $_POST['moneyNeeds'];
$question = $_POST['question'];

$my_post = array(
     'post_title' => $title,
     'post_content' => $description,
     'post_status' => 'pending',
     'post_author' => 1,
     'post_category' => array(3,$typeCat)
	 
  );

/*$overrides = array( 'test_form' => false);
$file = wp_handle_upload($_FILES['logo'], $overrides);*/


// Insert the post into the database
  $post_id = wp_insert_post( $my_post, $wp_error);
  
  add_post_meta($post_id, 'full_title', $title);
  add_post_meta($post_id, 'url', $url);
  add_post_meta($post_id, 'money', $money); 
  add_post_meta($post_id, 'type', $type);   
  add_post_meta($post_id, 'moneyNeeds', $moneyNeeds); 
  add_post_meta($post_id, 'question', $question);
  add_post_meta($post_id, 'logo', $logo);
  
  $alert_good = 1;
?>

</div>

<SCRIPT>
window.location='<?php bloginfo('url') ?>/Лаборатория?alert_good=<?php echo $alert_good ?>&alert_bad=<?php echo $alert_bad ?>';
</SCRIPT>
