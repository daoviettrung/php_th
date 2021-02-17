
<div id="wrapper">

    <!-- Navigation -->

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <!-- /.col-lg-6 -->
                <div style="width: 250px;margin-left: 300px" class="col-lg-6">
                    <div  class="panel panel-default">
                        <div style="text-align: center" class="panel-heading">
                            Information admin
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <p> Name : <?php echo $_SESSION['user']['username'] ?></p>
                            <p> Level : <?php if($_SESSION['user']['level']==0)
                                {
                                    echo "Member";
                                }
                                else{
                                    echo "Admin";
                                }
                                ?></p>
                            <!-- Tab panes -->
                            <div class="tab-content">
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>