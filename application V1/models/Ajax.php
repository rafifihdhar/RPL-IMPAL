<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends CI_Model
{
    function fetch_data($limit, $start)
    {
        $this->db->select("*");
        $this->db->from("event");
        // $this->db->join('usereo', 'usereo.id = event.id', 'left');
        $this->db->order_by("event.idevent", "desc");
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function tambah($data)
    {
        $this->db->insert('event', $data);
    }
}
