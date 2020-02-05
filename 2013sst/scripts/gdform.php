<?php
  require_once('captchalibrary.php');  
	$privatekey = "6LfQJ8wSAAAAANldxZkfwUI_sffJ99Fp-3pxUzgV";  
	$resp = recaptcha_check_answer ($privatekey,                                
	$_SERVER["REMOTE_ADDR"],                                
	$_POST["recaptcha_challenge_field"],                                
	$_POST["recaptcha_response_field"]);  if (!$resp->is_valid) {    
	die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
	"(reCAPTCHA said: " . $resp->error . ")");  } else {


  $request_method = $_SERVER["REQUEST_METHOD"];
    if($request_method == "GET"){
      $query_vars = $_GET;
    } elseif ($request_method == "POST"){
      $query_vars = $_POST;
    }
    reset($query_vars);
    $t = date("U");

    $file = $_SERVER['DOCUMENT_ROOT'] . "/../data/gdform_" . $t;
    $fp = fopen($file,"w");
    while (list ($key, $val) = each ($query_vars)) {
     fputs($fp,"<GDFORM_VARIABLE NAME=$key START>\n");
     fputs($fp,"$val\n");
     fputs($fp,"<GDFORM_VARIABLE NAME=$key END>\n");
     if ($key == "redirect") { $landing_page = $val;}
    }
    fclose($fp);
    if ($landing_page != ""){
	header("Location: http://".$_SERVER["HTTP_HOST"]."/thanks.php");
    } else {
	header("Location: http://".$_SERVER["HTTP_HOST"]."/");
    }

    }
?>
