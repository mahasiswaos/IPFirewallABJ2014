<?php
/* @var $id type */
$id = $_GET['id'];

//$API->debug = TRUE;
$API->write("/ip/firewall/layer7-protocol/print", FALSE);
$API->write("?.id=" . $id);
$read = $API->read();

//echo '<pre>';
//print_r($read);
//echo '</pre>';
?>
<html>
    <head>

        <title>IP Firewall - Layer 7 Protocol</title>
    </head>
    <body>
        <div class="container">
            <div class="col-sm-offset-2 col-sm-12">
                <div class="col-sm-8">
                    <div class="panel-body">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <i class="glyphicon glyphicon-edit" > 
                                    <b>
                                        Layer 7 Protocol - Updating
                                    </b>
                                </i>
                            </div>
                            <div class="panel-body">

                                <!--Form-->
                                <form class="form form-horizontal" action="index.php?file=SimpanUbahLayer" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $read[0]['.id']; ?>">
                                    <!--Name-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">
                                            Name
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="text" id="name" name="name" value="<?php echo $read[0]['name']; ?>" class="form-control" required="true">
                                        </div>
                                    </div>

                                    <!--Regexp-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">
                                            Regexp
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="regexp" value="<?php echo $read[0]['regexp']; ?>" id="regexp" class="form-control" required="true">
                                        </div>
                                    </div>

                                    <!--Comment-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">
                                            Comment
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="comment" value="<?php echo $read[0]['comment']; ?>" id="comment" class="form-control">
                                        </div>
                                    </div>

                                    <!--Tombol Simpan dan Reset-->
                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" class="btn btn-info">
                                                <i class="glyphicon glyphicon-floppy-saved"></i>
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

