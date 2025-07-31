<?php

if(isset($_SERVER['PATH_INFO'])){
    echo "Path Info: " . $_SERVER['PATH_INFO'];
} else {
    echo "No Path Info set.";
}