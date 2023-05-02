<?php

namespace App\Controllers;

use App\Models\useMole;
class Tamu extends BaseController
{
    public function index()
    {
        $tamu = new useMole();
        $all_data_siswa = $tamu->findAll();
        return view('Pano/tampil', ['all' => $all_data_siswa]);
    }

    public function tambah()
    {
        return view('Pano/tambah');
    }

    public function pro()
    {
        $tam = new useMole();
        $tam->insert($this->request->getPost());
        return redirect()->to(base_url('/'));
    }

    public function del($id = false)
    {
        $del = new useMole();
        $del->delete($id);
        return redirect()->to(base_url('/'));
    }

    public function editi($id = false)
    {
        $editai = new useMole();
        $readi = $editai->find($id);
        return view('Pano/edit', ['opo' => $readi]);
    }

    public function prp()
    {
        $poi = new useMole();
        $poi->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('/'));
    }

}