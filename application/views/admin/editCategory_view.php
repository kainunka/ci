<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Category </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-6">
            <form action="<?php echo base_url('admin/updateCategory/'.$categories->category_id); ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" required placeholder="Name Category"
                           value="<?php echo $categories->name; ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning"><i class="fa fa-plus"> Edit</i></button>
                </div>
            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->