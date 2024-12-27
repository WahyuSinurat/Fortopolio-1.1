<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email tujuan
    $to = 'wahyusinurat2@gmail.com'; // Ganti dengan alamat email tujuan

    // Header email
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Mengirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email berhasil dikirim!";
    } else {
        echo "Gagal mengirim email.";
    }
} else {
    echo "Metode permintaan tidak valid.";
}
?>