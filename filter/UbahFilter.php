<?php
/* @var $id type */
$id = $_GET['id'];

//$API->debug = TRUE;
$API->write("/ip/firewall/filter/print", FALSE);
$API->write("?.id=" . $id);
$read = $API->read();

//echo '<pre>';
//print_r($read);
//echo '</pre>';
?>

<html>
    <head>

        <title>IP Firewall - Filter Rules</title>
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
                                        Filter Rules - Updating
                                    </b>
                                </i>
                            </div>
                            <div class="panel-body">

                                <!--Form-->
                                <form class="form form-horizontal" action="index.php?file=SimpanUbahFilter" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $read[0]['.id']; ?>">
                                    <!--enable-->
                                    <div class="form-group">
                                        <br>
                                        <label  class="col-sm-4 control-label">Enable</label>
                                        <div class="col-sm-offset-2 ">
                                            <?php
                                            $disabled = $read[0]['disabled'];
                                            ?>
                                            <input type="radio" name="disabled" value="false" <?php
                                            if ($disabled == 'false') {
                                                echo "checked";
                                            }
                                            ?> > Enable
                                            <input type="radio" name="disabled" value="true" <?php
                                            if ($disabled == 'true') {
                                                echo "checked";
                                            }
                                            ?> > Disable
                                        </div>

                                    </div>

                                    <!--input chain-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Chain</label>
                                        <div class="col-sm-3">
                                            <?php $chain = $read[0]['chain']; ?>
                                            <select class="form-control" id="chain" name="chain">
                                                <option value="forward" <?php
                                                if ($chain == 'forward') {
                                                    echo "selected";
                                                }
                                                ?> >Forward</option>
                                                <option value="input"  <?php
                                                if ($chain == 'input') {
                                                    echo "selected";
                                                }
                                                ?>  >Input</option>
                                                <option value="output" <?php
                                                if ($chain == 'output') {
                                                    echo "selected";
                                                }
                                                ?>  >Output</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--Source Address-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">
                                            Src. Address
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="text" id="srcaddress" name="srcaddress" class="form-control" placeholder="ex.192.168.1.1" required="true" value="<?php echo $read[0]['src-address']; ?>">
                                        </div>
                                    </div>

                                    <!--Destination Address-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">
                                            Dest. Address
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="tel" name="dstaddress" id="dstaddress"class="form-control" placeholder="ex.192.168.1.1" required="true" value="<?php echo $read[0]['dst-address']; ?>">
                                        </div>
                                    </div>

                                    <!--Input Protocol-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Protocol</label>
                                        <div class="col-sm-2">
                                            <?php $protocol = $read[0]['protocol'] ?>
                                            <select class="form-control" id="protocol" name="protocol">
                                                <option value="37" <?php
                                                if ($protocol == 'ddp') {
                                                    echo "selected";
                                                }
                                                ?> >ddp</option>
                                                <option value="8" <?php
                                                if ($protocol == 'egp') {
                                                    echo "selected";
                                                }
                                                ?>>egp</option>
                                                <option value="98">encap</option>
                                                <option value="3">ggp</option>
                                                <option value="47">gre</option>
                                                <option value="20">hmp</option>
                                                
                                                <option value="1" <?php
                                                if ($protocol == 'icmp') {
                                                    echo "selected";
                                                }
                                                ?>>icmp</option>
                                                <option value="39">idpr-cmtp</option>
                                                <option value="2">igmp</option>
                                                <option value="4">ip-encap</option>
                                                <option value="94">ipip</option>
                                                <option value="51">ipsec-ah</option>
                                                <option value="50">ipsec-esp</option>
                                                <option value="29">iso-tp4</option>
                                                <option value="89">ospf</option>
                                                <option value="12">pup</option>
                                                <option value="27">rdp</option>
                                                <option value="73">rspf</option>
                                                <option value="5">st</option>
                                                <option value="6" <?php
                                                if ($protocol == 'tcp') {
                                                    echo "selected";
                                                }
                                                ?> >tcp</option>
                                                <option value="17" <?php
                                                if ($protocol == 'udp') {
                                                    echo "selected";
                                                }
                                                ?> >udp</option>
                                                <option value="81">vmtp</option>
                                                <option value="112">vrrp</option>
                                                <option value="22">xns-idp</option>
                                                <option value="36">xtp</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--Source Port-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Src. Port</label>
                                        <div class="col-sm-3">
                                            <?php $srcport = $read[0]['src-port']; ?>
                                            <select class="form-control" id="srcport" name="srcport">
                                                <option value="80" <?php
                                                if ($srcport == '80') {
                                                    echo "selected";
                                                }
                                                ?> >HTTP</option>
                                                
                                                <option value="20,21" <?php
                                                if ($srcport == '20,21') {
                                                    echo "selected";
                                                }
                                                ?> >FTP</option>
                                                
                                                <option value="23" <?php
                                                if ($srcport == '23') {
                                                    echo "selected";
                                                }
                                                ?> >TELNET</option>
                                                
                                                <option value="53" <?php
                                                if ($srcport == '53') {
                                                    echo "selected";
                                                }
                                                ?> >DNS</option>
                                                
                                                <option value="69" <?php
                                                if ($srcport == '69') {
                                                    echo "selected";
                                                }
                                                ?> >TFTP</option>
                                                
                                                
                                                <option value="25" <?php
                                                if ($srcport == '25') {
                                                    echo "selected";
                                                }
                                                ?> >SMTP</option>
                                                
                                                <option value="110" <?php
                                                if ($srcport == '110') {
                                                    echo "selected";
                                                }
                                                ?> >POP3</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <!--Destination Port-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Dest. Port</label>
                                        <div class="col-sm-3">
                                            <?php $dstport = $read[0]['dst-port']; ?>
                                            <select class="form-control" id="dstport" name="dstport">
                                                <option value="80" <?php
                                                if ($dstport == '80') {
                                                    echo "selected";
                                                }
                                                ?> >HTTP</option>
                                                
                                                <option value="20,21" <?php
                                                if ($dstport == '20,21') {
                                                    echo "selected";
                                                }
                                                ?> >FTP</option>
                                                
                                                <option value="23" <?php
                                                if ($dstport == '23') {
                                                    echo "selected";
                                                }
                                                ?> >TELNET</option>
                                                
                                                <option value="53" <?php
                                                if ($dstport == '53') {
                                                    echo "selected";
                                                }
                                                ?> >DNS</option>
                                                
                                                <option value="69" <?php
                                                if ($dstport == '69') {
                                                    echo "selected";
                                                }
                                                ?> >TFTP</option>
                                                
                                                
                                                <option value="25" <?php
                                                if ($dstport == '25') {
                                                    echo "selected";
                                                }
                                                ?> >SMTP</option>
                                                
                                                <option value="110" <?php
                                                if ($dstport == '110') {
                                                    echo "selected";
                                                }
                                                ?> >POP3</option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <!--Action-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Action</label>
                                        <div class="col-sm-3">
                                            <?php $action = $read[0]['action']; ?>
                                            <select class="form-control" id="action" name="action">
                                                <option value="accept" <?php
                                                if ($action == 'accept') {
                                                    echo "selected";
                                                }
                                                ?> >ACCEPT</option>
                                                
                                                <option value="drop" <?php
                                                if ($action == 'drop') {
                                                    echo "selected";
                                                }
                                                ?> >DROP</option>
                                                
                                                <option value="jump" <?php
                                                if ($action == 'jump') {
                                                    echo "selected";
                                                }
                                                ?> >JUMP</option>
                                                
                                                <option value="log" <?php
                                                if ($action == 'log') {
                                                    echo "selected";
                                                }
                                                ?> >LOG</option>
                                                
                                                <option value="reject" <?php
                                                if ($action == 'reject') {
                                                    echo "selected";
                                                }
                                                ?> >REJECT</option>
                                                
                                                <option value="return" <?php
                                                if ($action == 'return') {
                                                    echo "selected";
                                                }
                                                ?> >RETURN</option>
                                                
                                            </select>
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

