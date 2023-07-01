<?php

namespace App\Http\Livewire\Admin\Permissions;

use App\Models\Permission;
use Livewire\Component;
use App\Models\Role;
use Illuminate\Contracts\View\View;
use Livewire\WithPagination;
use function view;


class Permissions extends Component
{
    use WithPagination;

    public $paginate = '';

    public $query = '';

    public $sortField = 'name';

    public $sortAsc = true;

    public function render(): View
    {
        abort_if_cannot('view_roles');

        return view('livewire.admin.permissions.index');
    }

    public function builder()
    {
        return Permission::orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
    }

    public function sortBy(string $field): void
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function Permissions(): object
    {
        $query = $this->builder();

        if ($this->query) {
            $query->where('name', 'like', '%' . $this->query . '%');
        }

        return $query->paginate($this->paginate);
    }

    public function deleteRole($id): void
    {
        $this->builder()->findOrFail($id)->delete();

        $this->dispatchBrowserEvent('close-modal');
    }
}
