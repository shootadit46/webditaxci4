<?php

namespace App\Controllers;

use Config\Services;
use App\Models\MemberModel;
use App\Controllers\BaseController;

class Member extends BaseController
{
    public function index()
    {
        $memberModel = new MemberModel();
        $member = $memberModel->findAll();
        return view('member', compact('member'));
    }

    public function about()
    {
        return view('about');
    }

    public function create()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('tambah', $data);
    }

    public function data()
    {
        if (!$this->validate([
            'nama' => 'required',
            'email'    => 'required|valid_email',
            'telepon' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            // 'foto' => 'required | uploaded[profile_image]|max_size[profile_image,1024]|ext_in[profile_image,png,jpg]|max_dims[profile_image,1000,1000]'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/tambah')->withInput()->with('validation', $validation);
        }
        $memberModel = new MemberModel();
        $file = $this->request->getFile('foto');
        $newName = $file->getRandomName();
        $file->move('img/', $newName);
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'telepon' => $this->request->getPost('telepon'),
            'gender' => $this->request->getPost('gender'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'alamat' => $this->request->getPost('alamat'),
            'foto' => 'img/' . $newName
        ];
        $memberModel->insert($data);
        session()->setFlashData('success', 'Data Member Berhasil di Tambahkan!');
        return redirect()->to('/member');
    }

    public function update($id)
    {
        $memberModel = new MemberModel();
        $member = $memberModel->find($id);
        return view('update', compact('member'));
    }

    public function updatedata($id)
    {
        $memberModel = new MemberModel();
        $file = $this->request->getFile('foto');
        $newName = $file->getRandomName();
        $file->move('img/', $newName);
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'telepon' => $this->request->getPost('telepon'),
            'gender' => $this->request->getPost('gender'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'alamat' => $this->request->getPost('alamat'),
            'foto' => 'img/' . $newName
        ];
        $memberModel->update($id, $data);
        session()->setFlashData('primary', 'Data Member Berhasil di Update!');
        return redirect()->to('/member');
    }

    public function delete($id)
    {
        $memberModel = new MemberModel();
        $memberModel->delete($id);
        session()->setFlashData('danger', 'Data Member Berhasil di Hapus!');
        return redirect()->to('/member');
    }
}
