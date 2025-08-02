<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PesananModel;
use App\Models\ProdukModel;

class FormPesanan extends BaseController
{
    public function form()
    {
        $produk = $this->request->getGet('id_voucher');
        return view('form_pesanan', ['id_voucher' => $produk]);
    }

    public function datapesanan()
    {
        // Membuat Objek dari tabel yang akan digunakan ketika proses input data pesanan
        $PesananModel = new PesananModel();
        $ProdukModel = new ProdukModel();

        // Menangkap nilai id_produk berdasarkan "name" dari "input" view form_pesanan
        $id_produk = $this->request->getPost('id_produk');

        // Mengambil 1 baris data yang memiliki id = $id_produk dari tabel produk, jadi disini menyimpan (id_produk, nama_produk, harga_produk, stok_produk, dibuat, diubah, provider, dan deskripsi)
        $produk = $ProdukModel->find($id_produk);

        //Pengecekkan apakah variabel $produk memiliki data atau tidak, kalau tidak langsung ke else
        if ($produk) {
            //Pengecekkan apakah stok dari produk saat ini itu masih ada atau sudah habis, ini bisa diubah jadi apabila stoknya habis jadi ga perlu ditampilin produknya, itu nanti Zahra coba pikirin lagi
                //Proses Update data stok produk yang berkurang satu, karena ini dubah, jadi Flowchart juga tambahin ketika tambah data pesanan itu ada proses lainnya, yaitu stok produknya berkurang

                //Membuat variabel yang akan menampung data untuk dimasukkan ke dalam tabel
                $data = [
                    'id_produk'      => $id_produk,
                    'nama'           => $this->request->getPost('nama'),
                    'nomor_telepon'  => $this->request->getPost('nomor_telepon'),
                    'status_pesanan' => 'pending',
                ];

                //Proses input data ke dalam tabel
                $PesananModel->insert($data);

                return redirect()->to('/')->with('success', 'Pesanan berhasil!');
        } else {
            return redirect()->back()->with('error', 'Produk tidak ditemukan!');
        }
    }

    public function tampilantabel()
    {
        $pesananModel = new PesananModel();
        $produk = $pesananModel->getPesananWithProduk();
        return view('data_pesanan', ['produk' => $produk]);
    }

    public function delete($id)
    {
        $Model = new PesananModel();
        $Model->delete($id);

        return redirect()->to('/pesanan'); // balik ke halaman pesanan
    }

    public function update($id)
    {

        $Model = new PesananModel();
        $ProdukModel = new ProdukModel();

        $pesanan = $Model->find($id);
        $produk = $ProdukModel->find($pesanan['id_produk']);

        $Model->update($id, [
            'status_pesanan' => 'selesai'
        ]);

        $ProdukModel-> update($produk ['id_produk'],
        ['stok_produk'=> $produk['stok_produk'] -1
        ]);
        return redirect()->to('/pesanan'); // balik ke halaman pesanan
    }
}
