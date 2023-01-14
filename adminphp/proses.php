<?php
    include 'koneksi.php';
    if(isset($_POST['aksi'])){
    	if($_POST['aksi'] == "add"){

             // var_dump($_FILES);
             // echo $_FILES['foto']['type'];
             // die();

            $username = $_POST['username'];
            $password = $_POST['password'];
            $nama_lengkap = $_POST['nama_lengkap'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $foto = $_FILES['foto']['name'];
            $level = $_POST['level'];

            $dir = "../adminbg/";
            $tmpFile = $_FILES['foto']['tmp_name'];

            move_uploaded_file($tmpFile, $dir.$foto);

            //die();

            $query = "insert into tb_admin values(null, '$username', '$password','$nama_lengkap','$jenis_kelamin','$alamat','$foto','$level')";
            $sql = mysqli_query($conn, $query);
            if ($sql) {
                header("location: ../tambahadmin.php");
            } else {
                echo $query;
            }

    		//echo "tambah Data";
         }else if($_POST['aksi'] == "reg"){

             // var_dump($_FILES);
             // echo $_FILES['foto']['type'];
             // die();

            $username = $_POST['username'];
            $password = $_POST['password'];
            $nama_lengkap = $_POST['nama_lengkap'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $foto = $_FILES['foto']['name'];
            $level = 'user';

            $dir = "../adminbg/";
            $tmpFile = $_FILES['foto']['tmp_name'];

            move_uploaded_file($tmpFile, $dir.$foto);

            //die();

            $query = "insert into tb_admin values(null, '$username', '$password','$nama_lengkap','$jenis_kelamin','$alamat','$foto','$level')";
            $sql = mysqli_query($conn, $query);
            if ($sql) {
                header("location: ../loginadmin.php");
            } else {
                echo $query;
            }


    	} else if($_POST['aksi'] == "edit"){
            $id_admin = $_POST['id_admin'];
    	    $username = $_POST['username'];
            $password = $_POST['password'];
            $nama_lengkap = $_POST['nama_lengkap'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $level = $_POST['level'];


            $queryShow = "select * from tb_admin where id_admin = '$id_admin';";
            $sqlShow = mysqli_query($conn, $queryShow);
            $result = mysqli_fetch_assoc($sqlShow);

            if($_FILES['foto']['name'] == ""){
             $foto = $result['foto'];
            } else {
                $foto = $_FILES['foto']['name'];
                unlink("../adminbg/".$result['foto']);
                move_uploaded_file($_FILES['foto']['tmp_name'], '../adminbg/'.$_FILES['foto']['name']);
            }



            $query = "update tb_admin set username='$username',password='$password',nama_lengkap='$nama_lengkap',jenis_kelamin='$jenis_kelamin',alamat='$alamat',level='$level', foto = '$foto' where id_admin='$id_admin';";
            $sql = mysqli_query($conn, $query);
            if ($sql) {
                header("location: ../tambahadmin.php");
            } else {
                echo $query;
            }

        }
    	}


    	if (isset($_GET['hapus'])) {
            $id_admin = $_GET['hapus'];

            $queryShow = "select * from tb_admin where id_admin = '$id_admin';";
            $sqlShow = mysqli_query($conn, $queryShow);
            $result = mysqli_fetch_assoc($sqlShow);

            unlink("../adminbg/".$result['foto']);

    		$query = "delete from tb_admin where id_admin = '$id_admin';";
            $sql = mysqli_query($conn, $query);

            if ($sql) {
                header("location: ../tambahadmin.php");
            } else {
                echo $query;
            }
    	}



?>