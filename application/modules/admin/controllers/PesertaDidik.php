<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PesertaDidik extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('PD_model','Peserta');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Peserta Didik',
			'agama' => $this->Peserta->getTable('tbl_agama')->result(),
			'pendidikan' => $this->Peserta->getTable('tbl_pendidikan')->result(),
			'pekerjaan' => $this->Peserta->getTable('tbl_pekerjaan')->result(),
			'penghasilan' => $this->Peserta->getTable('tbl_penghasilan')->result(), 
			'tempat_tinggal' => $this->Peserta->getTable('tempat_tinggal')->result(),
			'transportasi' => $this->Peserta->getTable('transportasi')->result(),
		];
		$this->load->view('template/header');
		$this->load->view('template/menu',$data);
		$this->load->view('pd/index',$data);
		$this->load->view('pd/scriptjs');
		$this->load->view('template/footer');
	}

	function getPeserta()
        {
                $list = $this->Peserta->get_datatables();
                $data = array();
                $no = $_POST['start'];
                foreach ($list as $field) {
                    $no++;
                    $row = array();
                    $row[] = '<input type="checkbox" name="id_siswa[]" id="ceklis" value="'.$field->id_siswa.'" />';
             		$row[] = $no;
              		$row[] = $field->nis;
               		$row[] = $field->nisn;
        			$row[] = $field->nama_peserta;
        			$row[] = $field->jenis_kelamin;
        			$row[] = $field->tempat_lahir;
        			$row[] = $field->tanggal_lahir;
               		$row[] = $field->alamat;
             		$row[] = $field->nama_ibu;
             		$row[] = $field->asal_sekolah;
                    

                    $data[] = $row;
                }
 
                $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Peserta->count_all(),
                        "recordsFiltered" => $this->Peserta->count_filtered(),
                        "data" => $data,
                );
                //output dalam format JSON
                echo json_encode($output);
        }


        public function hapus()
        {
        	$id_siswa = $this->input->post('id_siswa');

        	for ($i=0; $i < count($id_siswa); $i++) { 
        		
        		$this->db->where('id_siswa',$id_siswa[$i])->delete('tbl_siswa');
        	}

        	echo json_encode(['status'=>'data terhapus']);
        }

    function getPesertaById($id_siswa)
    {
    	$siswa =$this->db->get_where('tbl_siswa',['id_siswa'=>$id_siswa])->row();

    	echo json_encode($siswa);
    }	

}

/* End of file Peserta_didik.php */
/* Location: ./application/modules/admin/controllers/Peserta_didik.php */