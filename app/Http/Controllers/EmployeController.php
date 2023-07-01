<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\District;
use App\Models\DSDivision;
use App\Models\EmployeDetail;
use App\Models\EmployeWorkDetail;
use App\Models\EmployeFamilyDetail;
use App\Models\EmployeServiceRecords;
use App\Models\EmployeLeaveRecord;
use App\Models\EmployeMarkesDetail;
use App\Models\TranserRequest;
use App\Models\TranserRequestReason;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use Barryvdh\DomPDF\Facade\Pdf;
class EmployeController extends Controller
{
    public function index()
    {
        $provinces = Province::all();
        return view('employe.index', compact('provinces'));
    }
    public function show_f($id)
    {
        return view('employe.employe_family')->with('post', $id);
    }
    public function show_w($id)
    {
        return view('employe.employe_work')->with('post', $id);
        // return view('employe.employe_work');
    }
    public function show_s($id)
    {
        return view('employe.employe_service')->with('post', $id);
    }
    public function show_m($id)
    {

        $sal_code = EmployeWorkDetail::where('employe_detail_id', $id)->first();
        $code = $sal_code->salaryCode->code;
        if ($code == 3 | 5) {

            return view('employe.employe_markes')->with('post', $id);;
        } elseif ($code == 2 | 4 | 9) {
            return view('employe.employe_markes_other')->with('post', $id);;
        }
    }
    public function show_r($id)
    {
        return view('employe.employe_request')->with('post', $id);
    }
    public function show_s_r($id)
    {
        return view('employe.employe_submition_review')->with('post', $id);
    }
    public function show_end($id)
    {
        $inf=str_pad($id,6, "0", STR_PAD_LEFT);
       // return view('employe.employe_submition_review')->with('post', $id);
    }


    public function create()
    {
        //
    }

