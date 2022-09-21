<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Akun</title>
    <style>
body
{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url('storm.gif');
    font-family: consolas;
    color: #fff;
}
.container
{
    position: relative;
    width: 500px;
    min-height: 500px;
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 5px 15px rgba(0,0,0,1);
}
.container:before
{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: rgba(255, 255, 255, 0.1);
    pointer-events: none;
}
.container::after
{
    content: '';
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    background: linear-gradient(45deg,#ff0047,#6eff00);
    pointer-events: none;
    animation: animate 10s linear infinite;
}
@keyframes animate
{
    0%
    {
        filter:blur(60px) hue-rotate(0deg);
    }
    100%
    {
        filter:blur(60px) hue-rotate(360deg);
    }
}
.form
{
    position: absolute;
    width: 100%;
    height: 100%;
    padding: 40px;
    box-sizing: border-box;
    z-index: 1;
}
.form h2
{
    margin: 0;
    padding: 0;
    color: #fff;
    font-size: 24px;
}
.form .inputBox
{
    width: 100%;
    margin-top: 20px;
}
.form .inputBox input
{
    width: 100%;
    background: transparent;
    border: none;
    border-bottom: 2px solid #fff;
    outline: none;
    font-size: 18px;
    color: #fff;
    padding: 5px 0;
    font-family: consolas;
}
::placeholder
{
    color: #eee;
}
.form .inputBox input[type="submit"]
{
    background: #fff;
    color: #000;
    border: none;
    font-weight: 900;
    max-width: 100px;
    cursor: pointer;
}
.form p
{
    color: #eee;
}
.form p a
{
    color: #fff;
}
    </style>
</head>
<body>
    <center>
<form action="proses_daftar.php" method="post">
<div class="container">
        <div class="form">
        <fieldset>
        <h3>Pendaftaran Siswa Baru</h3>
<h3>SMKN 1 Sayung</h3>
<table border=0>
<tr>
<td>Nama lengkap</td>
<td>:<input type="text" name="n"/></td>
</tr>
<tr>
<td>Tempat lahir</td>
<td>:<input type="text" name="t"/></td>
</tr>
<td>Tanggal lahir</td>
<td>:<input type="date" name="tl" /></td>
<tr>
<td>Jenis Kelamin</td>
<td>:
<input type="radio" name="sex" value="Pria"/>Pria
<input type="radio" name="sex" value="Wanita"/>Wanita
</td>
</tr>
<tr>
<td>Alamat          :</td>
<td>
    <textarea name="almt"></textarea></td>
</tr>
<tr>
<td>Agama</td>
<td>:
<select name="agama">
<option>Islam</option>
<option>Kristen</option>
<option>Katolik</option>
<option>Hindu</option>
<option>Budha</option>
</select>
</td>
</tr>
<tr>
<td>
<input type="reset" value="ulangi" />
<td><input type="submit" value="kirim" name="data"/></td>
</td>
</tr>
</table>
</form>
</center>
</body>
</html>