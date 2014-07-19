<?php
include BASEPATH.'./bootstrap.php';

$name = $_POST['name'];
$regexp = $_POST['regexp'];
$comment = $_POST ['comment'];

$API->write("/ip/firewall/layer7-protocol/add", FALSE);
$API->write("=name=" . $name, FALSE);
$API->write("=regexp=" . $regexp, FALSE);
$API->write("=comment=" . $comment);
$read = $API->read();

//echo '<pre>';
//print_r($read);
//echo '</pre>';

if (isset($read['!trap'])) {
    ?>
    <html>
        <head>

        </head>
        <body>
            <div class="container">
                <br><br><br><br><br><br><br><br>
                <div class="col-sm-offset-3 col-sm-6">
                    <div class="alert alert-danger fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><span class="glyphicon glyphicon-remove-circle"></span></button>
                        <h4><b> Gagal Tambah Filter Rules !!</b></h4>
                        <br>
                        <p>Sistem Gagal menambah Layer 7 Protocol! silakan coba kembali.</p>
                        <p>Error dengan Pesan : <?php echo $baca['!trap'][0]['message'] ?></p>
                        <br>
                        <p>
                            <a href="index.php?file=ViewLayer"> <button type="button" class="btn btn-danger">Kembali</button></a>
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
                        <h4><b>Berhasil Tambah Layer 7 Protocol !!</b></h4>
                        <br>
                        <p>Sistem berhasil menambah Layer 7 Protocol!</p>
                        <br>
                        <p>
                            <a href="index.php?file=ViewLayer"><button type="button" class="btn btn-success" >Oke</button></a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
        <script>
            $(".alert").alert('close');
        </script>
    </body>
</html>




