<?php
define("BASEPATH", getcwd());

require BASEPATH . './config.php';
require BASEPATH . './bootstrap.php';
?>

<html>
    <head>

        <script src="assets/js/bootstrap.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>



        <title>IP Firewall - MIKROTIK</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse" role="navigation">
            <!--Brand and toggle get grouped for better mobile display--> 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><i class="glyphicon glyphicon-home"></i> IP Firewall</a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <!--Button Navbar-->
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-filter"></i> Filter <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?file=TambahFilter"><i class="glyphicon glyphicon-plus"></i> Add Filter</a></li>
                            <li class="divider"></li>
                            <li><a href="index.php?file=ViewFilter"><i class="glyphicon glyphicon-list-alt"></i> View Filter</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-asterisk"></i> Mangle <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?file=TambahMangle"><i class="glyphicon glyphicon-plus"></i> Add Mangle</a></li>
                            <li class="divider"></li>
                            <li><a href="index.php?file=ViewMangle"><i class="glyphicon glyphicon-list-alt"></i> View Mangle</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Layer 7 Protocol <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?file=TambahLayer"><i class="glyphicon glyphicon-plus"></i> Add Protocol</a></li>
                            <li class="divider"></li>
                            <li><a href="index.php?file=ViewLayer"><i class="glyphicon glyphicon-list-alt"></i> View Protocol</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user">Admin</i> 

                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href=""><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </nav>
        <div>
<?php include './link.php'; ?>

        </div>

        <script>
            $(".alert").alert('close');
        </script>
        <script>
            $('.dropdown-toggle').dropdown();
        </script>

    </body>
</html>