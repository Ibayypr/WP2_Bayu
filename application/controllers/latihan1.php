<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat datang, selamat belajar web proramming";
    }
    public function biodatada()
    {
        echo "Selamat datang, selamat belajar web proramming
        Nama saya Bayu Prasetyo
        Hobi saya Futsal.
        ";
    }

    public function penjumlahan($n1, $n2) {
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($n1, $n2);

        $this->load->view('view-latihan', compact('hasil', 'n1', 'n2'));
    }
}