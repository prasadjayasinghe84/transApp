<?php

namespace App\Http\Livewire\Employe;

use App\Models\SalaryCode;
use App\Models\Designation;
use App\Models\DirectorSection;
use App\Models\SubUnitSection;
use App\Models\SubSection;
use App\Models\EmployeWorkDetail;
use Livewire\Component;

class WorkInformation extends Component
{
    public $post;
    public $salary_codes;
    public $designations;
    public $director_sections;
    public $sub_unit_sections;
    public $sub_sections;

    public $selectedSalary = null;
    public $selectedDesignation = null;
    public $selectedDirector = null;
    public $selectedSubUnitSection = null;
    public $selectedSubSection = null;
    public $employe_detail_id, $class, $appoiment_number, $appoiment_date, $land_phone, $fax, $email, $appoiment_date_agri_department, $date_appoint_current_work, $period_appoint_current_work_year, $period_appoint_current_work_month;

    protected $rules = [
        'selectedSalary' => 'required',
        'selectedDesignation' => 'required',
        'class' => 'required',
        'selectedDirector' => 'required',
        'appoiment_date' => 'required',
        'appoiment_date_agri_department' => 'required',
        'date_appoint_current_work' => 'required',
        'period_appoint_current_work_year' => 'required',
        'period_appoint_current_work_month' => 'required',
       


    ];

    public function render()
    {
        return view('livewire.employe.work-information');
    }

    public function mount()
    {
        
        $this->salary_codes = SalaryCode::all();
        $this->designations = collect();
        $this->director_sections = DirectorSection::all();
        $this->sub_unit_sections = collect();
        $this->sub_sections = collect();
    }
    public function updatedSelectedSalary($salary_code)
    {
        $this->designations = Designation::where('salary_code_id', $salary_code)->get();
         $this->selectedDesignation = NULL;
    }
    public function updatedSelectedDirector($director_section)
    {
        $this->sub_unit_sections = SubUnitSection::where('director_sections_id', $director_section)->get();
        $this->selectedSubUnitSection = NULL;
    }
    public function updatedSelectedSubUnitSection($sub_unit_section)
    {
        $this->sub_sections = SubSection::where('sub_unit_id', $sub_unit_section)->get();
        $this->selectedSubSection = NULL;
    }
    public function save()
    {

       
        $this->validate();

        EmployeWorkDetail::create([
            'employe_detail_id' => $this->post,

            'salary_code_id' => $this->selectedSalary,
            'edit_salary_code_id' => $this->selectedSalary,

            'designation_id' => $this->selectedDesignation,
            'edit_designation_id' => $this->selectedDesignation,

            'class' => $this->class,
            'edit_class' => $this->class,

            'appoiment_number' => $this->appoiment_number,
            'edit_appoiment_number' => $this->appoiment_number,

            'appoiment_date' => date('Y-m-d', strtotime( $this->appoiment_date)),
            'edit_appoiment_date' => date('Y-m-d', strtotime( $this->appoiment_date)),

            'director_section_id' => $this->selectedDirector,
            'edit_director_section_id' => $this->selectedDirector,
            'sub_unit_section_id' => $this->selectedSubUnitSection,
            'edit_sub_unit_section_id' => $this->selectedSubUnitSection,
            'sub_section_id' => $this->selectedSubSection,
            'edit_sub_section_id' => $this->selectedSubSection,

            'land_phone' => $this->land_phone,
            'edit_land_phone' => $this->land_phone,

            'fax' => $this->fax,
            'edit_fax' => $this->fax,

            'email' =>  $this->email,
            'edit_email' =>  $this->email,

            'appoiment_date_agri_department' => date('Y-m-d', strtotime( $this->appoiment_date_agri_department)),
            'edit_appoiment_date_agri_department' => date('Y-m-d', strtotime( $this->appoiment_date_agri_department)),

            'date_appoint_current_work' =>  date('Y-m-d', strtotime($this->date_appoint_current_work)),
            'edit_date_appoint_current_work' =>  date('Y-m-d', strtotime($this->date_appoint_current_work)),

            'period_appoint_current_work_year' => $this->period_appoint_current_work_year,
            'edit_period_appoint_current_work_year' => $this->period_appoint_current_work_year,

            'period_appoint_current_work_month' => $this->period_appoint_current_work_month,
            'edit_period_appoint_current_work_month' => $this->period_appoint_current_work_month,

        ]);

         return redirect(route('employe.employe_service',$this->post));
        
        
    }
}
