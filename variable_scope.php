<?php
// Global Scope
$name = "Bangladash";

function something(){
    // Two way access global variable

    /* global $name;
    echo $name; */

    // echo $GLOBALS['name'];
};
something();

// Local Scope

function localScope(){
    $name = "Bangladash";
    echo $name;
};

localScope();