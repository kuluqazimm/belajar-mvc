<?php
class Atlet extends Controller
{
    public function index()
    {
        $data['judul'] = "Daftar Atlet";
        $data['atl'] = $this->model('Atlet_model')->getAllAtlet();
        $this->view('templates/header', $data);
        $this->view('atlet/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = "Detail";
        $data['atl'] = $this->model('Atlet_model')->getAtletById($id);
        $this->view('templates/header', $data);
        $this->view('atlet/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Atlet_model')->tambahDataAtlet($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Atlet');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Atlet');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Atlet_model')->hapusDataAtlet($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Atlet');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Atlet');
            exit;
        }
    }
    public function edit($id)
    {
    }
}