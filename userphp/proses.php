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

            $dir = "../adminbg/";
            $tmpFile = $_FILES['foto']['tmp_name'];

            move_uploaded_file($tmpFile, $dir.$foto);

            //die();

            $query = "insert into tb_admin values(null, '$username', '$password','$nama_lengkap','$jenis_kelamin','$alamat','$foto')";
            $sql = mysqli_query($conn, $query);
            if ($sql) {
                header("location: ../tambahadmin.php");
            } else {
                echo $query;
            }

    		//echo "tambah Data";
         }else if($_POST['aksi'] == "reg"){

    

            $username = $_POST['username'];
            $password = $_POST['password'];
            $nama_user = $_POST['nama_user'];
            $alamat = $_POST['alamat'];
            $foto_user = " ";
            $langanan = " ";
            $status_langganan = "tidak";
            $jenis_kelamin = $_POST['jenis_kelamin'];
            

            //die();

            $query = "insert into tb_user values(null, '$username', '$password','$nama_user','$alamat','$foto_user','$langanan','$status_langganan','$jenis_kelamin')";
            $sql = mysqli_query($conn, $query);
            if ($sql) {
                header("location: ../loginuser.php");
            } else {
                echo $query;
            }

    	} else if($_POST['aksi'] == "edit"){
    		echo "edit Data";

        }
    	}

    	if (isset($_GET['hapus'])) {
            $id_admin = $_GET['hapus'];

            $queryShow = "select * from tb_admin where id_admin = '$id_admin';";
            $sqlShow = mysqli_query($conn, $queryShow);
            $result = mysqli_fetch_assoc($sqlShow);

            unlink("../adminbg/ ".$result['foto']);

    		$query = "delete from tb_admin where id_admin = '$id_admin';";
            $sql = mysqli_query($conn, $query);

            if ($sql) {
                header("location: ../tambahadmin.php");
            } else {
                echo $query;
            }
    	}

?>