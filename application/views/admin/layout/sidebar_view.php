

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?php echo base_url('admin');?>"><i class="fa fa-home"></i> หน้าหลัก</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-gear"></i> จัดการ<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo base_url('admin/category');?>"><i class="fa fa-wrench"> จัดการหมวดหมู่</i></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/news');?>"><i class="fa fa-wrench"> จัดการข่าว</i></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/comment');?>"><i class="fa fa-wrench"> จัดการความคิดเห็น</i></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/user');?>"><i class="fa fa-wrench"> จัดการผู้ใช้งาน</i></a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->

</nav>