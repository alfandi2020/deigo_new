<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gudang_Model');
        $this->load->model('Toko_Model');
    }

    public function index()
	{
        $data = [
            'nama' => $this->session->userdata('nama'),
            'title' => "Selamat Datang di Dashboard Admin | Deigo Project",
            'titlePage' => 'Dashboard Admin Deigo Project'
        ];

		$this->load->view('body/header', $data);
		$this->load->view('body/content');
		$this->load->view('body/footer');
	}

    // Keuangan
    // Kas
    public function kas()
	{
        $data = [
            'title' => "Halaman kas | Deigo Project",
            'titlePage' => 'Halaman Kas'
        ];

		$this->load->view('body/header', $data);
		$this->load->view('pages/kas/index');
		$this->load->view('body/footer');
	}

    // Detail Transaksi
    public function detail_transaksi()
	{
        $data = [
            'title' => "Detail_transaksi | Deigo Project",
            'titlePage' => 'Detail Transaksi'
        ];

		$this->load->view('body/header', $data);
		$this->load->view('pages/kas/detail_transaksi');
		$this->load->view('body/footer');
	}

    // ---------------------- Batas Akhir Keuangan
    
    // Stock
    public function stock()
	{
        $data = [
            'allToko' => $this->db->get('toko')->result_array(),
            'title' => "Halaman kas | Deigo Project",
            'titlePage' => 'Halaman Kas'
        ];

		$this->load->view('body/header', $data);
		$this->load->view('pages/stock/index', $data);
		$this->load->view('body/footer');
	}
    
    // ---------------------- Batas Akhir Stock
   
   
    // Detail Toko
    public function detail_stock($id_toko)
	{
        //get data toko 
        $dataToko = $this->db->get_where('toko', ['id_toko' => $id_toko])->row_array();
        $stok = $this->db->query("SELECT * FROM stok_toko WHERE id_toko =  $id_toko")->result_array();
        $barang_masuk = $this->db->query("SELECT * FROM keluar_gudang WHERE id_toko = $id_toko")->result_array();
        $barang_keluar = $this->db->query("SELECT * FROM barang_keluar WHERE id_toko = $id_toko")->result_array();

        $data = [
            'dataToko' => $dataToko,
            'stok' => $stok,
            'barang_masuk' => $barang_masuk,
            'barang_keluar' => $barang_keluar,
            'toko' => $this->Toko_Model->getAll(),
            'title' => "Detail Gudang | Deigo Project",
            'titlePage' => 'Detail Gudang'
        ];

		$this->load->view('body/header', $data);
		$this->load->view('pages/stock/detail_stock', $data);
		$this->load->view('body/footer');
	}
    
    // ---------------------- Batas Akhir Stock
    
    
    // Tambah Toko
    public function tambahToko() {
        $data = [
            'nama_toko' => $this->input->post('nama_toko'),
            'alamat' => $this->input->post('alamat')
        ];


        $this->db->insert('toko', $data);
       
        redirect('index/stock');
    }


    public function tambah_barang_keluar() {
        $id_toko = $this->input->post('id_toko');
        $tanggal = $this->input->post('tanggal');
        $id_barang = $this->input->post('id_barang');
        $jumlah = $this->input->post('jumlah');
        $deskripsi = $this->input->post('deskripsi');
        
        $detail_barang = $this->db->query("SELECT * FROM gudang WHERE id_barang = $id_barang")->row_array();
        
        $data = [
            'id_toko' => $id_toko,
            'id_barang' => $id_barang,
            'tanggal' => $tanggal,
            'nama_barang' => $detail_barang['nama_barang'],
            'merk' => $detail_barang['merk'],
            'harga' => $detail_barang['harga'],
            'jumlah' => $jumlah,
            'deskripsi' => $deskripsi
        ];

        $this->db->insert("barang_keluar", $data);

        $cekStok = $this->db->query("SELECT * FROM stok_toko WHERE id_toko = $id_toko AND id_barang = $id_barang")->row_array();
        $jumlahLama = $cekStok['jumlah'];

        $jumlahBaru = $jumlahLama - $jumlah;
        $this->db->query("UPDATE stok_toko SET jumlah = $jumlahBaru WHERE id_barang = $id_barang AND id_toko = $id_toko");

        redirect('index/detail_stock/'. $id_toko);
    }
  
    


    



    
    
    













    
    // Gudang
    public function gudang()
	{

        $data = [
            'user' => $this->Gudang_Model->getAll(),
            'title' => "Gudang | Deigo Project",
            'titlePage' => 'Gudang'
        ];


		$this->load->view('body/header', $data);
		$this->load->view('pages/gudang/index', $data);
		$this->load->view('body/footer');
	}
    
    // ---------------------- 
    
    //  Detail Gudang
    public function detail_gudang($id_barang)
	{  
      
        $data = [
            'toko' => $this->Toko_Model->getAll(),
            'terima_barang' => $this->Gudang_Model->terimaBarangGudang($id_barang),  
            'kirim_barang' => $this->Gudang_Model->kirimBarangGudang($id_barang),          
            'data' => $this->Gudang_Model->detailInfoGudang($id_barang),
            'title' => "Detail Gudang | Deigo Project",
            'titlePage' => 'Detail Gudang'
        ];

		$this->load->view('body/header', $data);
		$this->load->view('pages/gudang/detail_gudang');
		$this->load->view('body/footer');
	}
    
    // ---------------------- 
    

    public function data_baru_gudang() {
        $data = [
            'nama_barang' => $this->input->post('nama_barang'),
            'merk' => $this->input->post('merk'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('jumlah'),
            'deskripsi' => $this->input->post('desk')
        ];


        $this->db->insert('gudang', $data);
        
        $recently = $this->db->order_by('id_barang', 'DESC')
            ->limit(1)
            ->get('gudang')
            ->row_array();

        $barang_masuk_awal = [
            'id_barang' => $recently['id_barang'],
            'jumlah' => $this->input->post('jumlah'),
            'tanggal' => $this->input->post('tanggal'),
            'deskripsi' => $this->input->post('desk')
        ];
        $this->db->insert('masuk_gudang', $barang_masuk_awal);
       
        redirect('index/gudang');
    }


    public function tambah_terima_barang()
    {
        $id_barang = $this->input->post('id_barang');

        // insert data terima
        $data = [
            'id_barang' => $this->input->post('id_barang'),
            'tanggal' => $this->input->post('tanggal'),
            'jumlah' => $this->input->post('jumlah'),
            'deskripsi' => $this->input->post('deskripsi')
        ];
        $this->db->insert('masuk_gudang', $data);
        //
        //ambil data 
        $infodata =  $this->Gudang_Model->detailInfoGudang($id_barang);
        // Stock saat ini
        $stock = $infodata['jumlah'];
        // Jumlahkan dengan Stock Baru dan lama
        $jumlah = $data['jumlah'];
        $total = $stock + $jumlah;
        $this->db->set('jumlah', $total);
        $this->db->where('id_barang', $id_barang);
        $this->db->update('gudang');

        // $this->db->set('')
        redirect('index/detail_gudang/'. $data['id_barang']);
    }
    
    public function tambah_kirim_barang()
    {
        $id_barang = $this->input->post('id_barang');
        $id_toko =  $this->input->post('toko');
        $jumlah = $this->input->post('jumlah');

        $detailInfoGudang = $this->Gudang_Model->detailInfoGudang($id_barang);

        // insert data terima
        $data = [
            'id_barang' => $this->input->post('id_barang'),
            'id_toko' => $this->input->post('toko'),
            'nama_barang' => $detailInfoGudang['nama_barang'],
            'merk' => $detailInfoGudang['merk'],
            'harga' => $detailInfoGudang['harga'],
            'jumlah' => $this->input->post('jumlah'),
            'tanggal' => $this->input->post('tanggal'),
            'deskripsi' => $this->input->post('deskripsi')
        ];
        
        $this->db->insert('keluar_gudang', $data);

        // Cek Toko
        $cekStock = $this->db->query("SELECT * FROM stok_toko WHERE id_barang = $id_barang AND id_toko = $id_toko")->row_array();
        

        $stock_toko = [
            'id_toko' => $id_toko,
            'id_barang' => $id_barang,
            'nama_barang' => $detailInfoGudang['nama_barang'],
            'merk' => $detailInfoGudang['merk'],
            'harga' => $detailInfoGudang['harga'],
            'jumlah' => $this->input->post('jumlah'),
            'deskripsi' => $this->input->post('deskripsi')
        ] ;

        $detailInfoToko = $this->db->query("SELECT * FROM stok_toko WHERE id_toko = $id_toko AND id_barang = $id_barang")->row_array();

        $jumlahLama = $detailInfoToko['jumlah'];
        $jumlahBaru = $jumlahLama + $jumlah;

        if(isset($cekStock)) {
            // Data sudah ada
           $this->db->query("UPDATE stok_toko SET jumlah = $jumlahBaru WHERE id_barang = $id_barang AND id_toko = $id_toko");
        }else {
            // data belum ada
            $this->db->insert('stok_toko', $stock_toko);
        }
        // Update / Insert data Stok Toko

       

        //
        //ambil data 
        $infodata =  $this->Gudang_Model->detailInfoGudang($id_barang);
        // Stock saat ini
        $stock = $infodata['jumlah'];
        // Jumlahkan dengan Stock Baru dan lama
        $jumlah = $data['jumlah'];
        $total = $stock - $jumlah;
        $this->db->set('jumlah', $total);
        $this->db->where('id_barang', $id_barang);
        $this->db->update('gudang');

        // $this->db->set('')
        redirect('index/detail_gudang/'. $data['id_barang']);
    }



    
}