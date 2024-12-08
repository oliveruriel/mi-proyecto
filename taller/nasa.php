<?php
// URL de la API
$key = "T0psw4Aj3GXoL3eNkdxYU3LkhdCZ0xKtawddh70d";
$apiUrl = "https://api.nasa.gov/planetary/apod?api_key=$key";

// Realizar la petición a la API
$response = @file_get_contents($apiUrl);

if ($response === FALSE) {
    echo "<p style='color: red;'>No se pudo conectar con la API. Intenta más tarde.</p>";
} else {
    // Decodificar la respuesta JSON
    $data = json_decode($response, true);

    // Mostrar información de la imagen    
    echo "<h2>" . $data['title'] . "</h2>"; // Título de la imagen
    
    // Verificar si es un video y mostrar el enlace a YouTube
    if ($data['media_type'] == 'video') {
        echo "<p><a href='" . $data['url'] . "'>Ver el video en YouTube</a></p>";
    } else {
        // Si no es un video, mostrar la imagen
        echo "<img src='" . $data['url'] . "' style='max-width: 100%; height: auto;'>";
    }
    
    echo "<p>" . $data['explanation'] . "</p>"; // Descripción
    echo "<p><strong>Fecha:</strong> " . $data['date'] . "</p>"; // Fecha    
}
?>