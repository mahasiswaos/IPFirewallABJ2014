
<html>
    <head>

    </head>
    <body>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                    <i class="glyphicon glyphicon-list">
                        <b>
                            Tabel Filter Rules
                        </b>
                    </i>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Chain</th>
                            <th>Action</th>
                            <th>Src. Address</th>
                            <th>Dst. Address</th>
                            <th>Protocol</th>
                            <th>Src. Port</th>
                            <th>Dst. Port</th>
                            <th>Status</th>
                            <th>Edit | Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $API->write("/ip/firewall/filter/getall");
                        $read = $API->read();

                        foreach ($read as $data) {
                            ?>
                            <tr>
                                <td><?php echo $data['.id']; ?></td>
                                <td><?php echo $data['chain']; ?></td>
                                <td><?php echo $data['action']; ?></td>
                                <td><?php echo $data['src-address']; ?></td>
                                <td><?php echo $data['dst-address']; ?></td>
                                <td><?php echo $data['protocol']; ?></td>
                                <td><?php echo $data['src-port']; ?></td>
                                <td><?php echo $data['dst-port']; ?></td>
                                <td>
                                    <?php
                                    $disabled = $data['disabled'];
                                    if ($disabled == 'true') {
                                        echo "Disable";
                                    } else {
                                        echo "Enable";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <div class="btn btn-group-sm">
                                        <a class="btn btn-info" title="Edit" href="index.php?file=UbahFilter&id=<?php echo $data['.id']; ?>">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a class="btn btn-danger" title="Hapus" href="index.php?file=HapusFilter&id=<?php echo $data['.id']; ?>">
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
<!--        <script>
            $(".alert").alert('close');
        </script>    -->
    </body>
</html>



