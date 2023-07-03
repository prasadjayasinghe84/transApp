<?php

namespace App\Http\Livewire\Employe;

use App\Models\DirectorSection;
use App\Models\SubUnitSection;
use App\Models\SubSection;
use App\Models\Province;
use App\Models\District;
use App\Models\DSDivision;
use App\Models\SalaryCode;
use App\Models\Designation;
use App\Models\Reason;
use App\Models\EmployeDetail;
use App\Models\EmployeWorkDetail;
use App\Models\EmployeFamilyDetail;
use App\Models\EmployeServiceRecords;
use App\Models\EmployeLeaveRecord;
use App\Models\EmployeMarkesDetail;
use App\Models\TranserRequest;
use App\Models\TranserRequestReason;
use Livewire\Component;

class EmployeSubmitionReview extends Component
{
    public $post;
    public $employeLeaveRecords, $employeFamilyDetails, $employeWorkDetails, $employeServiceRecords, $employeMarkesDetail, $transerRequests, $reasons;
    public $director_sections;
    public $sub_unit_sections;
    public $sub_sections, $provinces, $districtss, $DSDivisions, $name_with_initials,
        $name_other_language, $name_donoted_initials, $nic, $tel_number_mobile, $tel_number_whatsapp, $email, $date_of_birth, $age_year,
        $age_month, $gender, $civil_states, $address_perment, $address_temp, $city,
        $selectedSalary, $selectedDesignation, $class, $appoiment_number, $appoiment_date,
        $sub_section_id, $land_phone, $fax, $email_1,
        $appoiment_date_agri_department, $date_appoint_current_work, $period_appoint_current_work_year, $period_appoint_current_work_month,
        $a_markes, $b_markes, $c_markes, $d_markes, $e_markes, $f_markes, $total, $reasons_id, $other;

    public $salary_codes = null;
    public $designations = null;
    public $selectedProvince = null;
    public $selectedDistrict = null;
    public $selectedDSDivision = null;
    public $selectedDirector = null;
    public $selectedSubUnitSection = null;
    public $selectedSubSection = null;
    //edit modal
    public $showModalname = false;
    public function render()
    {
        
        return view('livewire.employe.employe-submition-review');
    }



    public function mount()

