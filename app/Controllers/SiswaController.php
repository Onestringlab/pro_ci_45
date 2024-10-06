<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class SiswaController extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new SiswaModel();

        // Menampilkan daftar siswa
        $data['siswa'] = $model->findAll();

        if ($session->get('role') == 'admin') {
            return view('siswas/admin_siswa_list', $data);
        } elseif ($session->get('role') == 'user') {
            return view('siswas/user_siswa_list', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function create()
    {
        // Hanya admin yang bisa menambahkan data siswa
        if (session()->get('role') != 'admin') {
            return redirect()->to('/siswa');
        }

        return view('siswas/create_siswa');
    }

    public function store()
    {
        // Hanya admin yang bisa menyimpan data
        if (session()->get('role') != 'admin') {
            return redirect()->to('/siswa');
        }

        $model = new SiswaModel();
        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat')
        ];
        $model->save($data);
        return redirect()->to('/siswa');
    }

    public function edit($id)
    {
        // Hanya admin yang bisa mengedit data siswa
        if (session()->get('role') != 'admin') {
            return redirect()->to('/siswa');
        }

        $model = new SiswaModel();
        $data['siswa'] = $model->find($id);
        return view('siswas/edit_siswa', $data);
    }

    public function update($id)
    {
        // Hanya admin yang bisa memperbarui data siswa
        if (session()->get('role') != 'admin') {
            return redirect()->to('/siswa');
        }

        $model = new SiswaModel();
        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat')
        ];
        $model->update($id, $data);
        return redirect()->to('/siswa');
    }

    public function delete($id)
    {
        // Hanya admin yang bisa menghapus data siswa
        if (session()->get('role') != 'admin') {
            return redirect()->to('/siswa');
        }

        $model = new SiswaModel();
        $model->delete($id);
        return redirect()->to('/siswa');
    }
}
