<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Tablo Oluşturma Ödevi</title>
    <style>
        /* Sayfa düzeni ve tablo çizgileri için basit stil */
        body { font-family: Arial, sans-serif; padding: 20px; text-align: center; }
        
        /* Form kutusunun tasarımı */
        .form-kutu {
            background-color: #f9f9f9;
            padding: 20px;
            border: 2px solid #333;
            display: inline-block;
            border-radius: 10px;
        }
        input { padding: 5px; width: 150px; text-align: center; }
        button { 
            padding: 10px 20px; 
            background-color: #28a745; 
            color: white; 
            border: none; 
            cursor: pointer; 
            font-weight: bold;
            margin-top: 10px;
        }

        /* Tablo tasarımı */
        table {
            margin: 20px auto; /* Ortalamak için */
            border-collapse: collapse;
        }
        td {
            border: 1px solid black; /* Hücre çizgileri */
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 18px;
            background-color: #e3f2fd;
        }
    </style>
</head>
<body>

    <div class="form-kutu">
        <h2>Tablo Oluşturucu</h2>
        <form method="POST">
            <label>Satır Sayısı:</label><br>
            <input type="number" name="satir" min="1" required placeholder="Kaç satır?">
            <br><br>
            <label>Sütun Sayısı:</label><br>
            <input type="number" name="sutun" min="1" required placeholder="Kaç sütun?">
            <br><br>
            <button type="submit">Tabloyu Oluştur</button>
        </form>
    </div>

    <hr>

    <?php
    // Sadece butona basıldıysa çalışır
    if ($_POST) {
        $satir_sayisi = $_POST['satir'];
        $sutun_sayisi = $_POST['sutun'];

        echo "<h3>$satir_sayisi Satır x $sutun_sayisi Sütunlu Tablo</h3>";
        
        echo "<table>"; // Tabloyu başlat

        // Satırları dön (1'den girilen sayıya kadar)
        for ($i = 0; $i < $satir_sayisi; $i++) {
            echo "<tr>"; // Yeni satır aç
            
            // Sütunları dön
            for ($j = 0; $j < $sutun_sayisi; $j++) {
                $rastgele_sayi = rand(1, 100); // 1-100 arası sayı tut
                echo "<td>$rastgele_sayi</td>"; // Hücreye yaz
            }
            
            echo "</tr>"; // Satırı kapat
        }

        echo "</table>"; // Tabloyu kapat
    }
    ?>

</body>
</html>
