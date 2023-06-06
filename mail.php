<?php

$servername = "localhost";
$username = " root";
$password = "";
$veritabanı = "mywebsiteconnect";

$conn = new mysqli($servername, $isim, $konu, $mesaj);
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$isim = $_POST["isim"];
$email = $_POST["email"];
$konu = $_POST["konu"];
$mesaj = $_POST["mesaj"];


$sql = "INSERT INTO messages (isim, email, konu, mesaj) VALUES ('$isim', '$email', '$konu', '$mesaj')";

if ($conn->query($sql) === TRUE) {
    echo "Mesaj başarıyla kaydedildi.";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$to = "1esmapasaoglu@mail.com";
$headers = "From: $email \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$konu = "Yeni İletişim Mesajı";
$mesaj = "İsim: $isim<br>
            E-posta: $email<br>
            Konu: $konu<br>
            Mesaj: $mesaj<br>";

mail($to, $konu, $mesaj, $headers);

$conn->close();
?>
 