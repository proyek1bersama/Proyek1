<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProdukModel;

class Produk extends BaseController
{
    public function axis()
    {
        $model = new ProdukModel();
        $data ['produk'] = $model -> where ('provider','axis')->findAll();
        return view('axis', $data);
    }
    public function xl()
    {
        $model = new ProdukModel();
        $data ['produk'] = $model -> where ('provider','xl')->findAll();
        return view('xl', $data);
    }
    public function indosat()
    {
        $model = new ProdukModel();
        $data ['produk'] = $model -> where ('provider','indosat')->findAll();
        return view('indosat', $data);
    }
    public function smartfren()
    {
        $model = new ProdukModel();
        $data ['produk'] = $model -> where ('provider','smartfren')->findAll();
        return view('smartfren', $data);
    }
    public function tri()
    {
        $model = new ProdukModel();
        $data ['produk'] = $model -> where ('provider','tri')->findAll();
        return view('tri', $data);
    
    }
    public function telkomsel()
    {
        $model = new ProdukModel();
        $data ['produk'] = $model -> where ('provider','telkomsel')->findAll();
        return view('telkomsel', $data);
    }

    public function add()
    {
        $produkModel = new ProdukModel ();

    $data = [
        'nama_produk'   => $this->request->getPost('nama_produk'),
        'harga_produk'  => $this->request->getPost('harga_produk'),
        'stok_produk'   => $this->request->getPost('stok_produk'),
        'provider'      => $this->request->getPost('provider'),
        'deskripsi'     => $this->request->getPost('deskripsi'),
    ];

    $produkModel->insert($data);

    return redirect()->to('/admin'); // balik ke halaman produk
    }

    public function update($id)
    {
        $Model = new ProdukModel();
        $data = [
        'nama_produk'   => $this->request->getPost('nama_produk'),
        'harga_produk'  => $this->request->getPost('harga_produk'),
        'stok_produk'   => $this->request->getPost('stok_produk'),
        'provider'      => $this->request->getPost('provider'),
        'deskripsi'     => $this->request->getPost('deskripsi'),
        ];

        $Model->update($id,$data);
    return redirect()->to('/admin'); // balik ke halaman produk
    }
    

    public function delete($id)
    {
        $Model = new ProdukModel();    
        $Model->delete($id);

    return redirect()->to('/admin'); // balik ke halaman produk
    }

    public function tampilanedit($id)
    {
        $model = new ProdukModel();
        $data ['produk'] = $model -> find($id);

        return view ('form_edit_produk',$data);
    }

//     public function simpan()
// {
//     $produkModel = new \App\Models\ProdukModel();

//     $data = [
//         'nama_produk'   => $this->request->getPost('nama_produk'),
//         'harga_produk'  => $this->request->getPost('harga_produk'),
//         'stok_produk'   => $this->request->getPost('stok_produk'),
//         'provider'      => $this->request->getPost('provider'),
//         'deskripsi'     => $this->request->getPost('deskripsi'),
//     ];

//     $produkModel->insert($data);

//     return redirect()->to('/produk'); // balik ke halaman produk
// }

}
