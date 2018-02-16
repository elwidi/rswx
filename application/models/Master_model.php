
<?php

class Master_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllCust(){
        $this->db->select('*');
        $this->db->from('pelanggan');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllGoods(){
        $this->db->select('*');
        $this->db->from('barang');
        $query = $this->db->get();
        return $query->result();
    }

    public function getCustDataById($id){
    	$this->db->select('*');
    	$this->db->from('pelanggan');
    	$this->db->where('id',$id);
    	$query = $this->db->get();
        return $query->row();
    }

    public function getGoodsByName($kode){
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('kode_barang',$kode);
        $query = $this->db->get();
        return $query->row();
    }

    public function getGoodsGroup(){
        $this->db->select('*');
        $this->db->from('jenis_barang');
        $query = $this->db->get();
        return $query->result();
    }

    public function getGoodsGroupCounter($name){
        $this->db->select('id, counter');
        $this->db->from('jenis_barang');
        $this->db->where('kode_jenis',$name);
        $query = $this->db->get();
        return $query->row();
    } 
    public function saveNewCust(){
    	/**
         * ===================================================
         * Transactions with databases
         * ===================================================
         */
        $this->db->trans_begin();

        $created_by = 'admin';

        //TODO: Save to pelanggan table
        $data = array(
            'name' => $this->input->post('name'),
            'contact1' => $this->input->post('contact1'),
            'contact2' => $this->input->post('contact2'),
            'address' => $this->input->post('address'),
            'dob' => date('Y-m-d', strtotime($this->input->post('dob'))),
            'created_date' => date('Y-m-d')
        );

        $this->db->insert('pelanggan', $data);


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


    public function editCust($id){
        /**
         * ===================================================
         * Transactions with databases
         * ===================================================
         */
        $this->db->trans_begin();

        $created_by = 'admin';

        //TODO: Save to pelanggan table
        $data = array(
            'name' => $this->input->post('name'),
            'contact1' => $this->input->post('contact1'),
            'contact2' => $this->input->post('contact2'),
            'address' => $this->input->post('address'),
            'dob' => date('Y-m-d', strtotime($this->input->post('dob'))),
            'created_date' => date('Y-m-d'),
        );
        $this->db->where('id', $id);
        $this->db->update('pelanggan', $data);


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

    public function saveNewGoods(){
        /**
         * ===================================================
         * Transactions with databases
         * ===================================================
         */
        $this->db->trans_begin();

        $created_by = 'admin';

        // var_dump($this->input->post(null, true)); exit();

        $nama_barang = $this->input->post('nama_barang');
        $jenis_barang = $this->input->post('jenis_barang');

        $grup_counter = $this->getGoodsGroupCounter($jenis_barang);

        $kode_barang = $jenis_barang.strtoupper(substr($nama_barang,0,3)).$grup_counter->counter;

        //TODO: Save to pelanggan table
        $data = array(
            'kode_barang' => $kode_barang,
            'nama_barang' => $this->input->post('nama_barang'),
            'harga' => $this->input->post('harga_satuan'),
            'created_date' => date('Y-m-d H:i:s'),
            'created_by' => $created_by,
            'delete_flag' => 0
        );
        $this->db->insert('barang', $data);

        $data = array(
            'counter' => $grup_counter->counter+1,
        );
        $this->db->where('id', $grup_counter->id);
        $this->db->update('jenis_barang', $data);


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

    public function deleteGoods($id){
        $data = array(
            'delete_flag' => 1,
        );
        $this->db->where('id', $id);
        $this->db->update('barang', $data);
        
        return true;  
    }
}