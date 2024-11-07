<?php
include ('include_fns.php');

// Verificar si las variables POST están definidas, si no, asignarles una cadena vacía o un valor por defecto
$title = isset($_POST['title']) ? $_POST['title'] : '';  
$poster = isset($_POST['poster']) ? $_POST['poster'] : '';  
$message = isset($_POST['message']) ? $_POST['message'] : '';  

// Verificar si las variables GET o POST para parent están definidas, si no, asignarles un valor por defecto de 0
if (isset($_GET['parent'])) {
  $parent = $_GET['parent'];
} else {
  $parent = isset($_POST['parent']) ? $_POST['parent'] : 0;
}

// Inicializar las variables area y error
$area = 1;  // Suponiendo que el área por defecto es 1
$error = false;  // Suponiendo que el estado de error por defecto es false

if (!$error) { 
  if (!$parent) {
    $parent = 0;
    if (!$title) {
      $title = 'Nuevo Post';
    }
  } else {
    // Obtener el título del post
    $title = get_post_title($parent);
  
    // Añadir "Re:"
    if (strstr($title, 'Re: ') == false) {
      $title = 'Re: ' . $title;
    }

    // Asegurarse de que el título quepa en la base de datos
    $title = substr($title, 0, 20);

    // Preponer un patrón de citación al mensaje al que estás respondiendo 
    $message = add_quoting(get_post_message($parent));
  }
}

do_html_header($title);
display_new_post_form($parent, $area, $title, $message, $poster);  

if ($error) {
  echo 'Tu mensaje no fue almacenado. Asegúrate de haber llenado todos los campos e inténtalo de nuevo.';
}

do_html_footer();
?>
