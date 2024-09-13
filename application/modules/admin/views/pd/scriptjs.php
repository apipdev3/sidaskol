<script type="text/javascript">

	$(document).ready( function() {
		view();
	 } );

	function view(){

		var table;
	 
	        //datatables
	        table = $('#table').DataTable({ 
	 
	            "processing": true, 
	            "serverSide": true, 
	            "filter": true,
	            "destroy": true,
	            "order": [], 
	             
	            "ajax": {
	                "url": "<?= site_url('admin/PesertaDidik/getPeserta')?>",
	                "type": "POST"
	            },
	 
	             
	            "columnDefs": [
	            { 
	                "targets": [ 0 ], 
	                "orderable": false, 
	            },
	            ],
	 
	        });
	 
	}
   

    //chek all
    function toggle(source) {
	    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
	    for (var i = 0; i < checkboxes.length; i++) {
	        if (checkboxes[i] != source)
	            checkboxes[i].checked = source.checked;
	    }
	}
	//ubah
	function ubah(){
		var id_siswa = $('#ceklis:checked').val();
		if (id_siswa) {			
			$('#ubah-peserta').modal('show');
			 $.ajax({
			    type:"POST",
			    url:"<?= site_url('admin/PesertaDidik/getPesertaById/')?>"+id_siswa,
			    async : true,
                dataType : 'json',
			    success: function(data){

					$('[name = "nama_peserta"]').val(data.nama_peserta);

			    }
			});
			
		}else{

			new PNotify({
	            title: 'Notice',
	            text: 'Harap pilih data terlebih dahulu.',
	            icon: 'fa fa-info',
	            type: 'info'
	        });
		}

		
	}

	//ubah
	function hapus(){
		var id_siswa = $('#ceklis:checked').val();
		if (id_siswa) {		
			var form = document.myform;
			var dataString = $(form).serialize();

			//confrim
			var result = confirm("Apakah anda yakin ingin menghapus data ini?");
			  if (result==true) {
			   
			   $.ajax({
				    type:"POST",
				    url:"<?= site_url('admin/PesertaDidik/hapus')?>",
				    data: dataString,
				    success: function(data){
				        //$('#myResponse').html(data);

						view();

						new PNotify({
				            title: 'Success',
				            text: 'Data Berhasil Dihapus.',
				            icon: 'fa fa-check',
				            type: 'success'
				        });

				    }
				});

			  } else {
			   return false;
			  }
		}else{

			new PNotify({
	            title: 'Notice',
	            text: 'Harap pilih data terlebih dahulu.',
	            icon: 'fa fa-info',
	            type: 'info'
	        });
		}

	}
 
</script>