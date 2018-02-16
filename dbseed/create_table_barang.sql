CREATE TABLE `penjualan_tmp` (
  `kode_barang` varchar(100) DEFAULT NULL,
  `nama_barang` varchar(400) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `last_updated_date` date DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;