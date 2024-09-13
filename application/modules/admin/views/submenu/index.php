<div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".addSubMenu"><i class="fa fa-plus"></i> Tambah</a>
      </div>
      <div class="card-body">
          <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th>Nama SubMenu</th>
                <th>Link</th>
                <th>Icon</th>
                <th>Menu</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                <?php foreach ($sub_menu as $sm): ?>
                    
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $sm->nama_submenu; ?></td>
                    <td><?= $sm->link; ?></td>
                    <td><?= $sm->icon; ?></td>
                    <td><?= $sm->nama_menu; ?></td>
                    <td><?= $sm->is_active; ?></td>
                    <td class="text-center">
                        <div class="dropdown">
                          <a href="#" data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle">Options</a>
                          <div class="dropdown-menu">
                                                           
                            <a href="#" class="dropdown-item has-icon" data-toggle="modal" data-target=".edit<?= $sm->id_submenu;?>"><i class="fa fa-edit"></i> Edit</a>
                            
                            <a href="#" onclick="konfirmasi('<?= $sm->id_submenu;?>')" class="dropdown-item has-icon text-danger"><i class="fa fa-trash"></i>
                              Delete</a>
                          </div>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- add -->
      <div class="modal fade addSubMenu" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true" data-keyboard="false" data-backdrop="static">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel">Tambah Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/Submenu/tambah');?>" method="post">

                  <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name();?>" value="<?= $this->security->get_csrf_hash();?>" />

                  <div class="form-group">
                    <label>Nama Sub Menu</label>
                    <input type="text" name="nama_submenu" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Icon</label>
                    <input type="text" name="icon" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Menu</label>
                    <select name="id_menu" class="form-control" id="">
                    	<option value="" selected disabled>Menu</option>
                      	<?php foreach ($menu as $m): ?>
                        <option value="<?= $m->id_menu;?>"><?= $m->nama_menu;?></option>
                      	<?php endforeach ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Status</label>
                    <select name="is_active" class="form-control">
                      <option value="" selected disabled>Status</option>
                      <?php foreach ($status as $s): ?>
                        <option value="<?= $s;?>"><?= $s;?></option>
                      <?php endforeach ?>
                    </select>
                  </div>

                  <button class="btn btn-success float-right"><i class="fa fa-save"></i> Save</button>
                </form>
              </div>
            </div>
          </div>
        </div>
     

     <!-- edit -->
     <?php foreach ($sub_menu as $sm): ?>
        <!-- add -->
      <div class="modal fade edit<?= $sm->id_submenu;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel"><i class="fa fa-edit"></i> Edit Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/Submenu/edit/'.$sm->id_submenu);?>" method="post">
                  
                  <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name();?>" value="<?= $this->security->get_csrf_hash();?>" />

                  <div class="form-group">
                    <label>Nama Submenu</label>
                    <input type="text" name="nama_submenu" class="form-control" value="<?= $sm->nama_submenu;?>">
                  </div>

                  <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" class="form-control" value="<?= $sm->link;?>">
                  </div>

                  <div class="form-group">
                    <label>Icon</label>
                    <input type="text" name="icon" class="form-control" value="<?= $sm->icon;?>">
                  </div>

                  <div class="form-group">
                    <label>Menu</label>
                    <select name="id_menu" class="form-control" id="">
                    	<option value="" selected disabled>Menu</option>
                      	<?php foreach ($menu as $m): ?>
                      	<?php if ($m->id_menu == $sm->id_menu): ?>
                      		<option value="<?= $m->id_menu;?>" selected><?= $m->nama_menu;?></option>
                      	<?php else: ?>
                      		<option value="<?= $m->id_menu;?>"><?= $m->nama_menu;?></option>
                      	<?php endif ?>                        
                      	<?php endforeach ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Status</label>
                    <select name="is_active" class="form-control">
                      <?php foreach ($status as $s): ?>
                        <?php if ($sm->is_active == $s): ?>
                          <option value="<?= $s;?>" selected><?= $s;?></option>
                        <?php else: ?>
                          <option value="<?= $s;?>"><?= $s;?></option>
                        <?php endif ?>                        
                      <?php endforeach ?>
                    </select>
                  </div>

                  <button class="btn btn-success float-right"><i class="fa fa-save"></i> Save</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        
     <?php endforeach ?>


     <script>
       function konfirmasi(id){

        //confrim
          var result = confirm("Apakah anda yakin ingin menghapus data ini?");
            if (result==true) {
             
             window.location.href = "<?= base_url('admin/Submenu/hapus/');?>"+id;

            } else {
             return false;
            }
       }
     </script>