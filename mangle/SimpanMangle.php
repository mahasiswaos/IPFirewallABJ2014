<?php
require BASEPATH. '../bootstrap.php';

$disabled = $_POST['disabled'];
$chain = $_POST['chain'];
$srcaddress = $_POST ['srcaddress'];
$dstaddress = $_POST ['dstaddress'];
$protocol = $_POST['protocol'];
$srcport = $_POST['srcport'];
$dstport = $_POST['dstport'];
$action = $_POST['action'];

$API->write("/ip/firewall/mangle/add", FALSE);
$API->write("=disabled=" . $disabled, FALSE);
$API->write("=chain=" . $chain, FALSE);
$API->write("=src-address=" . $srcaddress, FALSE);
$API->write("=dst-address=" . $dstaddress, FALSE);
$API->write("=protocol=" . $protocol, FALSE);
$API->write("=src-port=" . $srcport, FALSE);
$API->write("=dst-port=" . $dstport, FALSE);
$API->write("=action=" . $action);
$baca = $API->read();

//echo '<pre>';
//print_r($baca);
//echo '</pre>';
if (isset($baca['!trap'])) {
    ?>
    <html>
        <head>
            
        </head>
        <div class="container">
            <br><br><br><br><br><br><br><br>
            <div class="col-sm-offset-3 col-sm-6">
                <div class="alert alert-danger fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><span class="glyphicon glyphicon-remove-circle"></span></button>
                    <h4><b> Gagal Tambah Mangle Rules !!</b></h4>
                    <br>
                    <p>Sistem Gagal menambah Mangle Rules! silakan coba kembali.</p>
                    <p>Error dengan Pesan : <?php echo $baca['!trap'][0]['message'] ?></p>
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
                    <h4><b>Berhasil Tambah Mangle Rules !!</b></h4>
                    <br>
                    <p>Sistem berhasil menambah Mangle Rules!</p>
                    <br>
                    <p>
                        <a href="index.php?file=ViewMangle"><button type="button" class="btn btn-success" >Oke</button></a>
                    </p>
                </div>
            </div>
        </div>
    <?php } ?>
        <script>
                $(".alert").alert('close');
            </script>
</html>




