<?php
include BASEPATH . './bootstrap.php';

/* @var $id type */
$id = $_POST['id'];
$disabled = $_POST['disabled'];
$chain = $_POST['chain'];
$srcaddress = $_POST ['srcaddress'];
$dstaddress = $_POST ['dstaddress'];
$protocol = $_POST['protocol'];
$srcport = $_POST['srcport'];
$dstport = $_POST['dstport'];
$action = $_POST['action'];

//$API->debug=true;
$API->write("/ip/firewall/mangle/set", FALSE);
$API->write("=.id=" . $id, FALSE);
$API->write("=disabled=" . $disabled, FALSE);
$API->write("=chain=" . $chain, FALSE);
$API->write("=src-address=" . $srcaddress, FALSE);
$API->write("=dst-address=" . $dstaddress, FALSE);
$API->write("=protocol=" . $protocol, FALSE);
$API->write("=src-port=" . $srcport, FALSE);
$API->write("=dst-port=" . $dstport, FALSE);
$API->write("=action=" . $action);
$read = $API->read();

echo '<pre>';
print_r($read);
echo '</pre>';

if (isset($read['!trap'])) {
    ?>
    <br><br><br><br><br><br><br><br>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="alert alert-danger fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><span class="glyphicon glyphicon-remove-circle"></span></button>
            <h4><b>Update Error !!</b></h4>
            <br>
            <p>Sistem Gagal menyimpan perubahan! silakan coba kembali.</p>
            <p>Error dengan Pesan : <?php echo $read['!trap']['0']['message'] ?>;</p>
            <br>
            <p>
                <a href="index.php?file=ViewMangle"> <button type="button" class="btn btn-danger">Kembali</button></a>
            </p>
        </div>
    </div>
<?php } else { ?>
    <br><br><br><br><br><br><br><br>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="alert alert-success fade in" >
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><span class="glyphicon glyphicon-remove-circle"></span></button>
            <h4><b>Update Succes !!</b></h4>
            <br>
            <p>Sistem berhasil menyimpan perubahan!</p>
            <br>
            <p>
                <a href="index.php?file=ViewMangle"><button type="button" class="btn btn-success" >Oke</button></a>
            </p>
        </div>
    </div>

<?php } ?>
<!--<script>
    $(".alert").alert('close');
</script>-->

