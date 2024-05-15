<?php
    function loadview($path) {
        // return __DIR__ . "/views/" . "$path" . ".php";
        require(__DIR__ . "/views/" . "$path" . ".php");
    }