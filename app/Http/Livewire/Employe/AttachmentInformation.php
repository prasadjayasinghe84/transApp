<?php

namespace App\Http\Livewire\Employe;

use Illuminate\Support\Facades\DB;
use App\Models\EmployeAttachment;
use App\Models\DirectorSection;
use App\Models\SubUnitSection;
use App\Models\SubSection;
use Livewire\Component;

class AttachmentInformation extends Component
{

    public $employeAttachment, $post;
    public $director_sections;
    public $sub_unit_sections;
    public $sub_sections;

    public $selectedDirector = null;
    public $selectedSubUnitSection = null;
    public $selectedSubSection = null;
    public $attaSelectedDirector = null;
    public $attaSelectedSubUnitSection = null;
    public $attaSelectedSubSection = null;
    public $r_from, $r_to, $period;

    protected $rules = [
        'selectedDirector' => 'required',
        'selectedSubUnitSection' => 'required',
        'selectedSubSection' => 'required',
        'attaSelectedDirector' => 'required',
        'attaSelectedSubUnitSection' => 'required',
        'attaSelectedSubSection' => 'required',
        'r_from' => 'required',
        'r_to' => 'required',
        'period' => 'required',

    ];

    public function render()
    {


        $data = DB::table('employe_attachments')
            ->join('director_sections', 'employe_attachments.f_director_section_id', '=', 'director_sections.id')

            ->join('sub_unit_sections', 'employe_attachments.f_sub_unit_section_id', '=', 'sub_unit_sections.id')
            ->join('sub_sections', 'employe_attachments.f_sub_section_id', '=', 'sub_sections.id')

            ->select('director_sections.*', 'sub_unit_sections.*', 'sub_sections.*')->where('employe_attachments.employe_details_id', "=", $this->post)
            ->get();

        $data2 = DB::table('employe_attachments')
            ->join('director_sections', 'employe_attachments.a_director_section_id', '=', 'director_sections.id')

            ->join('sub_unit_sections', 'employe_attachments.a_sub_unit_section_id', '=', 'sub_unit_sections.id')
            ->join('sub_sections', 'employe_attachments.a_sub_section_id', '=', 'sub_sections.id')

            ->select('director_sections.*', 'sub_unit_sections.*', 'sub_sections.*', 'employe_attachments.*')->where('employe_attachments.employe_details_id', "=", $this->post)
            ->get();

        return view('livewire.employe.attachment-information', compact('data', 'data2'));
    }
    public function mount()
    {


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
    public function store()
    {
        $this->validate();

        EmployeAttachment::create([
            'employe_details_id' => $this->post,
            'f_director_section_id' => $this->selectedDirector,
            'edit_f_director_section_id' => $this->selectedDirector,

            'f_sub_unit_section_id' => $this->selectedSubUnitSection,
            'edit_f_sub_unit_section_id' => $this->selectedSubUnitSection,

            'f_sub_section_id' => $this->selectedSubUnitSection,
            'edit_f_sub_section_id' => $this->selectedSubUnitSection,

            'a_director_section_id' => $this->attaSelectedDirector,
            'edit_a_director_section_id' => $this->attaSelectedDirector,

            'a_sub_unit_section_id' => $this->attaSelectedSubUnitSection,
            'edit_a_sub_unit_section_id' => $this->attaSelectedSubUnitSection,

            'a_sub_section_id' => $this->attaSelectedSubUnitSection,
            'edit_a_sub_section_id' => $this->attaSelectedSubUnitSection,

            'r_from' => date('Y-m-d', strtotime($this->r_from)),
            'edit_r_from' => date('Y-m-d', strtotime($this->r_from)),
            'r_to' => date('Y-m-d', strtotime($this->r_to)),
            'edit_r_to' => date('Y-m-d', strtotime($this->r_to)),
            'period' => $this->period,
            'edit_period' => $this->period
        ]);
    }
    public function delete($id)
    {

        EmployeAttachment::where('id', $id)->delete();
    }

    public function next($id)
    {
        return redirect(route('employe.employe_markes', $id));
    }
}
