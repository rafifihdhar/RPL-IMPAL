<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cevent extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('ajax');
    }

    public function islogin()
    {
        if (isset($_SESSION['username'])) {
            redirect('cevent/tambahevent');
        } else {
            redirect('main/login');
        }
    }

    public function tambahevent()
    {
        $valid = $this->form_validation;
        $valid->set_rules(
            'Penyelenggara',
            'penyelenggara',
            'required',
            array(
                'required'      =>  '%s harus diisi'
            )
        );
        $valid->set_rules(
            'Lokasi',
            'lokasi',
            'required',
            array(
                'required'      =>  '%s harus diisi',
            )
        );
        $valid->set_rules(
            'Fakultas',
            'fakultas',
            'required',
            array(
                'required'      =>  '%s harus diisi'
            )
        );
        if ($valid->run()) {
            $config['upload_path'] = './_assets/img/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif|pdf|mpeg|mp3|avi|mp4';
            $config['max_size'] = '0';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('Browsur')) {
                $data = array(
                    'title'     =>  'Buat Event',
                    'error'     =>  $this->upload->display_errors(),
                );
                $this->load->view('header', $data);
                $this->load->view('buatevent', $data);
                $this->load->view('footerevent');
            } else {
                $upload_gambar = array('upload_data' => $this->upload->data());
                $i = $this->input;
                $data = array(
                    'iduser'      => $this->session->userdata('id'),
                    'Fakultas'  =>  $i->post('Fakultas'),
                    'Penyelenggara'   => $i->post('Penyelenggara'),
                    'deskripsiEvent'       => $i->post('deskripsiEvent'),
                    'tanggalMulai'       => $i->post('tanggalMulai'),
                    'tanggalDeadline'       => $i->post('tanggalDeadline'),
                    'namaEvent'       => $i->post('namaEvent'),
                    'Lokasi'     => $i->post('Lokasi'),
                    'LamaWaktu'     => $i->post('LamaWaktu'),
                    'Browsur'    =>  $upload_gambar['upload_data']['file_name'],
                    'status'    =>  'Menunggu Acc'
                );
                $this->ajax->tambah($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Telah Ditambahkan!</div>');
                redirect(base_url('Event/'), 'refresh');
            }
        }
        $data = array(
            'title'     =>  'Buat Event',
        );
        $this->load->view('header', $data);
        $this->load->view('buatevent', $data);
        $this->load->view('footerevent');
    }
}
