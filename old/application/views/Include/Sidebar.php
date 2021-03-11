<?php
$C = $Class;
$F = $this->uri->uri_string();
$CA = 'active submenu';
$CS = 'show';
$FA = 'class="active"';
?>
        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">           
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="<?= base_url('ui/assets/img/profile.jpg') ?>" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    Hizrian
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li><a href="#profile"><span class="link-collapse">My Profile</span></a></li>
                                    <li><a href="#edit"><span class="link-collapse">Edit Profile</span></a></li>
                                    <li><a href="#settings"><span class="link-collapse">Settings</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item <?php if ($C == 'Dashboard') echo $CA; ?>">
                            <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>ภาพรวม</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse <?php if ($C == 'Dashboard') echo $CS; ?>" id="dashboard">
                                <ul class="nav nav-collapse">
                                    <li <?php if ($F == 'Dashboard/V1') echo $FA; ?>><a href="<?= base_url('Dashboard/V1') ?>"><span class="sub-item">ภาพรวม 1</span></a></li>
                                    <li <?php if ($F == 'Dashboard/V2') echo $FA; ?>><a href="<?= base_url('Dashboard/V2') ?>"><span class="sub-item">ภาพรวม 2</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">เมนูการทำงาน</h4>
                        </li>
                        <li class="nav-item <?php if ($C == 'Stat') echo $CA; ?>">
                            <a data-toggle="collapse" href="#Grp1">
                                <i class="fas fa-layer-group"></i>
                                <p>สถิติ (Summary)</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse <?php if ($C == 'Stat') echo $CS; ?>" id="Grp1">
                                <ul class="nav nav-collapse">
                                    <li <?php if ($F == 'Stat/Trash') echo $FA; ?>><a href="<?= base_url('Stat/Trash') ?>"><span class="sub-item">จำนวนถังในระบบ</span></a></li>
                                    <li <?php if ($F == 'Stat/Car') echo $FA; ?>><a href="<?= base_url('Stat/Car') ?>"><span class="sub-item">จำนวนรถในระบบ</span></a></li>
                                    <li <?php if ($F == 'Stat/Summary') echo $FA; ?>><a href="<?= base_url('Stat/Summary') ?>"><span class="sub-item">จำแนกผลรวมการจัดเก็บ</span></a></li>
                                    <li <?php if ($F == 'Stat/Maintainance') echo $FA; ?>><a href="<?= base_url('Stat/Maintainance') ?>"><span class="sub-item">รายงานผลการส่งซ่อมบำรุง</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item <?php if ($C == 'Manage') echo $CA; ?>">
                            <a data-toggle="collapse" href="#Grp2">
                                <i class="fas fa-layer-group"></i>
                                <p>บริหารการจัดเก็บ</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse <?php if ($C == 'Manage') echo $CS; ?>" id="Grp2">
                                <ul class="nav nav-collapse">
                                    <li <?php if ($F == 'Manage/Maps') echo $FA; ?>><a href="<?= base_url('Manage/Maps') ?>"><span class="sub-item">แผนที่การจัดเก็บ</span></a></li>
                                    <li <?php if ($F == 'Manage/Collect') echo $FA; ?>><a href="<?= base_url('Manage/Collect') ?>"><span class="sub-item">ตารางแสดงผลการจัดเก็บ</span></a></li>
                                    <li <?php if ($F == 'Manage/Group') echo $FA; ?>><a href="<?= base_url('Manage/Group') ?>"><span class="sub-item">จัดกลุ่มผู้ใช้และรถ</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item <?php if ($C == 'Config') echo $CA; ?>">
                            <a data-toggle="collapse" href="#Grp3">
                                <i class="fas fa-layer-group"></i>
                                <p>จัดการข้อมูลระบบ</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse <?php if ($C == 'Config') echo $CS; ?>" id="Grp3">
                                <ul class="nav nav-collapse">
                                    <li <?php if ($F == 'Config/User') echo $FA; ?>><a href="<?= base_url('Config/User') ?>"><span class="sub-item">ตารางแสดงผลผู้ใช้งาน</span></a></li>
                                    <li <?php if ($F == 'Config/Car') echo $FA; ?>><a href="<?= base_url('Config/Car') ?>"><span class="sub-item">ตารางแสดงผลข้อมูลรถ</span></a></li>
                                    <li <?php if ($F == 'Config/Trash') echo $FA; ?>><a href="<?= base_url('Config/Trash') ?>"><span class="sub-item">ตารางแสดงข้อมูลถังขยะ</span></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->