    {
       
        $employeDetails = EmployeDetail::where('id', $this->post)->first();
        $this->name_with_initials = $employeDetails->name_with_initials;
        $this->name_other_language = $employeDetails->name_other_language;
        $this->name_donoted_initials = $employeDetails->name_donoted_initials;
        $this->nic = $employeDetails->nic;
        $this->tel_number_mobile = $employeDetails->tel_number_mobile;
        $this->tel_number_whatsapp = $employeDetails->tel_number_whatsapp;
        $this->email = $employeDetails->email;
        $this->date_of_birth = $employeDetails->date_of_birth;
        $this->age_year = $employeDetails->age_year;
        $this->age_month = $employeDetails->age_month;
        $this->gender = $employeDetails->gender;
        $this->civil_states = $employeDetails->civil_states;
        $this->address_perment = $employeDetails->address_perment;
        $this->address_perment = $employeDetails->address_perment;
        $this->address_temp = $employeDetails->address_temp;
        $this->city = $employeDetails->city;

        $this->selectedProvince = $employeDetails->province->name;
        $this->selectedDistrict = $employeDetails->district->name;
        $this->selectedDSDivision = $employeDetails->dSDivision->name;
         $this->provinces = Province::all();
         $this->districtss = District::where('province_id', $this->selectedProvince)->get();
          $this->DSDivisions = DSDivision::where('district_Id', $this->selectedDistrict)->get();

       

        $this->employeFamilyDetails = EmployeFamilyDetail::where('employe_details_id', $this->post)->get();
        $employeWorkDetails = EmployeWorkDetail::where('employe_detail_id',$this->post)->first();

        $this->salary_codes = SalaryCode::all();
        $this->selectedSalary = $employeWorkDetails->salary_code_id;
        $this->designations = Designation::where('salary_code_id', $this->selectedSalary)->get();
        $this->selectedDesignation = $employeWorkDetails->designation_id;
        $this->class = $employeWorkDetails->class;
        $this->appoiment_number = $employeWorkDetails->appoiment_number;
        $this->appoiment_date = $employeWorkDetails->appoiment_date;
       // $this->director_sections = DirectorSection::all();
        $this->selectedDirector = $employeWorkDetails->directorSection->d_name;
       // $this->sub_unit_sections = SubUnitSection::where('director_sections_id', $this->selectedDirector)->get();

        $this->selectedSubUnitSection = $employeWorkDetails->subUnitSection->sub_name;
       // $this->sub_sections = SubSection::where('sub_unit_id', $this->selectedSubUnitSection)->get();
        //$this->sub_section_id = $employeWorkDetails->sub_section_id;
        $this->selectedSubSection=$employeWorkDetails->subSection->section_name;
        $this->land_phone = $employeWorkDetails->land_phone;
        $this->email_1 = $employeWorkDetails->email;
        $this->appoiment_date_agri_department = $employeWorkDetails->appoiment_date_agri_department;
        $this->date_appoint_current_work = $employeWorkDetails->date_appoint_current_work;
        $this->period_appoint_current_work_year = $employeWorkDetails->period_appoint_current_work_year;
        $this->period_appoint_current_work_month = $employeWorkDetails->period_appoint_current_work_month;
        // /// $this->employeServiceRecords = EmployeServiceRecords::where('employe_details_id', 1)->first();
        $this->employeServiceRecords = EmployeServiceRecords::join('director_sections', 'employe_service_records.director_section_id', '=', 'director_sections.id')
            ->join('sub_unit_sections', 'employe_service_records.sub_unit_section_id', '=', 'sub_unit_sections.id')
            ->join('sub_sections', 'employe_service_records.sub_section_id', '=', 'sub_sections.id')
            ->select('employe_service_records.id', 'employe_service_records.r_from', 'employe_service_records.r_to', 'employe_service_records.period', 'director_sections.d_name as dname', 'sub_sections.section_name as uname', 'sub_unit_sections.sub_name  as sname')
            ->where('employe_details_id', $this->post)->get();
        $this->employeLeaveRecords = EmployeLeaveRecord::join('director_sections', 'employe_leave_records.director_section_id', '=', 'director_sections.id')
            ->join('sub_unit_sections', 'employe_leave_records.sub_unit_section_id', '=', 'sub_unit_sections.id')
            ->join('sub_sections', 'employe_leave_records.sub_section_id', '=', 'sub_sections.id')
            ->select('employe_leave_records.id', 'employe_leave_records.r_from', 'employe_leave_records.r_to', 'employe_leave_records.leave_type', 'director_sections.d_name as dname', 'sub_sections.section_name as uname', 'sub_unit_sections.sub_name  as sname')
            ->where('employe_details_id', $this->post)->get();

        $employeMarkesDetails = EmployeMarkesDetail::where('employe_details_id',$this->post)->first();
        $this->a_markes = $employeMarkesDetails->mark_a;
        $this->b_markes = $employeMarkesDetails->mark_b_1;
        $this->c_markes = $employeMarkesDetails->mark_b_2;
        $this->d_markes = $employeMarkesDetails->mark_b_3;
        $this->e_markes = $employeMarkesDetails->mark_c;
        $this->f_markes = $employeMarkesDetails->mark_d;
        $this->total = $employeMarkesDetails->mark_tot;

        $this->transerRequests = TranserRequest::join('director_sections', 'transer_requests.director_section_id', '=', 'director_sections.id')
            ->join('sub_unit_sections', 'transer_requests.sub_unit_section_id', '=', 'sub_unit_sections.id')
            ->join('sub_sections', 'transer_requests.sub_section_id', '=', 'sub_sections.id')
            ->select('transer_requests.id', 'transer_requests.priority', 'director_sections.d_name as dname', 'sub_sections.section_name as uname', 'sub_unit_sections.sub_name  as sname')
            ->where('transer_requests.employe_details_id', $this->post)
            ->orderBy('transer_requests.priority', 'asc')->get();



        $transerRequestReason = TranserRequestReason::where('employe_details_id',$this->post)->first();
        $this->reasons = Reason::all();
        $this->reasons_id = $transerRequestReason->reasons_id;
        $this->other = $transerRequestReason->other;
    }

    public function next()
    {
       //return redirect('employe/employe_work')->with('employe',$id);
        return redirect(route('employe.pdfDownload', $this->post));
        
    }

    public function editLocation(){

        
    }
    
}
