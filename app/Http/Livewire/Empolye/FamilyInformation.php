<?php

namespace App\Http\Livewire\Empolye;

use App\Models\EmployeFamilyDetail;
use Livewire\Component;
use Pest\Support\Arr;

class FamilyInformation extends Component
{

public $post;
    public  $employe_family_details;
    public  $employe_details_id, $full_name, $relationship, $family_nic, $date_of_birth, $work_place, $designation;
    protected $rules = [
        'employe_family_details.*.full_name' => 'required',
        'employe_family_details.*.relationship' => 'required',
        'employe_family_details.*.date_of_birth' => 'required',
        'employe_family_details.*.family_nic' => '',
        'employe_family_details.*.work_place' => '',
        'employe_family_details.*.designation' => '',


    ];

    public function render()
    {
        return view('livewire.empolye.family-information');
    }
    public function delete($index)
    {

        $infor = $this->employe_family_details[$index];
        $this->employe_family_details->forget($index);
        $infor->delete();
    }
    public function mount()
    {
        $this->employe_family_details = EmployeFamilyDetail::all();
    }
    public function add()
    {
        $this->employe_family_details->push(new EmployeFamilyDetail());
    }


    public function save($id)
    {


        $this->validate();
     
        foreach ($this->employe_family_details as  $index) {

            EmployeFamilyDetail::create([
                'employe_details_id' => $id,
                'full_name' => $index->full_name,
                'edit_full_name' => $index->full_name,
                'relationship' => $index->relationship,
                'edit_relationship' => $index->relationship,
                'family_nic' => $index->family_nic,
                'edit_family_nic' => $index->family_nic,
                'date_of_birth' => $index->date_of_birth,
                'edit_date_of_birth' => $index->date_of_birth,
                'work_place' => $index->work_place,
                'edit_work_place' => $index->work_place,
                'designation' => $index->designation,
                'edit_designation' => $index->designation,

            ]);
        }
       /// session()->flash('message', 'Employee Has Been Created Successfully.');
       return redirect('employe.employe_work')->with('employe',$id);
    }
}
