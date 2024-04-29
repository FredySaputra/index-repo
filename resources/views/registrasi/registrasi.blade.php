<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hallo silahkan isi form</h1>
    <form action="/register" method="post">
    @csrf
    <div class="from-regist">
    <label for="nim">NIM</label>
    <input type="text" name="nim" id="nim" placeholder="Masukan NIM" required autofocus>
    </div>
    <div class="from-regist">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" required>
    </div>
    <div class="from-regist">
    <label for="jabatan">Jabatan</label>
    <input type="text" name="jabatan" id="jabatan" placeholder="Masukkan Jabatan" required>
    </div>
    <div class="from-regist">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="Masukkan Password" required>
    </div>
    <div class="from-regist">
    <button type="submit">Submit</button>
    </div>
    </form>
</body>
</html>