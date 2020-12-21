<?php
class Profile extends CI_Controller
{

    function index()
    {
        $data['user'] = $this->db->get_where('tbl_member', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Profile';
        $this->load->view('member/profile', $data);
        $this->load->view('member/template/navbar', $data);
        $this->load->view('member/template/footer', $data);
        $this->load->view('member/template/head', $data);
        $this->load->view('member/template/print', $data);
    }
    public function edit()
    {
        $data['user'] = $this->db->get_where('tbl_member', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Profile';
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('member/edit_profile', $data);
            $this->load->view('member/template/navbar', $data);
            $this->load->view('member/template/footer', $data);
            $this->load->view('member/template/head', $data);
            $this->load->view('member/template/print', $data);
        } else {
            $name = $this->input->post('nama');
            $email = $this->input->post('email');
            $no_hp = $this->input->post('no_hp');
            $alamat = $this->input->post('alamat');
            $gender = $this->input->post('gender');
            $status = $this->input->post('status');
            //cek gambar yang akan diupload
            $upload_image = $_FILES['foto']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/images/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto')) {
                    $old_image = $data['user']['foto'];
                    if ($old_image != 'blank.png') {
                        unlink(FCPATH . 'assets/images/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('nama', $name);
            $this->db->set('no_hp', $no_hp);
            $this->db->set('alamat', $alamat);
            $this->db->set('gender', $gender);
            $this->db->set('status', $status);
            $this->db->where('email', $email);
            $this->db->update('tbl_member');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat Profile anda telah berhasil diubah.</div>');
            redirect('member/profile');
        }
    }
}
