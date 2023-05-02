<?php

namespace App\Controllers;

use App\Models\useMole1;

class Tamu1 extends BaseController
{
    public function index()
    {
        $Stella = new useMole1();
        $readi = $Stella->findAll();

        $data = [
            'komik' => $readi
        ];

        return view('Pano2/tampil', $data);
    }
    public function lihat($id = false)
    {
        $read = new useMole1();
        $data1 = $read->where(['id' => $id])->first();
        $data = [
            'kompor' => $data1
        ];
        return view('Pano2/opp', $data);
    }

    public function ada()
    {
        return view('Pano2/tambah');
    }

    public function save()
    {
        $tamm = new useMole1();
        $tamm->insert([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp')
        ]);
        return redirect()->to(base_url('p2'));
    }

    public function delete($id = false)
    {
        $del = new useMole1();
        $del->delete($id);
        return redirect()->to(base_url('p2'));
    }
}