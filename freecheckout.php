<?php

# Free Checkout Payment Gateway Module

if (!defined("WHMCS")) die("This file cannot be accessed directly");

function freecheckout_config() {

    $configarray = array(
     "FriendlyName" => array(
        "Type" => "System",
        "Value" => "Free Checkout"
        ),
     "instructions" => array(
        "FriendlyName" => "Free Checkout Instructions",
        "Type" => "textarea",
        "Rows" => "1",
        "Value" => "Invoice Type:\nFree:",
        "Description" => "Free Tag On Invoice",
        ),
    );

    return $configarray;

}

function freecheckout_link($params) {
    $code = '<p>'
        . nl2br($params['instructions'])
        . '<br />'
        . Lang::trans('invoicerefnum')
        . ': '
        . $params['invoicenum']
        . '</p>';

    return $code;

}
