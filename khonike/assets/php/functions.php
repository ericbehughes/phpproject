<?php 

// pre_r
function pre_r($arry) {
    echo "<pre>";
    print_r($arry);
    echo "</pre>";
}

// reArrayFiles
function reArrayFiles($file_post) {
    $file_array = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i < $file_count; $i++) { 
        foreach ($file_keys as $key) {
            $file_array[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_array;
}