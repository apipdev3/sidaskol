<div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".addLevel"><i class="fa fa-plus"></i> Tambah Level</a>
        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".addAkses"><i class="fa fa-key"></i> Tambah Akses</a>
      </div>
      <div class="card-body">
          <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th>Nama Level</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                <?php foreach ($akses as $row): ?>
                    
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->nama_level; ?></td>
                    <td class="text-center">
                        <div class="dropdown">
                          <a href="#" data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle">Options</a>
                          <div class="dropdown-menu">
                            <a href="#" class="dropdown-item has-icon" data-toggle="modal" data-target=".akses<?= $row->id_level;?>"><i class="fa fa-key"></i>Ubah Akses</a>
                                                         
                            <a href="#" class="dropdown-item has-icon" data-toggle="modal" data-target=".edit<?= $row->id_level;?>"><i class="fa fa-edit"></i> Edit</a>
                            
                            <a href="#" onclick="konfirmasi('<?= $row->id_level;?>')" class="dropdown-item has-icon text-danger"><i class="fa fa-trash"></i>
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

   <!-- addLevel-->
      <div class="modal fade addLevel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel"><i class="fa fa-edit"></i> Edit <?= $title;?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/Akses/addlevel');?>" method="post">
                  
                  <div class="form-group">
                    <label>Nama Level</label>
                    <input type="text" name="nama_level" class="form-control" >
                  </div>

                  <button class="btn btn-success float-right"><i class="fa fa-save"></i> Save</button>
                </form>
              </div>
            </div>
          </div>
        </div>



  <!-- add  akses-->
      <div class="modal fade addAkses" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true" data-keyboard="false" data-backdrop="static">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel">Tambah <?= $title;?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/Akses/addAkses');?>" method="post">

                  <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name();?>" value="<?= $this->security->get_csrf_hash();?>" />

                  <div class="form-group">
                    <label>Nama Level</label>
                    <select name="id_level" class="form-control">
                    	<option value="" selected disabled>::Level::</option>
                    	<?php foreach ($akses as $row): ?>
                    	<option value="<?= $row->id_level;?>"><?= $row->nama_level;?></option>
                    	<?php endforeach ?>
                    </select>
                  </div>

                  <div class="table-responsive">
	                <table class="table table-bordered">
	                          <thead class="bg-primary">
	                          <tr>
	                              <th class="text-white text-center">#</th>
	                              <th class="text-white text-center">Main Menu</th>
	                              <th class="text-white text-center">View</th>
	                              <th class="text-white text-center">Add</th>
	                              <th class="text-white text-center">Edit</th>
	                              <th class="text-white text-center">Delete</th>

	                          </tr>
	                          </thead>
	                          <tbody>
	                          <?php 
	                            $a_menu = $this->db->select('*')
	                                              ->from('tbl_menu')
	                                              ->get()->result();
	                          ?>
	                          <?php $no=1; foreach ($a_menu as $am): ?>
	                          <?php $a_submenu = $this->db->select('*')
					                                  ->from('tbl_submenu')
					                                  ->where('id_menu',$am->id_menu)
					                         
		                                   ->get()->result();
	                           ?>                         
	                               
	                              <tr class="bg-light">
	                                  <td><?= $no++;?></td>
	                                  <td><?= $am->nama_menu; ?></td>
	                                  <td class="text-center">
	                                  	<input type="hidden" name="id_menu[]" value="<?= $am->id_menu;?>">
	                                    <select name="view_menu[]">
	                                    	<?php foreach ($status as $s): ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    	<?php endforeach ?>
	                                    </select>
	                                  </td>
	                                  <td class="text-center">
	                                   	<select name="add_menu[]">
	                                    	<?php foreach ($status as $s): ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    	<?php endforeach ?>
	                                    </select>
	                                  </td>
	                                  <td class="text-center">
	                                   	<select name="edit_menu[]">
	                                    	<?php foreach ($status as $s): ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    	<?php endforeach ?>
	                                    </select>
	                                  </td>
	                                  <td class="text-center">
	                                   	<select name="delete_menu[]">
	                                    	<?php foreach ($status as $s): ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    	<?php endforeach ?>
	                                    </select>
	                                  </td>                                  

	                              </tr>

	                              <?php foreach ($a_submenu as $sm): ?>
	                                  <tr>
                                      	<td></td>
                                      	<td><?= $sm->nama_submenu;?></td>
                                      	
	                                 	<td class="text-center">
	                                 		<input type="hidden" name="id_submenu[]" value="<?= $sm->id_menu;?>">
	                                    	<select name="view_sub[]">
	                                    	<?php foreach ($status as $s): ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    	<?php endforeach ?>
	                                    </select>
	                                  	</td>
		                                <td class="text-center">
		                                   	<select name="add_sub[]">
	                                    	<?php foreach ($status as $s): ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    	<?php endforeach ?>
	                                    </select>
		                                </td>
		                                <td class="text-center">
		                                   	<select name="edit_sub[]">
		                                    	<?php foreach ($status as $s): ?>
		                                    		<option value="<?= $s;?>"><?= $s;?></option>
		                                    	<?php endforeach ?>
		                                    </select>
		                                </td>
		                                <td class="text-center">
		                                   	<select name="delete_sub[]">
	                                    	<?php foreach ($status as $s): ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    	<?php endforeach ?>
	                                    </select>
		                                </td>
	                                  
	                                  </tr>
	                              <?php endforeach ?>

	                           <?php endforeach ?>
	                          </tbody>
	                      </table>
	                    </div>


                  <button class="btn btn-success float-right"><i class="fa fa-save"></i> Save</button>
                </form>
              </div>
            </div>
          </div>
        </div>
     

     <!-- edit -->
     <?php foreach ($akses as $row): ?>
        <!-- update-->
      <div class="modal fade edit<?= $row->id_level;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel"><i class="fa fa-edit"></i> Edit <?= $title;?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/Akses/editLevel/'.$row->id_level);?>" method="post">
                  
                  <div class="form-group">
                    <label>Nama Level</label>
                    <input type="text" name="nama_level" class="form-control" value="<?= $row->nama_level;?>">
                  </div>

                  <button class="btn btn-success float-right"><i class="fa fa-save"></i> Save</button>
                </form>
              </div>
            </div>
          </div>
        </div>


      <!--edit akses-->
      <div class="modal fade akses<?= $row->id_level;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myLargeModalLabel"><i class="fa fa-edit"></i>  <?= $title;?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/Akses/editAkses/'.$row->id_level);?>" method="post">
                  
                  <div class="form-group">
                    <label>Nama Level</label>
                    <input type="text" name="nama_level" class="form-control" disabled value="<?= $row->nama_level;?>">
                    
                  </div>

                  <div class="table-responsive">
	                <table class="table table-bordered">
	                          <thead class="bg-primary">
	                          <tr>
	                              <th class="text-white text-center">#</th>
	                              <th class="text-white text-center">Main Menu</th>
	                              <th class="text-white text-center">View</th>
	                              <th class="text-white text-center">Add</th>
	                              <th class="text-white text-center">Edit</th>
	                              <th class="text-white text-center">Delete</th>

	                          </tr>
	                          </thead>
	                          <tbody>
	                          <?php 
	                            $a_menu = $this->db->select('*')
	                                              ->from('tbl_akses_menu a')
	                                              ->join('tbl_menu b','a.id_menu=b.id_menu')
	                                              ->where('a.id_level',$row->id_level)
	                                              ->get()->result();
	                           ?>
	                          <?php $no=1; foreach ($a_menu as $am): ?>
	                          <?php 
	                          $a_submenu = $this->db->select('*')
				                                  ->from('tbl_akses_submenu a')
				                                  ->join('tbl_submenu b','a.id_submenu=b.id_submenu')
				                                  ->join('tbl_menu c','c.id_menu=b.id_menu')
				                                  ->where('a.id_level',$row->id_level)
				                                  ->where('b.id_menu',$am->id_menu)
				                                  ->get()->result();
	                           ?>                         
	                               
	                              <tr class="bg-light">
	                                  <td><?= $no++;?></td>
	                                  <td><?= $am->nama_menu; ?></td>
	                                  <td class="text-center">
	                                  	<input type="hidden" name="id_menu[]" value="<?= $am->id_menu; ?>">
                                        <select name="view_menu[]">
	                                    	<?php foreach ($status as $s): ?>
	                                  			<?php if ($am->view_level== $s):?>
	                                    		<option value="<?= $s;?>" selected><?= $s;?></option>
	                                    		<?php else: ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    		<?php endif ?>
	                                    	<?php endforeach ?>
	                                    </select>                    
	                                        
	                                  </td>
	                                  <td class="text-center">
	                                   	<select name="add_menu[]">
	                                    	<?php foreach ($status as $s): ?>
	                                  			<?php if ($am->add_level== $s):?>
	                                    		<option value="<?= $s;?>" selected><?= $s;?></option>
	                                    		<?php else: ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    		<?php endif ?>
	                                    	<?php endforeach ?>
	                                    </select>
	                                   </td>
	                                  <td class="text-center">
	                                   <select name="edit_menu[]">
	                                    	<?php foreach ($status as $s): ?>
	                                  			<?php if ($am->edit_level== $s):?>
	                                    		<option value="<?= $s;?>" selected><?= $s;?></option>
	                                    		<?php else: ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    		<?php endif ?>
	                                    	<?php endforeach ?>
	                                    </select>
	                                  </td>
	                                  <td class="text-center">
	                                   <select name="delete_menu[]">
	                                    	<?php foreach ($status as $s): ?>
	                                  			<?php if ($am->delete_level== $s):?>
	                                    		<option value="<?= $s;?>" selected><?= $s;?></option>
	                                    		<?php else: ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    		<?php endif ?>
	                                    	<?php endforeach ?>
	                                    </select>
	                                   </td>
	                                  

	                              </tr>

	                              <?php foreach ($a_submenu as $sm): ?>
	                                  <tr>
	                                      <td></td>
	                                      <td>=> <?= $sm->nama_submenu;?></td>
	                                      <td class="text-center">
	                                      	<input type="hidden" name="id_submenu[]" value="<?= $sm->id_submenu; ?>">
	                                       <select name="view_sub[]">
	                                    	<?php foreach ($status as $s): ?>
	                                  			<?php if ($sm->view_level== $s):?>
	                                    		<option value="<?= $s;?>" selected><?= $s;?></option>
	                                    		<?php else: ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    		<?php endif ?>
	                                    	<?php endforeach ?>
	                                    </select> 
	                                  </td>
	                                 <td class="text-center">
	                                   <select name="add_sub[]">
	                                    	<?php foreach ($status as $s): ?>
	                                  			<?php if ($sm->add_level== $s):?>
	                                    		<option value="<?= $s;?>" selected><?= $s;?></option>
	                                    		<?php else: ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    		<?php endif ?>
	                                    	<?php endforeach ?>
	                                    </select>
	                                  </td>

	                                  <td class="text-center">
	                                   	<select name="edit_sub[]">
	                                    	<?php foreach ($status as $s): ?>
	                                  			<?php if ($sm->edit_level== $s):?>
	                                    		<option value="<?= $s;?>" selected><?= $s;?></option>
	                                    		<?php else: ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    		<?php endif ?>
	                                    	<?php endforeach ?>
	                                    </select>
	                                  </td>

	                                  <td class="text-center">

	                                  	<select name="delete_sub[]">
	                                    	<?php foreach ($status as $s): ?>
	                                  			<?php if ($sm->delete_level== $s):?>
	                                    		<option value="<?= $s;?>" selected><?= $s;?></option>
	                                    		<?php else: ?>
	                                    		<option value="<?= $s;?>"><?= $s;?></option>
	                                    		<?php endif ?>
	                                    	<?php endforeach ?>
	                                    </select>
	                                   		
	                                  </td>
	                                  
	                                  </tr>
	                              <?php endforeach ?>

	                           <?php endforeach ?>
	                          </tbody>
	                      </table>
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
         
         window.location.href = "<?= base_url('admin/Akses/hapusLevel/');?>"+id;

        } else {
         return false;
        }
   }
 </script>