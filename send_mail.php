<?php
// Pastikan untuk mengganti alamat email di bawah ini dengan email Anda
$to = "muye392@gmail.com"; 

// Ambil data dari form
$email = $_POST['email'];
$message = $_POST['message'];

// Format email
$subject = "Kritik dan Saran dari: $email";
$body = "Email: $email\n\nPesan:\n$message";

// Header tambahan untuk pengiriman email
$headers = "From: noreply@yourdomain.com\r\n";
$headers .= "Reply-To: $email\r\n";

// Kirim email
if (mail($to, $subject, $body, $headers)) {
    echo "Pesan berhasil dikirim!";
} else {
    echo "Pesan gagal dikirim.";
}
?>
