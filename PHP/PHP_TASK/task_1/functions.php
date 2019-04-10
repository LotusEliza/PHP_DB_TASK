<?php

    function upload_file()
    {
        if (isset($_POST["submit"])){
            if(check_perm()){
                $target_file = DIR . basename($_FILES["fileToUpload"]["name"]);

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
                    return UPLOAD_OK;
                }else {
                    return ERROR_UPLOAD;
                }
            }else{
                return ERROR_PERM;
            }
        }
    }

    function check_perm(){
        $permission=substr(sprintf("%o",fileperms(DIR)),-4);
        if ($permission=="0777"){
           return true;
        }else{
            return false;
        }
    }

    function info_file()
    {
        if(check_perm()){
            $fileList = glob('files/*');
            $files = array();
            $n = 1;

            foreach ($fileList as $filename){
                $shortname = basename($filename);
                $size = format_size_units(filesize($filename));
                $files[] = array("id" => $n++, "name" => $shortname, "size" => $size);
            }
            return $files;
        }else{
            return NULL;
        }
    }


    function remove($filename)
    {
        if(check_perm()) {
            $filesList = glob('files/*');
            foreach($filesList as $file){
                $shortname = basename($file);
                if($shortname == $filename){
                    unlink($file);
                    return REMOVE_OK;
                }
            }
        }else{
            return ERROR_PERM;
        }

    }


    function format_size_units($bytes)
    {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }elseif ($bytes >= 1048576){
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }elseif ($bytes >= 1024){
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }elseif ($bytes > 1){
            $bytes = $bytes . ' bytes';
        }elseif ($bytes == 1){
            $bytes = $bytes . ' byte';
        }else{
            $bytes = '0 bytes';
        }
        return $bytes;
    }
