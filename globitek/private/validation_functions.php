<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return !isset($value) || trim($value)=='';
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=[]) {
    $length=strlen($value);
    if(isset($options['max'])&& ($length > $options['max'])){
      return false;
    }
    elseif(isset($options['min']) && ($length < $options['min'])){
      return false;
    }
    elseif(isset($options['exact']) && ($length != $options['exact'])){
      return false;
    }
    else{
      return true;
    }
  }
  // My custom validation at least one character before '@',
  // at least one character after '@' before '.', and at least one char after '.'
  // has_valid_email_format('test@test.com')
  function has_valid_email_format($value) {
    return preg_match
        ("/^[A-Za-z0-9_\.\-]+@[A-Za-z0-9]+\.{1}+[A-Za-z+]+$/", $value);
  }
  
  // has_valid_phone_format((999)-999-9999)
  function has_valid_phone_format($value){
    return preg_match("/^[0-9 ()-]+$/", $value);
  }

  // has_valid_username_format (whiteleist char: A-Z a-z 0-9 _
  function has_valid_username_format($value){
    return preg_match("/^[A-Za-z0-9)]+$/", $value);
  }
  // My custom validation
  // has_valid_name_format
  function has_valid_name_format($value){
	  return preg_match("/^[A-Za-z '-,.]+$/", $value);
  }
  // My custom validation
  // has_valid_code_format (AZ) (only 2 uppercase char)
  function has_valid_code_format($value){
	  return preg_match("/^[A-Z]{2}$/", $value);
  }
  
  // My custom validation
  // has_valid_id_format (1) 01 is invalid
  function has_valid_id_format($value){
	  return preg_match("/^[1-9]{1}[0-9]*$/", $value);
  }
  
  // My custom validation 
  // has_valid_state_format (first char is uppercase)
  function has_valid_state_format($value){
	  return preg_match("/^[A-Z][A-Za-z ]+$", $value);
  }
?>
