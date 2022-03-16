<?php
include_once "../src/koneksi.php";


if(isset($_POST['btnSimpan'])){
    $Idmenu = $_POST['Idmenu'];
    $Namamenu = $_POST['Namamenu'];
    $Harga = $_POST['Harga'];


$sqlEdit = mysqli_query($koneksi, "UPDATE menu SET Namamenu='$Namamenu', Harga='$Harga' WHERE Idmenu='$Idmenu'");
    if($sqlEdit){
        header("location:menu.php");
    }else{
        header("location:edit_menu.php");
    }
    exit;
}



$Idmenu = $_GET['Idmenu'];
$sql = mysqli_query($koneksi, "SELECT * FROM menu WHERE Idmenu ='$Idmenu'");
$data = mysqli_fetch_array($sql);
?>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <table>
        <tr>
            <td>Ubah data menu</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>ID menu</td>
            <td>:</td>
            <td><input name="Idmenu" type="text" value="<?php echo $data['Idmenu']; ?>" readonly="true"></td>
        </tr>
        <tr>
            <td>Nama menu</td>
            <td>:</td>
            <td><input name="Namamenu" type="text" value="<?php echo $data['Namamenu']; ?>"></td>
        </tr>
        <tr>
            <td>harga</td></td>
            <td>:</td>
            <td><input name="Harga" type="text" value="<?php echo $data['Harga']; ?>"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input name="btnSimpan" type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
