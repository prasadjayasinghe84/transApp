<?php

namespace App\Http\Livewire\Employe;

use App\Models\EmployeLeaveRecord;
use App\Models\DirectorSection;
use App\Models\SubUnitSection;
use App\Models\SubSection;
use Livewire\Component;

class LeaveInformation extends Component

{

    public $employeLeaveRecords,$post;
    public $director_sections;
    public $sub_unit_sections;
    public $sub_sections;

    public $selectedDirector = null;
    public $selectedSubUnitSection = null;
    public $selectedSubSection = null;
    public $r_from, $r_to, $leave_type;

    protected $rules = [
        'selectedDirector' => 'required',
        'r_from' => 'required',
        'r_to' => 'required',
        'leave_type' => 'required',
    ];

    public function render()
    {
        $collector = EmployeLeaveRecord::join('director_sections', 'employe_leave_records.director_section_id', '=', 'director_sections.id')
            ->join('sub_unit_sections', 'employe_leave_records.sub_unit_section_id', '=', 'sub_unit_sections.id')
            ->join('sub_sections', 'employe_leave_records.sub_section_id', '=', 'sub_sections.id')
            ->select('employe_leave_records.id', 'employe_leave_records.r_from', 'employe_leave_records.r_to', 'employe_leave_records.leave_type', 'director_sections.d_name as dname', 'sub_sections.section_name as uname', 'sub_unit_sections.sub_name  as sname')
            ->where('employe_details_id',$this->post)
            ->get();

        return view('livewire.employe.leave-information', [$this->employeLeaveRecords = $collector]);
    }
    public function mount()
    {
        // $this->employeServiceRecords = EmployeServiceRecords::all();
        $this->employeLeaveRecords = EmployeLeaveRecord::join('director_sections', 'employe_leave_records.director_section_id', '=', 'director_sections.id')
            ->join('sub_unit_sections', 'employe_leave_records.sub_unit_section_id', '=', 'sub_unit_sections.id')
            ->join('sub_sections', 'employe_leave_records.sub_section_id', '=', 'sub_sections.id')
            ->select('employe_leave_records.id', 'employe_leave_records.r_from', 'employe_leave_records.r_to', 'employe_leave_records.leave_type', 'director_sections.d_name as dname', 'sub_sections.section_name as uname', 'sub_unit_sections.sub_name  as sname')
            ->where('employe_details_id',$this->post)->get();
        $this->director_sections = DirectorSection::all();
        $this->sub_unit_sections = collect();
        $this->sub_sections = collect();
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

    public function leaveStore()
    {
        $this->validate();

        EmployeLeaveRecord::create([
            'employe_details_id' => $this->post,
            'director_section_id' => $this->selectedDirector,
            'edit_director_section_id' => $this->selectedDirector,
            'sub_unit_section_id' => $this->selectedSubUnitSection,
            'edit_sub_unit_section_id' => $this->selectedSubUnitSection,
            'sub_section_id' => $this->selectedSubSection,
            'edit_sub_section_id' => $this->selectedSubSection,
            'r_from' => date('Y-m-d', strtotime($this->r_from)),
            'edit_r_from' => date('Y-m-d', strtotime($this->r_from)),
            'r_to' => date('Y-m-d', strtotime($this->r_to)),
            'edit_r_to' => date('Y-m-d', strtotime($this->r_to)),
            'leave_type' => $this->leave_type,
            'edit_leave_type' => $this->leave_type
        ]);
        
    }
    public function delete($id)
    {

        EmployeLeaveRecord::where('id', $id)->delete();
    }
}
