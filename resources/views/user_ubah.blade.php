<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Form Ubah Data User</h1>
    <a href="{{url('/user')}}">Kembali</a>
    <br><br>

    <form method="post" action="/user/ubah_simpan/{{ $data->user_id }}">

        {{ csrf_field() }}
        {{ method_field('PUT')}}

        <label> Username </label>
        <input type="text" name="username" placeholder="Masukan Username">
        <br>
        <label> Nama </label>
        <input type="text" name="nama" placeholder="Masukan Nama">
        <br>
        <label> Password </label>
        <input type="password" name="password" placeholder="Masukan Passsword">
        <br>
        <label> Level ID </label>
        <input type="number" name="level_id" placeholder="Masukkan ID Level">
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">

    </form>
</body>
</html>