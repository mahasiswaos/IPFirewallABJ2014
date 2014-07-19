
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
                                <i class="glyphicon glyphicon-plus" > 
                                    <b>
                                        Filter Rules - Add
                                    </b>
                                </i>
                            </div>
                            <div class="panel-body">

                                <!--Form-->
                                <form class="form form-horizontal" action="index.php?file=SimpanFilter" method="POST">
                                    <!--enable-->
                                    <div class="form-group">
                                        <br>
                                        <label  class="col-sm-4 control-label">Enable</label>
                                        <div class="col-sm-offset-2">
                                            <input type="radio" name="disabled" value="false" checked=""> Enable
                                            <input type="radio" name="disabled" value="true"> Disable
                                        </div>
                                    </div>

                                    <!--input chain-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Chain</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="chain" name="chain">
                                                <option value="forward"  >Forward</option>
                                                <option value="input"    >Input</option>
                                                <option value="output"   >Output</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--Source Address-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">
                                            Src. Address
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="text" id="srcaddress" name="srcaddress" class="form-control" placeholder="ex.192.168.1.1" required="true">
                                        </div>
                                    </div>

                                    <!--Destination Address-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">
                                            Dest. Address
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="tel" name="dstaddress" id="dstaddress"class="form-control" placeholder="ex.192.168.1.1" required="true">
                                        </div>
                                    </div>

                                    <!--Input Protocol-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Protocol</label>
                                        <div class="col-sm-2">
                                            <select class="form-control" id="protocol" name="protocol">
                                                <option value="37">ddp</option>
                                                <option value="8">egp</option>
                                                <option value="98">encap</option>
                                                <option value="3">ggp</option>
                                                <option value="47">gre</option>
                                                <option value="20">hmp</option>
                                                <option value="1">icmp</option>
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
                                                <option value="6" selected>tcp</option>
                                                <option value="17">udp</option>
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
                                            <select class="form-control" id="srcport" name="srcport">
                                                <option value="80">
                                                    HTTP
                                                </option>
                                                <option value="20,21">
                                                    FTP
                                                </option>
                                                <option value="23"   >
                                                    TELNET
                                                </option>
                                                <option value="53"   >
                                                    DNS
                                                </option>
                                                <option value="69"   >
                                                    TFTP
                                                </option>
                                                <option value="25"   >
                                                    SMTP
                                                </option>
                                                <option value="110"   >
                                                    POP3
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--Destination Port-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Dest. Port</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="dstport" name="dstport">
                                                <option value="80">
                                                    HTTP
                                                </option>
                                                <option value="20,21">
                                                    FTP
                                                </option>
                                                <option value="23"   >
                                                    TELNET
                                                </option>
                                                <option value="53"   >
                                                    DNS
                                                </option>
                                                <option value="69"   >
                                                    TFTP
                                                </option>
                                                <option value="25"   >
                                                    SMTP
                                                </option>
                                                <option value="110"   >
                                                    POP3
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--Action-->
                                    <div class="form-group">
                                        <label  class="col-sm-4 control-label">Action</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="action" name="action">
                                                <option value="accept">accept</option>
                                                <option value="drop">drop</option>
                                                <option value="jump">jump</option>
                                                <option value="log">log</option>
                                                <option value="reject">reject</option>
                                                <option value="return">return</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--Tombol Simpan dan Reset-->
                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" class="btn btn-info">
                                                <i class="glyphicon glyphicon-floppy-save"></i>
                                                Simpan
                                            </button>
                                            <button type="reset" class="btn btn-danger">
                                                <i class="glyphicon glyphicon-remove-sign"></i>
                                                Reset
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

