<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product');
	}
	public function index()
	{
		$this->load->view('home');
		
	}

	public function addData()
	{
		$namaProduct = $this->input->post('productname');
		$desc = $this->input->post('description');
		$price = $this->input->post('price');
		$amount = $this->input->post('amount');
		$product = [
			'nama_produk' => $namaProduct,
			'keterangan' => $desc,
			'harga' => $price,
			'jumlah' => $amount
		];
		$where = $this->product->getProductByWhere(array($namaProduct));
		if (count($where) > 0) {
			echo "<script>window.alert('Produk Sudah Tersedia');location.href ='http://localhost/arkademy/index'</script>";
		} else {
			$this->product->addProduct($product);
			echo "<script>window.alert('Sukses Menambahkan Produk');location.href='http://localhost/arkademy/index'</script>";
		}
	}
}
