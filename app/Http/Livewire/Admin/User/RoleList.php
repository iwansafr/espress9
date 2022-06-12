<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class RoleList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $module = 'user';
    public $table = 'role';
    public $task = 'role-list';
    public $index;
    public $keyword = '';
    public $limit = 12;
    public function __construct()
    {
        $this->index = ['name'];
    }
    public function render()
    {
        $dataList = $this->getDataList();
        return view('livewire.admin.'.$this->module.'.'.$this->task,compact('dataList'));
    }
    private function getDataList()
    {
        return Role::where('name','like','%'.$this->keyword.'%')->paginate($this->limit);
    }
    public function deleteData($id)
    {
        Role::find($id)->delete();
    }
}
