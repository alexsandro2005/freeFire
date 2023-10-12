<?php

class Encriptador {
    private $token;

    public function __construct($token) {
        $this->token = $token;
    }

    public function encriptar($texto) {
        $clave = $this->generarClave();
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $textoEncriptado = openssl_encrypt($texto, 'aes-256-cbc', $clave, 0, $iv);
        return base64_encode($iv . $textoEncriptado);
    }

    public function desencriptar($textoEncriptado) {
        $clave = $this->generarClave();
        $textoEncriptado = base64_decode($textoEncriptado);
        $ivTamanio = openssl_cipher_iv_length('aes-256-cbc');
        $iv = substr($textoEncriptado, 0, $ivTamanio);
        $textoEncriptado = substr($textoEncriptado, $ivTamanio);
        return openssl_decrypt($textoEncriptado, 'aes-256-cbc', $clave, 0, $iv);
    }

    private function generarClave() {
        return md5($this->token);
    }
}

$token = "11SXDLSLDDDDKFE332KDKS";
$encriptador = new Encriptador($token);

// Para encriptar
$texto = "Texto a encriptar";
$textoEncriptado = $encriptador->encriptar($texto);

// Para desencriptar
$textoDesencriptado = $encriptador->desencriptar($textoEncriptado);

?>
