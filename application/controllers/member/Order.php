<?php
class Order extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['user'] = $this->db->get_where('tbl_member', ['email' => $this->session->userdata('email')])->row_array();
        $data['webinar'] = $this->db->get('tbl_webinar')->result_array();
        $data['bulan'] = $this->db->get('tbl_bulan')->result_array();
        $data['title'] = 'Order';
        $this->load->view('member/order', $data);
        $this->load->view('member/template/navbar', $data);
        $this->load->view('member/template/footer', $data);
        $this->load->view('member/template/head', $data);
        $this->load->view('member/template/print', $data);
    }
    public function konfir_order()
    {
        if ($this->uri->segment(4)) {
            $id = $this->uri->segment(4);
            $data['webinar'] = $this->db->get('tbl_webinar')->result_array();
            $data['user'] = $this->db->get_where('tbl_member', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = 'Order Confirmation';
            $this->load->view('member/konfir_order', $data);
            $this->load->view('member/template/navbar', $data);
            $this->load->view('member/template/footer', $data);
            $this->load->view('member/template/head', $data);
            $this->load->view('member/template/print', $data);
        } else {
            redirect('member/order');
        }
    }
    public function order_now()
    {
        $data['webinar'] = $this->db->get('tbl_webinar')->result_array();
        $data['user'] = $this->db->get_where('tbl_member', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Order Confirmation';
        $this->load->view('member/konfir_order', $data);
        $this->load->view('member/template/navbar', $data);
        $this->load->view('member/template/footer', $data);
        $this->load->view('member/template/head', $data);
        $this->load->view('member/template/print', $data);
        $data = [
            'id' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'nama_webinar' => $this->input->post('nama_webinar'),
            'harga' => $this->input->post('harga'),
            'tanggal' => $this->input->post('tgl'),
            'tanggal_pelaksanaan' => $this->input->post('tanggal_pelaksanaan'),
            'status' => 0,
        ];
        $this->db->insert('tbl_order', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Barang Telah berhasil ditambah</div>');
        redirect('member/tagihan');
    }
    public function bulan()
    {
        if ($this->uri->segment(4)) {
            $nama = $this->uri->segment(4);
            $data['bulan'] = $this->db->get('tbl_bulan')->result_array();
            $data['user'] = $this->db->get_where('tbl_member', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = 'Webinar';
            $this->load->view('member/webinar_bulan', $data);
            $this->load->view('member/template/navbar', $data);
            $this->load->view('member/template/footer', $data);
            $this->load->view('member/template/head', $data);
            $this->load->view('member/template/print', $data);
        } else {
            redirect('member/order');
        }
    }
}
