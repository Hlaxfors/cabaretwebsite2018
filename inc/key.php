<?php

function create_key($private_key) {
    $rand = random_bytes(10);
    $signature = substr(hash_hmac('sha256', $rand, $private_key, true), 0, 10);
    $license = base64_encode($rand . $signature);
    return $license;
}

function check_key($license, $private_key) {
    $tmp = base64_decode($license);
    $rand = substr($tmp, 0, 10);
    $signature = substr($tmp, 10);
    $test = substr(hash_hmac('sha256', $rand, $private_key, true), 0, 10);
    return $test === $signature;
}
