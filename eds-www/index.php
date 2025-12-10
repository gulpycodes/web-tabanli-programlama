<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üyelik Formu</title>
</head>
<body>
    <h1>Üyelik Kayıt Formu</h1>

    <form action="sonuc.php" method="POST">
        
    <fieldset>
        <legend>Kişisel Bilgiler</legend>
        <label for="adsoyad">Adınız Soyadınız:</label>
        <input type="text" id="adsoyad" name="adsoyad" required>
    </fieldset>
    <br>

    <fieldset>
        <legend>Soru 1: HTML'in açılımı nedir?</legend>
        <input type="radio" id="cevap1a" name="soru1" value="HyperText Markup Language">
        <label for="cevap1a">HyperText Markup Language</label><br>

        <input type="radio" id="cevap1b" name="soru1" value="HighText Machine Language">
        <label for="cevap1b">HighText Machine Language</label><br>

        <input type="radio" id="cevap1c" name="soru1" value="Hyperlink and Text Markup Language">
        <label for="cevap1c">Hyperlink and Text Markup Language</label>
    </fieldset>
    <br>

    <fieldset>
        <legend>Soru 2: Hangileri bir programlama dilidir?</legend>
        <input type="checkbox" id="cevap2a" name="soru2_python" value="Python">
        <label for="cevap2a">Python</label><br>

        <input type="checkbox" id="cevap2b" name="soru2_html" value="HTML">
        <label for="cevap2b">HTML</label><br>

        <input type="checkbox" id="cevap2c" name="soru2_java" value="Java">
        <label for="cevap2c">Java</label>
    </fieldset>
    <br>

    <fieldset>
        <legend>Soru 3: CSS nerede kullanılır?</legend>
        <label for="soru3">Cevabınızı seçin:</label>
        <select id="soru3" name="soru3">
            <option value="">Seçiniz...</option>
            <option value="Sayfanın yapısı">Sayfanın yapısı için</option>
            <option value="Sayfanın stili">Sayfanın stil (görünüm) ayarları için</option>
            <option value="Sunucu işlemleri">Sunucu işlemleri için</option>
        </select>
    </fieldset>
    <br>

    <fieldset>
        <legend>Soru 4: Kendi web sitenizi yapacak olsanız, ne hakkında olurdu?</legend>
        <textarea id="soru4" name="soru4" rows="4" cols="50"></textarea>
    </fieldset>
    <br>

    <fieldset>
        <legend>Ek Bilgiler</legend>
        <label for="yas">Yaşınız:</label>
        <input type="number" id="yas" name="yas" min="18" max="99">
        <br><br>
        <label for="tarih">Sınav Tarihi:</label>
        <input type="date" id="tarih" name="tarih">
    </fieldset>
    <br>

    <input type="submit" value="Testi Bitir">
    <input type="reset" value="Cevapları Sıfırla">

    </form>
</body>
</html>