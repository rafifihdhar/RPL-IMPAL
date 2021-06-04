<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('ajax');
    }

    public function index()
    {
        $data = array(
            'title' => 'Event',
        );
        $this->load->view('header', $data);
        $this->load->view('event', $data);
        $this->load->view('footerevent');
    }

    public function fetch()
    {
        $output = '';
        $data = $this->ajax->fetch_data($this->input->post('limit'), $this->input->post('start'));
        foreach ($data as $row) {
            $output .= '
            <script src=' . base_url('_assets/tambahan.js') . '></script>
                <div class="feed-item">
                    <div class="card">
                        <div class="gambar">
                            <a>
                            <img class="card" src= ' . base_url("_assets/img/" . $row->Browsur) . '>
                            </a>
                        </div>
                        <div class="item-text">
                            <h6><a>' . $row->namaEvent . '</a></h6>
                            <span>by <b>' . $row->Penyelenggara . '</b></span>
                            <span>Tanggal <b>' . $row->tanggalMulai . '</b></span>
                        </div>
                    </div>
                </div>
            ';
        }
        echo $output;
    }
}