    public function store_personal(Request $request)
    {
        $this->validate(
            $request,
            [
                'name_with_initials' => 'required',
                'name_donoted_initials' => 'required',
                'nic' => 'required| unique:employe_details|max:10',
                'tel_number_mobile' => 'required',
                'tel_number_whatsapp' => 'required',
                'email' => 'required',
                'date_of_birth' => 'required',
                'age_year' => 'required',
                'age_month' => 'required',
                'gender' => 'required',
                'civil_states' => 'required',
                'address_perment' => 'required',
                'dsDivision' => 'required',
                'district' => 'required',
                'province' => 'required',

            ],
            [
                'name_with_initials.required' => ' Name with initials field can not be blank.',
                'name_donoted_initials.required' => 'Name donoted by initials field can not be blank.',
                'nic.unique' => 'National Identity card number already exists.',
                'nic.required' => 'National Identity card number field can not be blank.',

                'nic.max' => 'Not a National Identity card number',
                'tel_number_mobile.required' => 'Mobile number field can not be blank.',
                'tel_number_whatsapp.required' => 'Whatsapp number field can not be blank.',
                'email.required' => 'Email field can not be blank.',
                'date_of_birth.required' => 'Date of birth field can not be blank.',
                'age_year.required' => 'age field can not be blank.',
                'age_month.required' => 'Age field can not be blank.',
                'gender.required' => 'Gender field can not be blank.',
                'civil_states.required' => 'Civil States field can not be blank.',
                'dsDivision' => 'District Secretariat  field can not be blank.',
                'district.required' => ' District field can not be blank.',
                'province.required' => ' Province field can not be blank.',
            ]
        );


        $data = EmployeDetail::create([

            'name_with_initials' => $request->input('name_with_initials'),
            'edit_name_with_initials' => $request->input('name_with_initials'),

            'name_other_language' => $request->input('name_other_language'),
            'edit_name_other_language' => $request->input('name_other_language'),

            'name_donoted_initials' => $request->input('name_donoted_initials'),
            'edit_name_donoted_initials' => $request->input('name_donoted_initials'),

            'nic' => $request->input('nic'),
            'edit_nic' => $request->input('nic'),

            'tel_number_mobile' => $request->input('tel_number_mobile'),
            'edit_tel_number_mobile' => $request->input('tel_number_mobile'),

            'tel_number_whatsapp' => $request->input('tel_number_whatsapp'),
            'edit_tel_number_whatsapp' => $request->input('tel_number_whatsapp'),

            'email' => $request->input('email'),
            'edit_email' => $request->input('email'),

            'date_of_birth' => date('Y-m-d', strtotime($request->input('date_of_birth'))),
            'edit_date_of_birth' => date('Y-m-d', strtotime($request->input('date_of_birth'))),

            'age_year' => $request->input('age_year'),
            'edit_age_year' => $request->input('age_year'),

            'age_month' => $request->input('age_month'),
            'edit_age_month' => $request->input('age_month'),

            'gender' => $request->input('gender'),
            'edit_gender' => $request->input('gender'),

            'civil_states' => $request->input('civil_states'),
            'edit_civil_states' => $request->input('civil_states'),

            'address_perment' => $request->input('address_perment'),
            'edit_address_perment' => $request->input('address_perment'),

            'address_temp' => $request->input('address_temp'),
            'edit_address_temp' => $request->input('address_temp'),

            'city' => $request->input('city'),
            'edit_city' => $request->input('city'),

            'dsd_id' => $request->input('dsDivision'),
            'edit_dsd_id' => $request->input('dsDivision'),

            'district_id' => $request->input('district'),
            'edit_district_id' => $request->input('district'),

            'province_id' => $request->input('province'),
            'edit_province_id' => $request->input('province')

        ]);

        /// return redirect(route('employe.family_infor',$data->id));
        // return redirect('employe.family_infor')->with('employe',$data->id);
       
        return view('employe.employe_family')->with('post', $data->id);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    public function pdfDownload($id)
    {

        $employeDetail = EmployeDetail::where('id', $id)->first();

        $employeFamilyDetails = EmployeFamilyDetail::where('employe_details_id', $id)->get();
        $employeWorkDetail = EmployeWorkDetail::where('employe_detail_id', $id)->first();
        $employeServiceRecords = EmployeServiceRecords::where('employe_details_id', $id)->get();
        $employeServiceRecords = EmployeServiceRecords::join('director_sections', 'employe_service_records.director_section_id', '=', 'director_sections.id')
            ->join('sub_unit_sections', 'employe_service_records.sub_unit_section_id', '=', 'sub_unit_sections.id')
            ->join('sub_sections', 'employe_service_records.sub_section_id', '=', 'sub_sections.id')
            ->select('employe_service_records.id', 'employe_service_records.r_from', 'employe_service_records.r_to', 'employe_service_records.period', 'director_sections.d_name as dname', 'sub_sections.section_name as uname', 'sub_unit_sections.sub_name  as sname')
            ->where('employe_details_id', $id)->get();
        $employeLeaveRecords = EmployeLeaveRecord::join('director_sections', 'employe_leave_records.director_section_id', '=', 'director_sections.id')
            ->join('sub_unit_sections', 'employe_leave_records.sub_unit_section_id', '=', 'sub_unit_sections.id')
            ->join('sub_sections', 'employe_leave_records.sub_section_id', '=', 'sub_sections.id')
            ->select('employe_leave_records.id', 'employe_leave_records.r_from', 'employe_leave_records.r_to', 'employe_leave_records.leave_type', 'director_sections.d_name as dname', 'sub_sections.section_name as uname', 'sub_unit_sections.sub_name  as sname')
            ->where('employe_details_id', $id)->get();

        $employeMarkesDetail = EmployeMarkesDetail::where('employe_details_id', $id)->first();
        $transerRequests = TranserRequest::join('director_sections', 'transer_requests.director_section_id', '=', 'director_sections.id')
            ->join('sub_unit_sections', 'transer_requests.sub_unit_section_id', '=', 'sub_unit_sections.id')
            ->join('sub_sections', 'transer_requests.sub_section_id', '=', 'sub_sections.id')
            ->select('transer_requests.id', 'transer_requests.priority', 'director_sections.d_name as dname', 'sub_sections.section_name as uname', 'sub_unit_sections.sub_name  as sname')
            ->where('transer_requests.employe_details_id', $id)
            ->orderBy('transer_requests.priority', 'asc')->get();
        $transerRequestReason = TranserRequestReason::where('employe_details_id', $id)->first();


       // return view('employe.pdf_view', compact('employeDetail', 'employeFamilyDetails', 'employeWorkDetail', 'employeServiceRecords', 'employeLeaveRecords', 'employeMarkesDetail', 'transerRequests', 'transerRequestReason'));
       
       $pdf = PDF::loadView('employe.pdf_view', compact('employeDetail', 'employeFamilyDetails', 'employeWorkDetail', 'employeServiceRecords', 'employeLeaveRecords', 'employeMarkesDetail', 'transerRequests', 'transerRequestReason'));    
        $file_name='reg_from_'. $id .'.pdf';
      
        return $pdf->download($file_name);
    
    }
    public function getDistricts($Id)
    {
        $districts = District::where('province_id', $Id)->get();

        return response()->json($districts);
    }
    public function getDSDivisions($Id)
    {
        $dSDivisions = DSDivision::where('district_id', $Id)->get();

        return response()->json($dSDivisions);
    }
}
