<?php
require_once('Header.php');
require_once('Navigation.php');
$page = 'Dashboard.php';
if (isset($_GET['page'])) {
  switch ($_GET['page']) {
    case 'dashboard_buku':
      $page = 'Dashboard_buku.php';
      break;
    case 'anggota':
      $page = 'anggota.php';
      break;
    case 'form_anggota':
      $page = 'form_anggota.php';
      break;
    case 'update_anggota':
      $page = 'update_anggota.php';
      break;
    case 'buku':
      $page = 'buku.php';
      break;
    case 'form_buku':
      $page = 'form_buku.php';
      break;
    case 'update_buku':
      $page = 'update_buku.php';
      break;
    case 'peminjaman':
      $page = 'peminjaman.php';
      break;
      case 'form_peminjaman':
        $page = 'form_peminjaman.php';
        break;
        case 'update_peminjaman':
          $page = 'update_peminjaman.php';
          break;      
    default:
      $page = 'Dashboard.php';
      break;
  }
}
require_once $page;
require_once('Footer.php');
