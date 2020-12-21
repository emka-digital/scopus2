<?php
class Webinar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_pengguna');
        $this->load->library('upload');
    }


    function index()
    {
        $kode = $this->session->userdata('idadmin');
        $x['user'] = $this->m_pengguna->get_pengguna_login($kode);
        $x['data'] = $this->db->get('tbl_webinar')->result_array();
        $this->load->view('admin/v_webinar', $x);
    }
    public function add_webinar()
    {
        $this->form_validation->set_rules('nama_webinar', 'Nama Webinar', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('kuota', 'Kuota', 'required');
        $this->form_validation->set_rules('tgl_pelaksanaan', 'Tanggal Pelaksanaan', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/webinar');
        } else {
            $data = [
                'id' => random_string('alnum', 5),
                'nama_webinar' => $this->input->post('nama_webinar'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'kuota' => $this->input->post('kuota'),
                'tgl_pelaksanaan' => $this->input->post('tgl_pelaksanaan'),
            ];
            $this->db->insert('tbl_webinar', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Barang Telah berhasil ditambah</div>');
            redirect('admin/webinar');
        }
    }
    public function edit()
    {

        $this->form_validation->set_rules('nama_webinar', 'Nama Webinar', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('kuota', 'Kuota', 'required');
        $this->form_validation->set_rules('tgl_pelaksanaan', 'Tanggal Pelaksanaan', 'required');

        if ($this->form_validation->run() == false) {
            redirect('admin/webinar');
        } else {
            $id = $this->input->post('kode');
            $name = $this->input->post('nama_webinar');
            $deskripsi = $this->input->post('deskripsi');
            $harga = $this->input->post('harga');
            $kuota = $this->input->post('kuota');
            $tgl = $this->input->post('tgl_pelaksanaan');
            //cek gambar yang akan diupload

            $this->db->set('nama_webinar', $name);
            $this->db->set('deskripsi', $deskripsi);
            $this->db->set('harga', $harga);
            $this->db->set('kuota', $kuota);
            $this->db->set('tgl_pelaksanaan', $tgl);
            $this->db->where('id', $id);
            $this->db->update('tbl_webinar');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat Profile anda telah berhasil diubah.</div>');
            redirect('admin/webinar');
        }
    }
}
