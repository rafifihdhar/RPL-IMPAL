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
            <script src=' . base_url("_assets/tambahan.js") . '></script>
                <div class="feed-item">
                    <div class="card">
                        <div class="gambar">
                            <a href=' . base_url("main/viewevent/" . $row->idevent) . '>
                            <img class="card" src= ' . base_url("_assets/img/" . $row->Browsur) . '>
                            </a>
                        </div>
                        <div class="item-text">
                            <h6><a href=' . base_url("main/viewevent/" . $row->idevent) . '>' . $row->namaEvent . '</a></h6>
                            <span>by <b>' . $row->Penyelenggara . '</b></span>
                            <span>Tanggal <b>' . $row->tanggalMulai . '</b></span>
                        </div>
                    </div>
                </div>
            ';
        }
        echo $output;
    }

    public function acc($id)
    {
        $this->ajax->changeStatusAccepted($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Permintaan Publish disetujui!</div>');
        redirect('main/eventakun');
    }

    public function batalkan($id)
    {
        $this->ajax->changeStatusbatalkan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Permintaan Publish dibatalkan!</div>');
        redirect('main/eventakun');
    }

    public function hapus($idevent)
    {
        $tampilan = $this->ajax->detail($idevent);
        unlink('./_assets/img/' . $tampilan['Browsur']);
        $data = array('idevent' => $idevent);
        $this->ajax->delete($data);
        redirect(base_url('main/eventakun'), 'refresh');
    }
}
