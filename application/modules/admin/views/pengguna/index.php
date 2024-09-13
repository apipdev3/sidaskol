<!-- Zero config.table start -->
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('admin/Pengguna/addUser');?>" class="btn btn-primary btn-sm waves-effect"><i class="fa fa-plus"></i> Tambah Pengguna</a>


        </div>
        <div class="card-block">
            <div class="dt-responsive table-responsive">
                <table id="simpletable " class="table table-striped table-bordered nowrap">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                	<?php $no=1; foreach ($user as $row): ?>
                		
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $row->nama;?></td>
                        <td><?= $row->email;?></td>
                        <td><?= $row->nama_level;?></td>
                        <td class="text-center">
                        	<div class="btn-group">
                        		<button class="btn btn-info btn-sm"><i class="fa fa-cog" style="font-size: 16px;"></i></button>
                        		<a href="<?= base_url('admin/Pengguna/editUser/'.$row->id_user);?>" class="btn btn-warning btn-sm"><i class="fa fa-edit" style="font-size: 16px;"></i></a>
                        		<button class="btn btn-danger btn-sm"><i class="fa fa-trash" style="font-size: 16px;"></i></button>
                        	</div>
                        </td>
                    </tr>
                    
                	<?php endforeach ?>
                        
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
    <!-- Zero config.table end -->