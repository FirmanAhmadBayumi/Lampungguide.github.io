<?php
// Mendapatkan data dari permintaan POST
// $username = $_POST['username'];
// $password = $_POST['password'];

// Menyimpan username dan password yang valid
// $validUsername = 'admin';
// $validPassword = 'lampung12345';

// Memeriksa apakah username dan password yang dikirim sesuai
// if ($username == $validUsername && $password == $validPassword) {
    // Login berhasil
//     $response = array(
//         'success' => true,
//         'message' => 'Login Successful!'
//     );
// } else {
    // Login gagal
//     $response = array(
//         'success' => false,
//         'message' => 'Invalid username or password'
//     );
// }

// Mengubah respon menjadi format JSON
// $jsonResponse = json_encode($response);

// Mengirim respon ke klien
// header('Content-Type: application/json');
// echo $jsonResponse;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === '/loginTam/index.php') {
    // Mendapatkan data dari permintaan POST
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menyimpan username dan password yang valid
    $validUsername = 'admin';
    $validPassword = 'lampung12345';

    // Memeriksa apakah username dan password yang dikirim sesuai
    if ($username == $validUsername && $password == $validPassword) {
        // Login berhasil
        $response = array(
            'success' => true,
            'message' => 'Login Successful!'
        );
    } else {
        // Login gagal
        $response = array(
            'success' => false,
            'message' => 'Invalid username or password'
        );
    }

    // Mengubah respon menjadi format JSON
    $jsonResponse = json_encode($response);

    // Mengirim respon ke klien
    header('Content-Type: application/json');
    echo $jsonResponse;
} else {
    // Endpoint tidak ditemukan
    header('HTTP/1.1 404 Not Found');
    echo 'Endpoint not found';
}
?>

