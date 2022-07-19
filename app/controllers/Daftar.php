<?php
class Daftar extends Controller
{
    public function index()
    {
        $data['judul'] = "Daftar Produk";
        $data['prd'] = $this->model('Daftar_model')->getAllProduk();
        $this->view('templates/header', $data);
        $this->view('daftar/index', $data);
        $this->view('templates/footer');
    }
}