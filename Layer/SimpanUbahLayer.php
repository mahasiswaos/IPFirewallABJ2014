<?php
include BASEPATH . './bootstrap.php';

/* @var $id type */
$id = $_POST['id'];
$name = $_POST['name'];
$regexp = $_POST['regexp'];
$comment = $_POST ['comment'];

$API->write("/ip/firewall/layer7-protocol/set", FALSE);
$API->write("=.id=" . $id, FALSE);
$API->write("=name=" . $name, FALSE);
$API->write("=regexp=" . $regexp, FALSE);
$API->write("=comment=" . $comment);
$read = $API->read();

//echo '<pre>';
//print_r($read);
//echo '</pre>';

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
                <a href="index.php?file=ViewLayer"> <button type="button" class="btn btn-danger">Kembali</button></a>
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
                <a href="index.php?file=ViewLayer"><button type="button" class="btn btn-success" >Oke</button></a>
            </p>
        </div>
    </div>

<?php } ?>
<!--<script>
    $(".alert").alert('close');
</script>-->

