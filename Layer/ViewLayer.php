
<html>
    <head>

    </head>
    <body>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    <i class="glyphicon glyphicon-list">
                        <b>
                            Tabel Layer 7 Protocol
                        </b>
                    </i>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Regexp</th>
                            <th>Comment</th>
                            <th>Edit | Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $API->write("/ip/firewall/layer7-protocol/getall");
                        $read = $API->read();

                        foreach ($read as $data) {
                            ?>
                            <tr>
                                <td><?php echo $data['.id']; ?></td>
                                <td><?php echo $data['name']; ?></td>
                                <td><?php echo $data['regexp']; ?></td>
                                <td><?php echo $data['comment']; ?></td>
                                <td>
                                    <div class="btn btn-group-sm">
                                        <a class="btn btn-info" title="Edit" href="index.php?file=UbahLayer&id=<?php echo $data['.id']; ?>">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a class="btn btn-danger" title="Hapus" href="index.php?file=HapusLayer&id=<?php echo $data['.id']; ?>">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
        <script>
            $(".alert").alert('close');
        </script>    
    </body>
</html>



