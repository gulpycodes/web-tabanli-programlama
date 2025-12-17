<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Lab Ödevi - Kayıt</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 50px;
        
        /* Pembe Hello Kitty Teması */
        background-color: #ffacc7; 
        background-image: radial-gradient(#ffe0ea 20%, transparent 20%);
        background-size: 30px 30px;
    }

    .kutu {
        border: none;
        padding: 30px;
        margin: 0 auto;
        background-color: #ffffff;
        width: 350px;
        border-radius: 25px;
        box-shadow: 0 8px 20px rgba(184, 98, 118, 0.3);
        text-align: center;
    }

    label {
        display: block;
        margin-top: 15px;
        font-weight: bold;
        color: #d6336c;
        text-align: left;
    }

    input[type="text"], input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 2px solid #ffdeeb;
        border-radius: 10px;
        box-sizing: border-box;
        outline: none;
    }

    input[type="text"]:focus, input[type="email"]:focus {
        border-color: #ff8fab;
    }

    button {
        margin-top: 20px;
        padding: 12px 30px;
        cursor: pointer;
        background-color: #ff8fab;
        color: white;
        border: none;
        border-radius: 20px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #fb6f92;
    }

    .sonuc {
        background-color: #e0ffd4;
        padding: 15px;
        border-radius: 10px;
        color: #2b8a3e;
        margin-top: 10px;
    }

    .hata {
        background-color: #ffe3e3;
        padding: 15px;
        border-radius: 10px;
        color: #c92a2a;
        margin-top: 10px;
    }
    </style>
</head>
<body>

<?php
// 1. VERİTABANI BAĞLANTISI
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "test4"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<div class='hata'>Bağlantı hatası: " . $conn->connect_error . "</div>");
}

// 2. FORM İŞLEMİ: KAYIT EKLEME
if (isset($_POST['kaydet'])) {
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $email = $_POST['email'];

    $sql = "INSERT INTO myguests (firstname, lastname, email) VALUES ('$ad', '$soyad', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='sonuc'>Harika! Yeni kayıt başarıyla eklendi! 🌸</div>";
    } else {
        echo "<div class='hata'>Hata: " . $sql . "<br>" . $conn->error . "</div>";
    }
}

$conn->close();
?>

    <div class="kutu">
        <h3>Yeni Kayıt Ekle 🎀</h3>
        <form method="post" action="">
            <label>Ad (Firstname):</label>
            <input type="text" name="ad" required>
            
            <label>Soyad (Lastname):</label>
            <input type="text" name="soyad" required>
            
            <label>Email:</label>
            <input type="email" name="email" required>
            
            <button type="submit" name="kaydet">Kaydet</button>
        </form>
    </div>

    <br><br>
    <div style="text-align: center; color: #444;">
        Gemini'dan yardım aldım 🤖
    </div>

</body>
</html>
