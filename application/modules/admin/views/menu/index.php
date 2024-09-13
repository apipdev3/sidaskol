
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".addMenu"><i class="fa fa-plus"></i> Tambah</a>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                          <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                              <tr>
                                <th class="text-center">#</th>
                                <th>Nama Menu</th>
                                <th>Link</th>
                                <th>Icon</th>
                                <th>Urutan</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                <?php foreach ($menu as $m): ?>
                                    
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $m->nama_menu; ?></td>
                                    <td><?= $m->link; ?></td>
                                    <td><?= $m->icon; ?></td>
                                    <td><?= $m->urutan; ?></td>
                                    <td><?= $m->is_active; ?></td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                          <a href="#" data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle">Options</a>
                                          <div class="dropdown-menu">
                                                                                    
                                            <a href="#" class="dropdown-item has-icon" data-toggle="modal" data-target=".edit<?= $m->id_menu;?>"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="#" onclick="konfirmasi('<?= $m->id_menu;?>')" class="dropdown-item has-icon text-danger"><i class="fa fa-trash"></i>
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
                </div>
            </div>
           
        </section>
      </div>

       <!-- add -->
      <div class="modal fade addMenu" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true" data-keyboard="false" data-backdrop="static">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel">Tambah Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/Menu/tambahMenu');?>" method="post">

                  <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name();?>" value="<?= $this->security->get_csrf_hash();?>" />

                  <div class="form-group">
                    <label>Modul</label>
                    <input type="text" name="modul" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Nama Menu</label>
                    <input type="text" name="nama_menu" class="form-control">
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
                    <label>No Urut</label>
                    <input type="text" name="urutan" class="form-control">
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

                  <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Save</button>
                </form>
              </div>
            </div>
          </div>
        </div>
     

     <!-- edit -->
     <?php foreach ($menu as $m): ?>
        <!-- add -->
      <div class="modal fade edit<?= $m->id_menu;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true" data-keyboard="false" data-backdrop="static">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel"><i class="fa fa-edit"></i> Edit Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/Menu/editMenu/'.$m->id_menu);?>" method="post">
                  
                  <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name();?>" value="<?= $this->security->get_csrf_hash();?>" />
                  
                  <div class="form-group">
                    <label>Modul</label>
                    <input type="text" name="modul" class="form-control" value="<?= $m->modul;?>">
                  </div>

                  <div class="form-group">
                    <label>Nama Menu</label>
                    <input type="text" name="nama_menu" class="form-control" value="<?= $m->nama_menu;?>">
                  </div>

                  <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="link" class="form-control" value="<?= $m->link;?>">
                  </div>

                  <div class="form-group">
                    <label>Icon</label>
                    <input type="text" name="icon" class="form-control" value="<?= $m->icon;?>">
                  </div>

                  <div class="form-group">
                    <label>No Urut</label>
                    <input type="text" name="urutan" class="form-control" value="<?= $m->urutan;?>">
                  </div>

                  <div class="form-group">
                    <label>Status</label>
                    <select name="is_active" class="form-control">
                      <?php foreach ($status as $s): ?>
                        <?php if ($m->is_active == $s): ?>
                          <option value="<?= $s;?>" selected><?= $s;?></option>
                        <?php else: ?>
                          <option value="<?= $s;?>"><?= $s;?></option>
                        <?php endif ?>                        
                      <?php endforeach ?>
                    </select>
                  </div>

                  <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Save</button>
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
             
             window.location.href = "<?= base_url('admin/Menu/hapusMenu/');?>"+id;

            } else {
             return false;
            }
       }
     </script>