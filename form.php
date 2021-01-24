<!DOCTYPE html>
<html>
    <head>
        <title>Belajar Autofill - farez syx</title>
    </head>
    <body>
    <h1>Belajar Autofill</h1>
        <form action="">
            <table>
                <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" id="nim"></td></tr>
                <tr><td>NAMA</td><td><input type="text" id="nama" disabled></td></tr>
                <tr><td>JENIS KELAMIN</td><td><input type="text" id="jeniskelamin" disabled></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" id="alamat" disabled></td></tr>
            </table>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function isi_otomatis(){
                var nim = $("#nim").val();
                $.ajax({
                    url: 'ajaxotomatis.php',
                    data:"nim="+nim ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama').val(obj.nama);
                    $('#jeniskelamin').val(obj.jeniskelamin);
                    $('#alamat').val(obj.alamat);
                });
            }
        </script>
    </body>
</html>
