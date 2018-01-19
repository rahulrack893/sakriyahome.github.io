<?php
require_once("../../../../wp-load.php");

   if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
      foreach (get_option('wc_fields_account') as $key => $value){
         if($value['type'] == 'file'){
            $maxsize =  $value['maxfile'] * 1000000;
  
         }
      }
      $extensionsArr = array();
      $extensions= $value['extoptions'];
      foreach ($value['extoptions'] as $value) {
         $extensionsArr[] = $value; 
      }
         if(in_array($file_ext,$extensionsArr)=== false){
         $errors[]="extension not allowed, please choose a ".implode(",", $extensionsArr)." file.";
      }
      
      if($file_size > $maxsize){
         $errors[]='File size must be excately '.$maxsize.' MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "File Uploaded";
      }else{
         print_r($errors);
      }
   }

?>