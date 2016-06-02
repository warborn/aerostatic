<?php

function is_logged_in() {
  return isset($_SESSION['user_email']);
}

function is_client_logged_in() {
  if(is_logged_in()) {
    return !is_current_user_admin();
  } else {
    return false;
  }
}

function is_admin_logged_in() {
  if(is_logged_in()) {
    return is_current_user_admin();
  } else {
    return false;
  }
}

function current_user() {
  static $user = null;
  if($user_email = $_SESSION['user_email']) {
    if(is_null($user)) {
      $user = User::find_by_email($user_email);
      return $user;
    } else {
      return $user;
    }
  } else {
    return null;
  }
}

function is_current_user_admin() {
  return current_user()->is_admin();
}

function report($relative_path, $name, $variables = array()) {
  $report_path = ROOT.DS.'app'.DS.'reports'.DS.$relative_path;
  $upload_path  = ROOT.DS.'public'.DS.'uploads';

  extract($variables);

  ob_start();
  include($report_path);
  $content = ob_get_clean();

  try
  {
      $file_path = ROOT.DS.'public'.DS.'uploads'.DS.$name;
      $html2pdf = new HTML2PDF('P', 'A4', 'en');
      $html2pdf->setDefaultFont('Arial');
      $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
      $pdf_content = $html2pdf->Output('', true);
      $fp = fopen($file_path, 'wb');
      fwrite($fp, $pdf_content);
      fclose($fp);
      return $file_path;
  }
  catch(HTML2PDF_exception $e) {
      echo $e;
      exit();
  }
}

?>
