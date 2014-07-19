<?php
require BASEPATH.'./bootstrap.php';

$id = $_GET['id'];

$API->write("/ip/firewall/mangle/remove", FALSE);
$API->write("=.id=" . $id);
$read = $API->read();

//echo '<pre>';
//print_r($read);
//echo '</pre>';

if (isset($read['!trap'])) {
    ?>
    <html>
        <head>

        </head>
        <div class="container">
            <br><br><br><br><br><br><br><br>
            <div class="col-sm-offset-3 col-sm-6">
                <div class="alert alert-danger fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><span class="glyphicon glyphicon-remove-circle"></span></button>
                    <h4><b>Remove Error !!</b></h4>
                    <br>
                    <p>Sistem Gagal menghapus! silakan coba kembali.</p>
                    <p>Error dengan Pesan : <?php echo $read['!trap']['0']['message'] ?>;</p>
                    <br>
                    <p>
                        <a href="index.php?file=ViewMangle"> <button type="button" class="btn btn-danger">Kembali</button></a>
                    </p>
                </div>
            </div>
        </div>

    <?php } else { ?>
        <div class="container">
            <br><br><br><br><br><br><br><br>
            <div class="col-sm-offset-3 col-sm-6">
                <div class="alert alert-success fade in" >
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><span class="glyphicon glyphicon-remove-circle"></span></button>
                    <h4><b>Remove Succes !!</b></h4>
                    <br>
                    <p>Sistem berhasil menghapus!</p>
                    <br>
                    <p>
                        <a href="index.php?file=ViewMangle"><button type="button" class="btn btn-success" >Oke</button></a>
                    </p>
                </div>
            </div>
        </div>
    <?php } ?>
 
</html>