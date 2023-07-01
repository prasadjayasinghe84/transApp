<?php

namespace App\Http\Livewire\Employe;

use App\Models\TranserRequest;
use App\Models\TranserRequestReason;
use App\Models\DirectorSection;
use App\Models\SubUnitSection;
use App\Models\SubSection;
use App\Models\Reason;
use Livewire\Component;

class RequestsInformation extends Component
{

    public $post;
    public $director_sections_one;
    public $director_sections_two;
    public $director_sections_three;
    public $sub_unit_sections_one;
    public $sub_unit_sections_two;
    public $sub_unit_sections_three;
    public $sub_sections_one;
    public $sub_sections_two;
    public $sub_sections_three;
    public $reasons;
    public $other;


    public $selectedDirectorOne = null;
    public $selectedDirectorTwo = null;
    public $selectedDirectorThree = null;
    public $selectedSubUnitSectionOne = null;
    public $selectedSubUnitSectionTwo = null;
    public $selectedSubUnitSectionThree = null;
    public $selectedSubSectionOne = null;
    public $selectedSubSectionTwo = null;
    public $selectedSubSectionThree = null;
    public $selectedReason = null;

    protected $rules = [
        'selectedDirectorOne' => 'required',
        'selectedDirectorTwo' => 'required',
        'selectedDirectorThree' => 'required',
        'selectedSubUnitSectionOne' => 'required',
        'selectedSubUnitSectionTwo' => 'required',
        'selectedSubUnitSectionThree' => 'required',
        'selectedSubSectionOne' => 'required',
        'selectedSubSectionTwo' => 'required',
        'selectedSubSectionThree' => 'required',
        'selectedReason' => 'required',
    ];

    public function render()
    {
        return view('livewire.employe.requests-information');
    }

    public function mount()
    {
        $this->director_sections_one = DirectorSection::all();
        $this->director_sections_two = DirectorSection::all();
        $this->director_sections_three = DirectorSection::all();
        $this->reasons = Reason::all();
        $this->sub_unit_sections_one = collect();
        $this->sub_unit_sections_two = collect();
        $this->sub_unit_sections_three = collect();
        $this->sub_sections_one = collect();
        $this->sub_sections_two = collect();
        $this->sub_sections_three = collect();
    }
    public function updatedSelectedDirectorOne($director_section_one)
    {
        $this->sub_unit_sections_one = SubUnitSection::where('director_sections_id', $director_section_one)->get();
        $this->selectedSubUnitSectionOne = NULL;
    }
    public function updatedSelectedDirectorTwo($director_section_two)
    {
        $this->sub_unit_sections_two = SubUnitSection::where('director_sections_id', $director_section_two)->get();
        $this->selectedSubUnitSectionTwo = NULL;
    }
    public function updatedSelectedDirectorThree($director_section_three)
    {
        $this->sub_unit_sections_three = SubUnitSection::where('director_sections_id', $director_section_three)->get();
        $this->selectedSubUnitSectionThree = NULL;
    }
    public function updatedSelectedSubUnitSectionOne($sub_unit_section_one)
    {
        $this->sub_sections_one = SubSection::where('sub_unit_id', $sub_unit_section_one)->get();
        $this->selectedSubSectionOne = NULL;
    }
    public function updatedSelectedSubUnitSectionTwo($sub_unit_section)
    {
        $this->sub_sections_two = SubSection::where('sub_unit_id', $sub_unit_section)->get();
        $this->selectedSubSectionTwo = NULL;
    }
    public function updatedSelectedSubUnitSectionThree($sub_unit_section)
    {
        $this->sub_sections_three = SubSection::where('sub_unit_id', $sub_unit_section)->get();
        $this->selectedSubSectionThree = NULL;
    }

    public function save()
    {
        $this->validate();
        TranserRequest::create([
            'employe_details_id' => $this->post,
            'priority' => 1,
            'director_section_id' => $this->selectedDirectorOne,
            'sub_unit_section_id' => $this->selectedSubUnitSectionOne,
            'sub_section_id' => $this->selectedSubSectionOne,
        ]);
        TranserRequest::create([
            'employe_details_id' => $this->post,
            'priority' => 2,
            'director_section_id' => $this->selectedDirectorTwo,
            'sub_unit_section_id' => $this->selectedSubUnitSectionTwo,
            'sub_section_id' => $this->selectedSubSectionTwo,
        ]);
        TranserRequest::create([
            'employe_details_id' => $this->post,
            'priority' => 3,
            'director_section_id' => $this->selectedDirectorThree,
            'sub_unit_section_id' => $this->selectedSubUnitSectionThree,
            'sub_section_id' => $this->selectedSubSectionThree,
        ]);
        TranserRequestReason::create([
            'employe_details_id' => $this->post,
            'reasons_id' => $this->selectedReason,
            'other' => $this->other,

        ]);


        // return redirect('employe/employe_review');
        return redirect(route('employe.employe_submit_review', $this->post));
    }
}
