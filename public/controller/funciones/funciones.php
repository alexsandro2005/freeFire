<?php


function encriptar($texto, $token) {
    $clave = md5($token); // Generar clave a partir de la semilla
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $textoEncriptado = openssl_encrypt($texto, 'aes-256-cbc', $clave, 0, $iv);
    return base64_encode($iv . $textoEncriptado);
}

function desencriptar($textoEncriptado, $token) {
    $clave = md5($token); // Generar clave a partir de la semilla
    $textoEncriptado = base64_decode($textoEncriptado);
    $ivTamanio = openssl_cipher_iv_length('aes-256-cbc');
    $iv = substr($textoEncriptado, 0, $ivTamanio);
    $textoEncriptado = substr($textoEncriptado, $ivTamanio);
    return openssl_decrypt($textoEncriptado, 'aes-256-cbc', $clave, 0, $iv);
}

$token = "11SXDLSLDDDDKFE332KDKS";


?>