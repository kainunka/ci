<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Category</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-6">
            <form action="<?php echo base_url('admin/create_category'); ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" required placeholder="Name Category">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"> Create</i></button>
                </div>
            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->