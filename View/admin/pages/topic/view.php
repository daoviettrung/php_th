<link rel="stylesheet" type="text/css"
      href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
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
            <table id="example" class="display" style="width:100%">
                <thead>

                <tr>
                    <th>Id topic</th>
                    <th>Name topic</th>
                    <th>Slug</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($data['all'] as $a):
                ?>
                <tr>

                    <td><?=$a['id']?></td>
                    <td><?=$a['name']?></td>
                    <td><?=$a['slug']?></td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            <!-- day la cho chen bang vao -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>

</script>