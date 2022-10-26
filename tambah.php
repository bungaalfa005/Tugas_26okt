<html>
    <head>
</head>
<body>
    <h2>FORM PEMBELIAN BBM</h2>
    <form action="proses.php" method="POST">
        <fieldset>
    <P>
    <label for="NIK">NIK:</label>
    <input type="number" name="NIK"/>
</P>
<P>
<label for="JK">Jenis Kendaraan:</label>
<select name="JK">
    <option value="motor">motor</option>
    <option value="mobil">mobil</option>
    <option value="truk">truk</option>
    <option value="bis">bis</option>
    <option value="tossa">tossa</option>
</select>
</p>
<p>
<input type="submit" value="Kirim Data" name="tambah">
</p>
</fieldset> 
</body>
</html>