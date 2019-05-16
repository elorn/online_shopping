<?php

$errorAry = [];
// accos array ["password","username"]
function check_empty_fields($fields_to_check){
  global $errorAry;
  foreach ($fields_to_check as $field_name) {
    $filed_value = trim($_POST[$field_name]);
    if(is_empty($filed_value)){
      $errorAry[$field_name] = $field_name. "cant be empty";
    }
    }
}

function check_min_fields($fields_min_check){
  global $errorAry;
  foreach ($fields_min_check as $field_name => $min) {
    $field_value = trim($_POST[$field_name]);
    if (is_min($field_value,$min)){
      $errorAry[$field_name] = $field_name. "need minimum" . $min . "charter";

    }
  }
}

function show_Error(){
  global $errorAry;
$output = "";
$output .= "<div class=\"alert alert-danger\" role=\"alert\">";
foreach ($errorAry as $field_name => $error) {
$output .= "<li> {$field_name} . {$error} </li>";
}
$output .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">";
$output .=  "<span aria-hidden=\"true\">&times;</span></button>";
$output .= "</div>";
return $output;
}

function is_mailvalid($email){
  return filter_var($email, FILTER_VALIDATE_EMAIL);
  if($res !==false){
    return true;
  }
  return false;
}
function is_empty($input){
  if(isset($input)&&$input!==""){
    return false;
  }else {
    return true;
  }
}
function is_min($input,$min=5){
  return strlen($input)<$min;
}
function is_max($input,$max=5){
  return strlen($input)>$max;
}
 ?>
