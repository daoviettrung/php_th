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
            <!-- day la cho chen bang vao -->
            <div class="panel-body">
                <form role="form" method="post" action="postAddTopic">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label>Name</label>
                                <input style="width: 300px" class="form-control" id="name" onkeyup="ChangeToSlug();"
                                       name="name" required>
                            </div>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label>Slug</label>
                                <input style="width: 300px" class="form-control" class="form-control" id="slug"
                                       name="slug" "
                                       required>
                            </div>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <button type="submit" class="btn btn-default">Add
                    </button>

                </form>
                <!-- /.row (nested) -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>