<?php

namespace App\Http\Livewire\Employe;
use App\Models\EmployeDetail;
use App\Models\Province;
use App\Models\District;
use App\Models\DSDivision;
use Livewire\Component;

class ShowPosts extends Component
{

    public $post;
    public $province_sections;
    public $distrt_sections;
    public $dsdivision_sections;

    public $selectedProvince;
    public $selectedDistrict;
    public $selectedDSDivision;
    public function render()
    {
        return view('livewire.employe.show-posts');
    }
public function mount(){
    $this->province_sections = Province::all();
    $employeDetails = EmployeDetail::where('id', $this->post)->first();

    $this->selectedProvince = $employeDetails->province->id;
   // dd( $this->selectedProvince );
    $this->selectedDistrict = $employeDetails->district->id;

   
    $this->distrt_sections = District::where('province_id', $this->selectedProvince )->get();
    $this->selectedDSDivision = $employeDetails->dSDivision->id;
    $this->dsdivision_sections = DSDivision::where('district_id',  $this->selectedDistrict )->get();
       // $this->distrt_sections = collect();
      //  $this->dsdivision_sections = collect();
    
}

public function updatedSelectedProvince($director_section)
    {
        $this->distrt_sections = District::where('province_id', $director_section)->get();
       // $this->selectedSubUnitSection = NULL;
    }
    public function updatedSelectedDistrict($sub_unit_section)
    {
        $this->dsdivision_sections = DSDivision::where('district_id', $sub_unit_section)->get();
       // $this->selectedSubSection = NULL;
    }

}
