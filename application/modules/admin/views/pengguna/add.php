<!-- Zero config.table start -->
    <div class="card col-9 ">
        
    	<div class="card-header"></div>
            <form action="" method="post" enctype="multipart/form-data">
            	<div class="col-12">

            		<div class="form-group row">
            			<label for="Nama" class="col-sm-2 col-form-label" >Nama <span class="text-danger">*</span></label>
            			<div class="col-sm-10">
	            			<input type="text" name="nama" class="form-control">
	            			<?= form_error('nama','<span class="messages text-danger">','</span>'); ?>
	            		</div>
            		</div>
            		
            		<div class="form-group row">
            			<label for="Email" class="col-sm-2 col-form-label" >Email <span class="text-danger">*</span></label>
            			<div class="col-sm-10">
	            			<input type="email" name="email" class="form-control">
	            			<?= form_error('email','<span class="messages text-danger">','</span>'); ?>
	            		</div>
            		</div>

            		<div class="form-group row">
            			<label for="Password" class="col-sm-2 col-form-label" >Password <span class="text-danger">*</span></label>
            			<div class="col-sm-10">
	            			<input type="text" name="password" class="form-control">
	            			<?= form_error('password','<span class="messages text-danger">','</span>'); ?>
	            		</div>
            		</div>

            		<div class="form-group row">
            			<label for="Level" class="col-sm-2 col-form-label" >Level <span class="text-danger">*</span></label>
            			<div class="col-sm-10">
	            			<select name="level_id" class="form-control">
            				<option value="" selected disabled>::pilih::</option>
            				<?php foreach ($level as $row): ?>
            					<option value="<?= $row->id_level; ?>" ><?= $row->nama_level; ?></option>
            				<?php endforeach ?>
            			</select>
	            		</div>
            		</div>

            		
            		<div class="form-group row">
            			<label for="Foto" class="col-sm-2 col-form-label" >Foto </label>
            			<div class="col-sm-10">
	            			<input type="file" name="foto" class="form-control">
	            		</div>
            		</div>


            		<div class="btn btn-group float-right">
            			<button class="btn btn-secondary"><i class="fa fa-reload"></i>Kembali</button>
            			<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
            		</div>
            		

            	</div>
            </form>
        
    </div>
    <!-- Zero config.table end -->