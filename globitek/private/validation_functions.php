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
    return preg_match("/^[A-Za-z0-9)]+$", $value);
  }
?>
