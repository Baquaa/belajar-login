<?php 
    session_start();
    global $username;
    $level = array("administrator","waiter","kasir","owner");

    function cekLogin(){
        include 'src/koneksi.php';
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
        $cek = mysqli_num_rows($login);
        return $login;
    }


    if(!cekLogin() == null){
        $data = mysqli_fetch_assoc(cekLogin());

        if($data['level']==$level[0]){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "administrator";
            $_SESSION['iduser'] = $data['iduser'];

            echo '<script language="javascript">alert("anda berhasil login sebagai administrator!");document.location="admin/halaman_admin.php";</script>';
        }else if($data['level']==$level[1]){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "waiter";
            $_SESSION['iduser'] = $data['iduser'];

            echo '<script language="javascript">alert("anda berhasil login sebagai waiter!");document.location="waiter/halaman_waiter.php";</script>';
        }else if ($data['level']==$level[2]){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "kasir";
            $_SESSION['iduser'] = $data['iduser'];

            echo '<script language="javascript">alert("anda berhasil login sebagai kasir!");document.location="kasir/halaman_kasir.php";</script>';
        }else if ($data['level']==$level[3]){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "owner";
            $_SESSION['iduser'] = $data['iduser'];

            echo '<script language="javascript">alert("anda berhasil login sebagai owner!");document.location="owner/halaman_owner.php";</script>';
        }else{
            header("location:index.php");
        }
    }else{
        header("location:index.php");
    }
?>