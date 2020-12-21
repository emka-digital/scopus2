<?php
class Tagihan extends CI_Controller
{

    function index()
    {
        $data['tagihan'] = $this->db->get('tbl_order')->result_array();
        $data['user'] = $this->db->get_where('tbl_member', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Invoice';
        $this->load->view('member/tagihan', $data);
        $this->load->view('member/template/navbar', $data);
        $this->load->view('member/template/head', $data);
        $this->load->view('member/template/footer', $data);
    }
    function submit()
    {
        $data['tagihan'] = $this->db->get('tbl_order')->result_array();
        $data['user'] = $this->db->get_where('tbl_member', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Submit Payment';
        $this->load->view('member/submit', $data);
        $this->load->view('member/template/navbar', $data);
        $this->load->view('member/template/head', $data);
        $this->load->view('member/template/footer', $data);
    }
    public function cancel($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_order');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Menu Telah Dihapus</div>');
        redirect('member/tagihan');
    }
    public function submit_payment()
    {
        $data['user'] = $this->db->get_where('tbl_member', ['email' => $this->session->userdata('email')])->row_array();
        $upload_image = $_FILES['foto']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/images/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $new_image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data = [
            'email' => $this->session->userdata('email'),
            'id_order' => htmlspecialchars($this->input->post('id_order'), true),
            'bukti_pembayaran' => $new_image,

        ];
        $this->db->insert('tbl_bukti_pembayaran', $data);
        $this->session->set_flashdata('pembayaran', 'Pembayaran Sedang Diproses');
        redirect('member/tagihan');
    }
}
