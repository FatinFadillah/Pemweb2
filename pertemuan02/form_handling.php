<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pratikum 2 - Form handling </title>
</head>
<body>
    <h1>Belajar Form Handling 1</h1>
    <form action="belajar_post.php" method="POST">
        
        <label for="">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>

        
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" id=""><span>Laki-laki</span><br>
        <input type="radio" name="jenis_kelamin" id=""><span>Perempuan</span><br>

        
        <label for="">Hobi</label><br>
        <input type="checkbox" name="hobi[]" value="Sepak Bola"><label>Sepak Bola</label><br>
        <input type="checkbox" name="hobi[]" value="Badminton"><label>Badminton</label><br>
        <input type="checkbox" name="hobi[]" value="Balap Lari"><label>Balap Lari</label><br><br>

        
        <label for="umur">Umur</label><br>
        <input type="number" name="umur"><br><br>


        <label for="tanggal_lahir">Tanggal Lahir</label><br>
        <input type="date" name="tanggal_lahir"><br><br>


        <label for="prodi">Prodi</label><br>
        <select name="prodi">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select><br><br>

        
        <button type="submit">Simpan !</button>
        <button type="reset">Reset</button>

    </form>
</body>
</html>