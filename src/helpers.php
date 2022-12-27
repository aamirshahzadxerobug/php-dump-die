<?php
if (!function_exists('xdd')) {
    function xdd($data = null, $exit = 1) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        if($exit == 1) {
        	exit();
        }
    }
}