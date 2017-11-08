<?php
// * presence
function has_presence($value) {
  return (isset($value) && $value !== "");
}
// // max
function has_max_length($value, $max) {
return (strlen($value) <= $max);
}
// * inclusion in a set
function has_inclusion_in($value, $set) {
  return in_array($value, $set);
}
// form errors
function form_errors($errors = []) {
  $output = "";
  if (!empty($errors)) {
    $output = "<div class=\"error\">";
    $output .= "Please fix the following errors";
    $output .= "<ul>";
    foreach ($errors as $key => $error) {
      $output .= "<li>{$error}</li>";
    }
    $output .= "</ul>";
    $output .= "</div>";
  }
  return $output;
}
?>
