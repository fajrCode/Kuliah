<?php
require_once('Header.php');
require_once('Navigation.php');
$page = 'Home.php';
if(isset($_GET['page'])){
  switch ($_GET['page']){
    case 'mahasiswa':
      $page = 'mahasiswa.php';
      break;
    case 'tambah_mhs':
      $page = 'form.php';
      break;      
    case 'prodi':
      $page = 'prodi.php';
      break;
    default:
      $page = 'Home.php';
      break;
  }
}
require_once $page;
require_once('Footer.php');

?>