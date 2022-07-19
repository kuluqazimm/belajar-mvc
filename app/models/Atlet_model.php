<?php

class Atlet_model
{
    private $table = 'atlet';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAtlet()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAtletById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataAtlet($data)
    {
        $query = "INSERT INTO atlet (nama,jenisKel,umur,asal,cabang) VALUES (:nama, :jenisKel, :umur, :asal, :cabang)";
        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenisKel', $data['jenisKel']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('asal', $data['asal']);
        $this->db->bind('cabang', $data['cabang']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataAtlet($id)
    {
        $query = "DELETE FROM atlet WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}