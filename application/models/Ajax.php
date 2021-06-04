<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends CI_Model
{
    function fetch_data($limit, $start)
    {
        $this->db->select("*");
        $this->db->from("event");
        $this->db->order_by("event.idevent", "desc");
        $this->db->where("status", "disetujui");
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function tambah($data)
    {
        $this->db->insert('event', $data);
    }

    public function read($idevent)
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->where('idevent', $idevent);
        $this->db->order_by('event.idevent', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    public function homef($id)
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->group_by('event.idevent');
        $this->db->order_by('idevent', 'random');
        $this->db->where("status", "disetujui");
        $this->db->where("idevent !=", $id);
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }

    public function eventpub()
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->group_by('event.idevent');
        $query = $this->db->get();
        return $query->result();
    }

    public function eventku($iduser)
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->where("iduser", $iduser);
        $this->db->group_by('event.idevent');
        $this->db->order_by('idevent', 'random');
        $query = $this->db->get();
        return $query->result();
    }

    public function changeStatusAccepted($id)
    {
        $data = array(
            'status' => 'disetujui',
        );
        $this->db->update('event', $data, ['idevent' => $id]);
    }

    public function changeStatusbatalkan($id)
    {
        $data = array(
            'status' => 'dibatalkan',
        );
        $this->db->update('event', $data, ['idevent' => $id]);
    }

    public function detail($idevent)
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->where('idevent', $idevent);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function delete($data)
    {
        $this->db->where('idevent', $data['idevent']);
        $this->db->delete('event', $data);
    }
}
