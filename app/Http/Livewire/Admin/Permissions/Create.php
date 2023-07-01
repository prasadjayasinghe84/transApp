<?php

namespace App\Http\Livewire\Admin\Permissions;
use App\Models\Permission;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Create extends Component
{
    public $module = '';
    public $permission = '';

    protected array $rules = [
        'permission' => 'required|string|unique:permissions,label',
    ];

    protected array $messages = [
        'permission.required' => 'Permission is required',
    ];

    /**
     * @throws ValidationException
     */
    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function render(): View
    {
        abort_if_cannot('add_roles');

        return view('livewire.admin.permissions.create');
    }

    public function store(): Redirector|RedirectResponse
    {
        $this->validate();

        $permission = Permission::create([
            'module' => $this->module,
            'label' => $this->permission,
            'name' => strtolower(str_replace(' ', '_', $this->permission)),
        ]);

        flash('Permission created')->success();

        add_user_log([
            'title' => 'created permission '.$this->permission,
            'link' => route('admin.settings.permissions.edit', ['role' => $permission->id]),
            'reference_id' => $permission->id,
            'section' => 'Permission',
            'type' => 'created',
        ]);

        return redirect()->route('admin.settings.permissions.index');
    }

    public function cancel(): void
    {
        $this->reset();
        $this->dispatchBrowserEvent('close-modal');
    }
}
