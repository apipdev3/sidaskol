<!-- Zero config.table start -->
<div id="pesan"></div>
<form id="myform" class="myform" method="post" name="myform">
    <div class="card">
        <div class="card-header">
            <a href="#" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#tambah-peserta"><i class="fa fa-plus"></i> Tambah Peserta Didik</a>
            <button type="button" class="btn btn-info" onclick="ubah()"><i class="fa fa-edit"></i> Ubah</button>
            <button type="button" class="btn btn-danger" onclick="hapus()"><i class="fa fa-trash"></i> Hapus</button>


        </div>
        <div class="card-block">
            <div class="dt-responsive table-responsive">
                <table id="table" class="table table-striped table-bordered nowrap">
                    <thead>
                    <tr>
                    	<th class="text-center">
                    		<input type="checkbox" onclick="toggle(this);" />
                    	</th>
                        <th class="text-center">No</th>
                        <th>NIS</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>JK</th>
                        <th>Tempat Lahir</th>
                        <th>Tgl Lahir</th>
                        <th>Alamat</th>
                        <th>Ibu</th>
                        <th>Asal Sekolah</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                	
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
   </form>
    <!-- Zero config.table end -->

     <!-- tambah modal peserta-->

    <div class="modal fade" id="tambah-peserta" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title ">Tambah Data Peserta Didik</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                	<div class="row">
                		<div class="col-md-8">

                			
					<fieldset class="form-group border p-2">
                        <legend class="w-auto px-2">User's Credentials</legend>

                			<div class="form-group row">
                			<label for="nisn" class="col-sm-3 col-form-label" >NISN </label>
				        			<div class="col-sm-8">
				            			<input type="number" name="nisn" class="form-control">
				            		</div>
			            	  </div>

			            	  <div class="form-group row">
			        			<label for="nik" class="col-sm-3 col-form-label" >NIK </label>
				        			<div class="col-sm-8">
				            			<input type="number" name="nik" class="form-control">
				            		</div>
			            	  </div>

			            	</legend>
			          	</fieldset>



			                  <div class="form-group row">
			        			<label for="Nama" class="col-sm-3 col-form-label" >Nama Lengkap </label>
				        			<div class="col-sm-8">
				            			<input type="text" name="nama_peserta" class="form-control">
				            		</div>
			            	  </div>

			            		<div class="form-group row">
			        			<label for="tempat_lahir" class="col-sm-3 col-form-label" >Tempat Lahir</label>
				        			<div class="col-sm-8">
				            			<input type="text" name="tempat_lahir" class="form-control">
				            		</div>
			            		</div>

			            		<div class="form-group row">
			        			<label for="tanggal_lahir" class="col-sm-3 col-form-label" >Tanggal Lahir </label>
				        			<div class="col-sm-8">
				            			<input type="date" name="tanggal_lahir" class="form-control">
				            		</div>
			            		</div>

			            		<div class="form-group row">
			        			<label for="jenis_kelamin" class="col-sm-3 col-form-label" >Jenis Kelamin </label>
				        			
				        			<div class=" p-2">
				        				<input type="radio" name="jenis_kelamin">
				                        <i class="helper"></i>Laki laki                        
			                        </div>

			                        <div class="p-2">
				        				<input type="radio" name="jenis_kelamin">
				                        <i class="helper"></i>Perempuan                        
			                        </div>

			            		</div>

			            		<div class="form-group row">
			        			<label for="jenis_kelamin" class="col-sm-3 col-form-label" >Agama </label>	        			
				        			<div class="col-sm-8">
				            			<select name="agama" class="form-control">
				            				<option value="" disabled selected>::Agama::</option>
				            				<?php foreach ($agama as $row): ?>
				            					<option value="<?= $row->agama;?>"><?= $row->agama;?></option>
				            				<?php endforeach ?>
				            			</select>
				            		</div>

			            		</div>

			            		<div class="form-group row">
			        			<label for="anak_ke" class="col-sm-3 col-form-label" >Anak Ke </label>
				        			<div class="col-sm-8">
				            			<input type="number" name="anak_ke" class="form-control">
				            		</div>
			            		</div>

			            		<div class="form-group row">
			        			<label for="alamat" class="col-sm-3 col-form-label" >Alamat </label>
				        			<div class="col-sm-8">
				            			<input type="text" name="alamat" class="form-control">
				            		</div>
			            		</div>

			            		<div class="form-group row">
			        			<label for="rt" class="col-sm-3 col-form-label" >RT </label>
				        			<div class="col-sm-8">
				            			<input type="number" name="rt" class="form-control">
				            		</div>
			            		</div>

			            		<div class="form-group row">
			        			<label for="rw" class="col-sm-3 col-form-label" >RW</label>
				        			<div class="col-sm-8">
				            			<input type="number" name="rw" class="form-control">
				            		</div>
			            		</div>

			            		<div class="form-group row">
			        			<label for="desa" class="col-sm-3 col-form-label" >Desa</label>
				        			<div class="col-sm-8">
				            			<input type="text" name="desa" class="form-control">
				            		</div>
			            		</div>

			            		<div class="form-group row">
			        			<label for="kecamatan" class="col-sm-3 col-form-label" >Kecamatan</label>
				        			<div class="col-sm-8">
				            			<input type="text" name="kecamatan" class="form-control">
				            		</div>
			            		</div>

			            		<div class="form-group row">
			        			<label for="kabupaten" class="col-sm-3 col-form-label" >Kabupaten/Kota</label>
				        			<div class="col-sm-8">
				            			<input type="text" name="kabupaten" class="form-control">
				            		</div>
			            		</div>

			            		<div class="form-group row">
			        			<label for="provinsi" class="col-sm-3 col-form-label" >Provinsi</label>
				        			<div class="col-sm-8">
				            			<input type="text" name="provinsi" class="form-control">
				            		</div>
			            		</div>
                		</div>

                		<div class="col-md-4">
                			
                			<div class="foto">
                				<img src="" alt="foto" width="100">
                			</div>

                			<div class="form-group">
                				<label for="foto">Foto</label>
                				<input type="file" name="foto" class="form-control">
                			</div>

                			
				                
			        			
                		</div>
                	</div>

                   
                  

        		</div>

        		<div class="card-footer">
        			<button>sdfkj</button>
        		</div>


                </div>
                
            </div>
        </div>
	</div>


