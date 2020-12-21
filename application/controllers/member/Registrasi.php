<?php
class Registrasi extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama Lengkap Tidak Boleh Kosong']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_member.email]', ['required' => 'Email Tidak Boleh Kosong', 'is_unique' => 'Email Sudah Terdaftar']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'required' => 'Password Anda Kosong',
            'matches' => 'Password Tidak Cocok',
            'min_length' => 'Password Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi Akun';
            $this->load->view('member/registrasi', $data);
        } else {
            $data = [
                'id' => random_string('alnum', 5),
                'nama' => htmlspecialchars($this->input->post('nama'), true),
                'alamat' => '',
                'gender' => '',
                'no_hp' => '',
                'status' => '',
                'email' => htmlspecialchars($this->input->post('email'), true),
                'foto' => 'blank.png',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'user_active' => 1,
                'date_created' => time()

            ];
            $this->db->insert('tbl_member', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat Akun Anda Telah Terdaftar, Silahkan Login.</div>');
            redirect('member/registrasi');
        }
    }
}
