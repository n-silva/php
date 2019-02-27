<?php

function expandDirectories($base_dir) {
      $directories = array();
      foreach(scandir($base_dir) as $file) {
            if($file == '.' || $file == '..') continue;
            $dir = $base_dir.DIRECTORY_SEPARATOR.$file;
            if(is_dir($dir)) {
                $directories [] = $dir;
                $directories = array_merge($directories, expandDirectories($dir));
            }elseif (end(explode(".",end(explode("/",$dir)))) == 'pdf'){
			 
			      $filename = explode(".",end(explode("/",$dir)))[0];            
            $dirname = "dir_to_pdf_file" . $filename . ".pdf";
            try{
          
                  $command = "pdftotext -enc UTF-8 -nopgbrk " .str_replace(" ", "\ ",  $dir) . " pdftotxt/" . $filename . ".txt";
                  echo $command . "\n";
                  shell_exec($command);
            }catch (Exception $e){
              echo "error \n";
            }  
      }
      return $directories;
}

$directories = expandDirectories(dirname(__FILE__));
?>
