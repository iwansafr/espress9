<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $name;
    public $password;
    public $rememberMe;

    protected $rules = [
        'name' => 'required',
        'password' => 'required'
    ];
    public $alert;

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function updated($propertyname)
    {
        $this->validateOnly($propertyname);
    }

    public function actionLogin()
    {
        $this->validate();
        if(Auth::attempt(['name'=>$this->name,'password'=>$this->password], $this->rememberMe)){
            $this->alert = ['alert' => 'success', 'msg' => 'Login berhasil, anda akan diarahkan ke dashboard ...'];
            return redirect('/');
        }else{
            $this->alert = ['alert'=>'danger','msg'=>'Username atau Sandi tidak Sesuai'];
        }
    }
    public function messages()
    {
        return [
            'name.required' => 'Username Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong',
        ];
    }
}
