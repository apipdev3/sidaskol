<div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">

                             <?php
                                // data main menu
                                $idlevel   =1;//$this->session->userdata['id_level'];
                                $main_menu =$this->db->select('b.nama_menu,b.icon,b.link,b.id_menu')
                                                    ->join('tbl_menu b', 'a.id_menu=b.id_menu')
                                                    ->join('tbl_userlevel c', 'a.id_level=c.id_level' )
                                                    ->where('a.id_level',$idlevel)
                                                    ->where('a.view_level','Y')
                                                    ->order_by('urutan ASC')
                                                    ->get('tbl_akses_menu a');

                                foreach ($main_menu->result() as $main) {

                                  $idlevel  = 1;//$this->session->userdata['id_level'];
                                  
                                  $sub_menu = $this->db->join('tbl_submenu b','a.id_submenu=b.id_submenu')
                                                          ->where('a.id_level', $idlevel)
                                                          ->where('b.id_menu', $main->id_menu)
                                                          ->where('a.view_level', 'Y')
                                                          ->order_by('b.id_submenu', 'ASC')
                                                          ->get('tbl_akses_submenu a');
                                 
                                  if ($sub_menu->num_rows() > 0) {
                                    $segmen   = $this->uri->segment(1);
                                    $submenu = $this->db->select('link')
                                                        ->where('id_menu', $main->id_menu)
                                                        ->where('link', $segmen)
                                                        ->get('tbl_submenu');
                                    $link='';
                                    if ($submenu->num_rows() > 0) {
                                      $sub = $submenu->row();
                                      $link = $sub->link;
                                    }
                            ?>

                                <li <?= $this->uri->segment(1).'/'.$this->uri->segment(2) == $link ? 'class="pcoded-hasmenu active pcoded-trigger"' : 'class="pcoded-hasmenu"' ?>>
                                    <a href="<?= $main->link;?>">
                                        <span class="pcoded-micon"><i class="fa <?=$main->icon?>"></i></span>
                                        <span class="pcoded-mtext"><?= $main->nama_menu; ?></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <?php foreach ($sub_menu->result() as $sub): ?>

                                        <li class="">
                                            <a href="<?= base_url().$sub->link;?>">
                                                <span class="pcoded-mtext"><?= $sub->nama_submenu; ?></span>
                                            </a>
                                        </li>

                                        <?php endforeach; ?> 
                                       
                                    </ul>
                                </li>

                                <?php }else{ ?>

                                     <li <?= $this->uri->segment(1).'/'.$this->uri->segment(2) == $main->link ? 'class="active"' : 'class=""' ?>>
                                        <a href="<?= base_url().$main->link;?>" >
                                            <span class="pcoded-micon"><i class="fa <?=$main->icon?>"></i></span>
                                            <span class="pcoded-mtext"><?= $main->nama_menu; ?></span>
                                        </a>
                                    </li>
                                                       
                                <?php }} ?>
                                
                            </ul>
                          
                            <div class="pcoded-navigatio-lavel">Setting</div>


                            <ul class="pcoded-item pcoded-left-item">

                                

                                <li class="pcoded-hasmenu">
                                    <a href="#">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Pengaturan</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="<?= base_url('admin/Pengguna');?>">
                                                <span class="pcoded-mtext">Pengguna</span>
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="<?= base_url('admin/Menu');?>">
                                                <span class="pcoded-mtext">Menu</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?= base_url('admin/Submenu');?>">
                                                <span class="pcoded-mtext">Sub Menu</span>
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="<?= base_url('admin/Akses');?>">
                                                <span class="pcoded-mtext">Hak Akses</span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>

                                
                                <li class="">
                                    <a href="<?= base_url('admin/Pengguna');?>">
                                        <span class="pcoded-micon"><i class="fa fa-sign-out"></i></span>
                                        <span class="pcoded-mtext">Keluar</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4><?= $title; ?></h4>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="<?= base_url('akademik/Dashboard');?>"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!"><?= $title; ?></a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->
                                <div class="page-body">

