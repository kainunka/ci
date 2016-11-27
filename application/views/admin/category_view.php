<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category Management</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="text-right">
            <a href="<?php echo base_url('admin/addCategory'); ?>" class="btn btn-info"><i class="fa fa-plus"></i> Add
                Category</a>
        </div>
        <p></p>
        <table class="table">
            <tr>
                <th>#</th>
                <th>หมวดหมู่</th>
                <th>จัดการ</th>
            </tr>
            <?php
            if ($categories->num_rows() > 0) {
                foreach ($categories->result() as $category) { ?>
                <tr>
                    <td>1</td>
                    <td><?php echo $category->name; ?></td>
                    <td>
                        <a href="<?php echo base_url('admin/editCategory/' . $category->category_id);?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo base_url('admin/deleteCategory/' . $category->category_id); ?>" class="btn btn-danger">Trash</a>
                    </td>
                </tr>
            <?php }
            } else { ?>
                <tr>
                    <td colspan="3">============== No Data ===============</td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->