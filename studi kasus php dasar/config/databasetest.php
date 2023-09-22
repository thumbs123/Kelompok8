<?php
require_once 'config/database.php';

$db = \Config\Database::getConnection();
echo "Sukses membuat koneksi ke database";