<?php


$ruta = 'public/assets/images/';

// Verifica si la carpeta "images" existe
if (file_exists($ruta)) {
    // Obtén la lista de archivos en la carpeta "images"
    $archivos = scandir($ruta);

    // Itera sobre la lista de archivos
    foreach ($archivos as $archivo) {
        // Verifica si el archivo es una imagen (puedes ajustar esta condición según los formatos de imagen que desees mostrar)
        if (in_array(pathinfo($archivo, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
            // Muestra la imagen en una lista
            echo '<img src="' . $ruta . $archivo . '" alt="' . $archivo . '">';
        }
    }
} else {
    echo 'La carpeta "images" no existe.';
}


?>