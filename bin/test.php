#!/usr/bin/env php
<?php

$json = file_get_contents(__DIR__.'/../clover.json');

$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_URL => 'https://codeclimate.com/test_reports',
    CURLOPT_USERAGENT => 'Code Climate (PHP Test Reporter v0.1.2)',
    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
    CURLOPT_HEADER => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => (string)$json,
    CURLOPT_SSLCERT => realpath(__DIR__.'/../../../../AddTrust-External-CA-Root.pem')
));

$raw_response = curl_exec($ch);
if ($raw_response === false) {
    echo "ERROR: [".curl_errno($ch)."]".curl_error($ch)."\n\n";
} else {
    echo "RESULT: ".var_export($raw_response, true)."\n\n";
}

?>