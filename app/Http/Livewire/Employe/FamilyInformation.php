<?php

namespace App\Http\Livewire\Employe;

use App\Models\EmployeFamilyDetail;
use Livewire\Component;

class FamilyInformation extends Component
{
    public  $post, $employe_family_details;
    public  $employe_details_id, $relationName, $relationship, $family_nic, $date_of_birth, $work_place, $designation;
    protected $rules = [
        'relationName' => 'required',
        'relationship' => 'required',
        'date_of_birth' => 'required',
        'family_nic' => '',
        'work_place' => '',
        'designation' => '',
    ];


    public function render()
    {
        return view('livewire.employe.family-information');
    }


    public function mount()
    {
        
        $this->employe_family_details = EmployeFamilyDetail::where('employe_details_id', $this->post)->get();
    }
    // public function save($id)
    public function save($id)
    {
       
        return redirect(route('employe.employe_work',$id));
    }
    public function add($id)
    {
        $this->validate();

        EmployeFamilyDetail::create([
            'employe_details_id' => $id,
            'full_name' => $this->relationName,
            'edit_full_name' => $this->relationName,
            'relationship' => $this->relationship,
            'edit_relationship' => $this->relationship,
            'family_nic' => $this->family_nic,
            'edit_family_nic' => $this->family_nic,
            'date_of_birth' =>  date('Y-m-d', strtotime($this->date_of_birth)),
            'edit_date_of_birth' =>  date('Y-m-d', strtotime($this->date_of_birth)),
            'work_place' => $this->work_place,
            'edit_work_place' => $this->work_place,
            'designation' => $this->designation,
            'edit_designation' => $this->designation,

        ]);
        $this->employe_family_details = EmployeFamilyDetail::where('employe_details_id', $id)->get();
    }

    public function delete($id)
    {
        EmployeFamilyDetail::where('id', $id)->delete();

        $this->employe_family_details = EmployeFamilyDetail::where('employe_details_id', $this->post)->get();
    }
}
