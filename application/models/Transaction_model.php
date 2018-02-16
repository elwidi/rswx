
<?php

class Transaction_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function saveTmp(){
    	/**
         * ===================================================
         * Transactions with databases
         * ===================================================
         */
        $this->db->trans_begin();

        $created_by = 'admin';

        //TODO: Save to pelanggan table
        $data = array(
            'kode_barang' => $this->input->post('kode_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('qty')
        );

        $this->db->insert('penjualan_tmp', $data);


        /**
         * ===================================================
         * Transactions with databases
         * ===================================================
         */
        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
        }
        else
        {
            $this->db->trans_commit();
        }

        return true;
    }


}