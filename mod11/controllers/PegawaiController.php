<?php
include_once __DIR__ . '/../config/Database.php';
include_once __DIR__ . '/../models/Pegawai.php';
class PegawaiController
{
    private $db;
    private $pegawai;
    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->pegawai = new Pegawai($this->db);
    }
    public function index()
    {
        $stmt = $this->pegawai->read();
        $num = $stmt->rowCount();
        // Load the view
        include_once __DIR__ . '/../views/pegawai/index.php';
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->pegawai->nama = $_POST['nama'];
            $this->pegawai->alamat = $_POST['alamat'];
            if ($this->pegawai->create()) {
                echo "<script>alert('Data pegawai berhasil ditambahkan!');
window.location.href='index.php?controller=pegawai&action=index';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan data pegawai.');
window.location.href='index.php?controller=pegawai&action=create';</script>";
            }
        } else {
            // Load the view for the form
            include_once __DIR__ . '/../views/pegawai/create.php';
        }
    }
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: ID tidak ditemukan.');
        $this->pegawai->id_pegawai = $id;
        $this->pegawai->readOne();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->pegawai->nama = $_POST['nama'];
            $this->pegawai->alamat = $_POST['alamat'];
            if ($this->pegawai->update()) {
                echo "<script>alert('Data pegawai berhasil diupdate!'); 
                window.location.href='index.php?controller=pegawai&action=index';</script>";
            } else {
                echo "<script>alert('Gagal mengupdate data pegawai.');
                window.location.href='index.php?controller=pegawai&action=edit&id=" . $id . "';</script>";
            }
        } else {
            $pegawai = $this->pegawai;
            // Load the view for the form
            include_once __DIR__ . '/../views/pegawai/edit.php';
        }
    }
    public function delete()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: ID tidak ditemukan.');
        $this->pegawai->id_pegawai = $id;
        if ($this->pegawai->delete()) {
            echo "<script>alert('Data pegawai berhasil dihapus!');
window.location.href='index.php?controller=pegawai&action=index';</script>";
        } else {
            echo "<script>alert('Gagal menghapus data pegawai.');
window.location.href='index.php?controller=pegawai&action=index';</script>";
        }
    }
}
