<?php
$config = include 'config.php';
$dataFile = 'data.json';
$maxEmails = $config['max_emails']; // Get the maximum number of emails allowed from the configuration

// Read existing emails from data.json
$data = json_decode(file_get_contents($dataFile), true) ?? [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (count($data) < $maxEmails) {
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $jumlahResult = isset($_POST['jumlahResult']) ? (int)$_POST['jumlahResult'] : 1;

        if ($email) {
            $data[] = ['email' => $email, 'jumlahResult' => $jumlahResult];

            // Save the updated data to the JSON file
            file_put_contents($dataFile, json_encode($data));

            echo json_encode(['success' => true, 'message' => '👉Email Berhasil Di Tambahkan👈']);
        } else {
            echo json_encode(['success' => false, 'message' => '🤣Lu Dongo Isi Yang Bener Kocak!!.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => '😂Lu Tolol Udah Max Minimal Sewa Yang Mahal Dek!!.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Gagal menambahkan email.']);
}
?>