<!-- ecit modal peserta -->
	<div class="modal fade" id="ubah-peserta" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title ">Ubah Data Peserta Didik</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                  <div class="form-group row">
        			<label for="Nama" class="col-sm-2 col-form-label" >Nama </label>
	        			<div class="col-sm-10">
	            			<input type="text" name="nama_peserta" class="form-control">
	            		</div>
            	  </div>

            		<div class="form-group row">
        			<label for="tempat_lahir" class="col-sm-2 col-form-label" >Tempat Lahir</label>
	        			<div class="col-sm-10">
	            			<input type="text" name="tempat_lahir" class="form-control">
	            		</div>
            		</div>

            		<div class="form-group row">
        			<label for="tanggal_lahir" class="col-sm-2 col-form-label" >Tanggal Lahir </label>
	        			<div class="col-sm-10">
	            			<input type="text" name="tanggal_lahir" class="form-control">
	            		</div>
            		</div>

            		<div class="form-group row">
        			<label for="tanggal_lahir" class="col-sm-2 col-form-label" >Tanggal Lahir </label>
	        			<div class="col-sm-10">
	            			<input type="text" name="tanggal_lahir" class="form-control">
	            		</div>
            		</div>

            		<div class="form-group row">
        			<label for="tanggal_lahir" class="col-sm-2 col-form-label" >Tanggal Lahir </label>
	        			<div class="col-sm-10">
	            			<input type="text" name="tanggal_lahir" class="form-control">
	            		</div>
            		</div>

            		<div class="form-group row">
        			<label for="tanggal_lahir" class="col-sm-2 col-form-label" >Tanggal Lahir </label>
	        			<div class="col-sm-10">
	            			<input type="text" name="tanggal_lahir" class="form-control">
	            		</div>
            		</div>

            		<div class="form-group row">
        			<label for="tanggal_lahir" class="col-sm-2 col-form-label" >Tanggal Lahir </label>
	        			<div class="col-sm-10">
	            			<input type="text" name="tanggal_lahir" class="form-control">
	            		</div>
            		</div>

            		<div class="form-group row">
        			<label for="tanggal_lahir" class="col-sm-2 col-form-label" >Tanggal Lahir </label>
	        			<div class="col-sm-10">
	            			<input type="text" name="tanggal_lahir" class="form-control">
	            		</div>
            		</div>

        		</div>


                </div>
                
            </div>
        </div>
	</div>

    