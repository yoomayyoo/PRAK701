<?php 
 
namespace App\Controllers; 
use App\Models\BukuModel; 
 
class Buku extends BaseController { 
    protected $buku; 
 
    public function __construct() 
    { 
        $this->buku = new BukuModel(); 
        if (!session()->get('logged_in')) { 
            session()->setFlashdata('error', 'Login terlebih dahulu!'); 
            header('Location: /auth/login'); 
            exit; 
        } 
    } 
 
    public function index() 
    { 
        $data['buku'] = $this->buku->findAll(); 
        return view('buku/index', $data); 
    } 
 
    public function create() 
    { 
        helper(['form']); 
        return view('buku/create'); 
    } 
 
    public function store() 
    { 
        helper(['form']); 
        $rules = [ 
            'judul' => 'required|alpha_numeric_space', 
            'penulis' => 'required|alpha_numeric_space', 
            'penerbit' => 'required|alpha_numeric_space', 
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]' 
        ]; 
 
        if (!$this->validate($rules)) { 
            return view('buku/create', ['validation' => $this->validator]); 
        } 
 
        $this->buku->save($this->request->getPost()); 
        return redirect()->to('/buku'); 
    } 
 
    public function edit($id) 
    { 
        $data['buku'] = $this->buku->find($id); 
        return view('buku/edit', $data); 
    } 
 
    public function update($id) 
    { 
        $data = $this->request->getPost(); 
        $this->buku->update($id, $data); 
        return redirect()->to('/buku'); 
    } 
 
    public function delete($id) 
    { 
        $this->buku->delete($id); 
        return redirect()->to('/buku'); 
    } 
} 