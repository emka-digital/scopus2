<?php
class Login extends CI_Controller
{

    function index()
    {
        if ($this->session->userdata('email')) {
            redirect('member/dasboard');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Email Tidak Boleh Kosong', 'valid_email', 'Masukan Email dengan Benar']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Anda Kosong',
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('member/login');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('tbl_member', ['email' => $email])->row_array();
        //untuk mengetahui adanya user/tidak
        if ($user) {
            //mengecek user aktif atau tidak
            if ($user['user_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('member/dasboard');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Anda Salah</div>');
                    redirect('member/login');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">User Anda Belum Aktif</div>');
                redirect('member/login');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun Anda Belum Terdaftar</div>');
            redirect('member/login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">Anda Telah Berhasil Logout</div>');
        redirect('member/login');
    }
}
