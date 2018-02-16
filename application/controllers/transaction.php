<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('Master_model', 'm_master');
        $this->load->model('Transaction_model', 'm_trans');
	}

	public function index()
	{
        $this->pelanggan();
	}

    public function penjualan(){
        $data['goods'] = $this->m_master->getAllGoods();
        $this->load->view('transaksi/penjualan', $data);
    }

    public function getKodeBarang(){
        $kode = $this->input->post('kode_barang');

        $nama_barang = $this->m_master->getGoodsByName($kode);

        if(!empty($nama_barang)){
            $data = array('status' => 'success','data' => $nama_barang);
        } else {
            $data = array('status' => 'success','data' => '');
        }

        echo json_encode($data);
        exit();
    }

    public function saveTmp(){
        $kode = $this->input->post('kode_barang');

        if($this->m_trans->saveTmp()){
            $data = array('status' => 'success');
        } else {
            $data = array('status' => 'failed');
        }

        echo json_encode($data);
        exit();
    }
}