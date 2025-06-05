<?php
CREATE TABLE barang (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_barang VARCHAR(100),
  deskripsi TEXT,
  stock INT
);

CREATE TABLE masuk (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_barang INT,
  jumlah INT,
  tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE keluar (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_barang INT,
  jumlah INT,
  tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE user (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100),
  password VARCHAR(255)
);
?>