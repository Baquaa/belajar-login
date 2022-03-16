<?php
include_once "../src/koneksi.php";


if(isset($_POST['btnSimpan'])){
    $Idmenu = $_POST['Idmenu'];
    $Namamenu = $_POST['Namamenu'];
    $Harga = $_POST['Harga'];


    $sqlTambah = mysqli_query($koneksi, "INSERT INTO menu (Idmenu, Namamenu, Harga) VALUES ('$Idmenu','$Namamenu', '$Harga')");
        if($sqlTambah){
            header("location:menu.php");
        }else{
            header("location:tambah_menu.php");
        }
    exit;
}
?>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <table>
        <tr>
            <td>TAMBAH data menu</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>ID menu</td>
            <td>:</td>
            <td><input name="Idmenu" type="text"></td>
        </tr>
        <tr>
            <td>Nama menu</td>
            <td>:</td>
            <td><input name="Namamenu" type="text"></td>
        </tr>
        <tr>
            <td>harga</td></td>
            <td>:</td>
            <td><input name="Harga" type="text"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input name="btnSimpan" type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>