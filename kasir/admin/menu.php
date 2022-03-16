<?php
    include "../src/koneksi.php";
?>

<h3>menu</h3>
<a href="tambah_menu.php">tambah menu</a> || <a href="halaman_admin.php">kembali </a> 
    
<table border="1">
    <tr>
        <td>id menu</td>
        <td>nama menu</td>
        <td>harga</td>
        <td>aksi</td>
    </tr>

        <?php
        $sql = mysqli_query($koneksi, "select * from menu");
        while ($data = mysqli_fetch_array($sql)){
        ?>
    <tr>
        <td> <?php echo $data['Idmenu']; ?> </td>
        <td> <?php echo $data['Namamenu']; ?> </td>
        <td> <?php echo $data['Harga']; ?> </td>
    
        <td><a href="hapus_menu.php?Idmenu=<?php echo $data['Idmenu'];?>"target="_self" onclick="return confirm('YAKIN INGIN MENGHAPUS DATA INI .... ?')">hapus</a> || <a href="edit_menu.php?Idmenu=<?php echo $data['Idmenu'];?>">edit</a></td>
    </tr>
<?php } ?>
</table>