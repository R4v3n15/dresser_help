<?php

class Helpers {
    public static function renderJSON($data){
        header("Content-Type: application/json");
        echo json_encode($data);
    }
}
