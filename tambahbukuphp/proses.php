<?php
    include 'koneksi.php';
    if(isset($_POST['aksi'])){
    	if($_POST['aksi'] == "add"){

             // var_dump($_FILES);
             // echo $_FILES['foto']['type'];
             // die();

            $judul_buku = $_POST['judul_buku'];
            $nama_pengarang = $_POST['nama_pengarang'];
            $ketagori_buku = $_POST['ketagori_buku'];
            $ketebalan_buku = $_POST['ketebalan_buku'];
            $sinopsis = $_POST['sinopsis'];
            $ranting = $_POST['ranting'];
            $foto_sampul = $_FILES['foto_sampul']['name'];
            $foto_1 = $_FILES['foto_1']['name'];
            $foto_2 = $_FILES['foto_2']['name'];

            $dir = "../img/";
            $tmpFile1 = $_FILES['foto_sampul']['tmp_name'];
            $tmpFile2 = $_FILES['foto_1']['tmp_name'];
            $tmpFile3 = $_FILES['foto_2']['tmp_name'];

            move_uploaded_file($tmpFile1, $dir.$foto_sampul);
            move_uploaded_file($tmpFile2, $dir.$foto_1);
            move_uploaded_file($tmpFile3, $dir.$foto_2);

            //die();

            $query = "insert into tb_buku values(null, '$judul_buku', '$nama_pengarang','$ketagori_buku','$ketebalan_buku','$sinopsis','$ranting','$foto_sampul','$foto_1','$foto_2')";
            $sql = mysqli_query($conn, $query);
            if ($sql) {
                header("location: ../discoveradmin.php");
            } else {
                echo $query;
            }

    		//echo "tambah Data";
    	} else if($_POST['aksi'] == "edit"){
    		echo "edit Data";

        }
    	}
    	if (isset($_GET['hapus'])) {
            $id_buku = $_GET['hapus'];

            $queryShow = "select * from tb_buku where id_buku = '$id_buku';";
            $sqlShow = mysqli_query($conn, $queryShow);

            $result = mysqli_fetch_assoc($sqlShow);
            unlink("../img/ ".$result['foto_sampul']);

            $result1 = mysqli_fetch_assoc($sqlShow);
            unlink("../img/ ".$result1['foto_1']);

            $result2 = mysqli_fetch_assoc($sqlShow);
            unlink("../img/ ".$result2['foto_2']);




            
        

    		$query = "delete from tb_buku where id_buku = '$id_buku';";
            $sql = mysqli_query($conn, $query);

            if ($sql) {
                header("location: ../discoveradmin.php");
            } else {
                echo $query;
            }
    	}

?>