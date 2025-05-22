<?php 
namespace App\Controllers; 
use App\Models\UserModel; 
use App\Models\BukuModel; 

class Auth extends BaseController 
{
    protected $buku;

    public function __construct()
    {
        $this->buku = new BukuModel();
    }

    public function login() 
    { 
        helper(['form']); 
        return view('auth/login_view'); 
    } 
 
    public function login_process() 
    { 
        $session = session(); 
        $model = new UserModel(); 

        $username = $this->request->getPost('username'); 
        $password = $this->request->getPost('password'); 
        $user = $model->where('username', $username)->first(); 

        if ($user && password_verify($password, $user['password'])) { 
            $session->set(['logged_in' => true, 'username' => $user['username']]); 
            return redirect()->to('/buku'); 
        } else { 
            $session->setFlashdata('error', 'Password salah!'); 
            return redirect()->to('/auth/login'); 
        } 
    } 

    public function generate() 
    { 
        echo password_hash('admin123', PASSWORD_DEFAULT); 
    } 

    public function index() 
    { 
        if (!session()->get('logged_in')) { 
            return redirect()->to('/auth/login')->with('error', 'Login terlebih dahulu!'); 
        } 

        $data['buku'] = $this->buku->findAll(); 
        return view('buku/index', $data); 
    } 

    public function logout() 
    { 
        session()->destroy(); 
        return redirect()->to('/auth/login'); 
    } 
}
