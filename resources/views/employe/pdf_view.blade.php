<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background: rgb(204, 204, 204);
        }

        page {
            background: white;
            display: block;
            margin: 0 auto;
            

        }

        page[size="A4"] {
            width: 210mm;
            height: 297mm;
        }

        table,
        td,
        th {
            border: 1px solid;
        }

        table {
            width: 90%;
            border-collapse: collapse;
        }

        .left_align {
            text-align: right;
        }

        .border_f {
            border-radius: 5px;
            border: 2px solid #73AD21;

        }


        .col-20 {
            float: left;
            width: 20%;
            margin-top: 4px;

        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 4px;

        }

        .col-40 {
            float: left;
            width: 45%;
            margin-top: 4px;

        }

        .col-60 {
            float: left;
            width: 55%;
            margin-top: 4px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 4px;
        }

        /* Clear floats after the columns */
        .row:after {
            padding-top: 3px;
            content: "";
            display: table;
            clear: both;

        }

        .malign-40 {
            margin-left: 40px;

        }
    </style>
</head>

<body>
    <page size="A4">
        <div style="text-align: center;font-weight: bold; font-size:16px; margin-bottom:0em">Automated Internal Annual
            Transfer Application
        </div>
        <div style="text-align: center;font-weight: bold; font-size:16px; margin-top:0em">(for AI, RA, TA)</div>


        <div class="row malign-40">
            <div class="col-20"><b>Salary Code :</b> </div>
            <div class="col-20">{{ $employeWorkDetail->salaryCode->code }}</div>
            <div class="col-20"><b>Designation : </b> </div>
            <div class="col-20">{{ $employeWorkDetail->designation->name }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b> 1. Name With Initials :</b></div>
            <div class="col-60">{{ $employeDetail->name_with_initials }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b> 2. Name in Sinhala/Tamil</b></div>
            <div class="col-60">{{ $employeDetail->name_other_language }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b> 3. Name denoted by initials :</b></div>
            <div class="col-60">{{ $employeDetail->name_donoted_initials }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b> 4. NIC </b></div>
            <div class="col-60">{{ $employeDetail->nic }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b> 5. Telephone Number :</b></div>
        </div>
        <div class="row malign-40">
            <div class="col-40">Mobile:</div>
            <div class="col-60">{{ $employeDetail->tel_number_mobile }} </div>
        </div>
        <div class="row malign-40">
            <div class="col-40">Whatsapp:</div>
            <div class="col-60">{{ $employeDetail->tel_number_whatsapp }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>6. E - mail Address</b></div>
            <div class="col-60">{{ $employeDetail->email }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>7. Date of Birth </b></div>
            <div class="col-60">{{ $employeDetail->date_of_birth }}</div>
        </div>

        <div class="row">
            <div class="col-40"><b>8. Age at 2023.12.31 </b></div>
            <div class="col-60"></div>
        </div>
        <div class="row malign-40">
            <div class="col-20"> Years </div>
            <div class="col-20">{{ $employeDetail->age_year }}</div>
            <div class="col-20">Months </div>
            <div class="col-20">{{ $employeDetail->age_month }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>9. Gender </b></div>
            <div class="col-60">{{ $employeDetail->gender }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>10. Civil States</b></div>
            <div class="col-60">{{ $employeDetail->civil_states }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>11. Address</b></div>

        </div>
        <div class="row malign-40">
            <div class="col-40">Permanent</div>
            <div class="col-60">{{ $employeDetail->address_perment }}</div>
        </div>
        <div class="row malign-40">
            <div class="col-40">Present/ Temporary </div>
            <div class="col-60">{{ $employeDetail->address_temp }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>12. City :</b></div>
            <div class="col-60">{{ $employeDetail->city }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>13. Divisional Secretariat : </b></div>
            <div class="col-60">{{ $employeDetail->dSDivision->name }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>14. District :</b></div>
            <div class="col-60">{{ $employeDetail->district->name }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>15. Province :</b></div>
            <div class="col-60">{{ $employeDetail->province->name }}</div>
        </div>

        <div class="row">
            <div class="col-40"><b>16. Family Information : </b></div>
            <div class="col-60"></div>
            <div class="row malign-40">
                <table class="table">
                    <thead>
                        <tr>
                            <th> Name</th>
                            <th>Relation</th>
                            <th> NIC</th>
                            <th> Date of Birth</th>
                            <th> Workplace/School</th>
                            <th> Designation</th>

                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($employeFamilyDetails as $employeFamilyDetail)
                            <tr>

                                <td>{{ $employeFamilyDetail->full_name }}</td>
                                <td>{{ $employeFamilyDetail->relationship }}</td>
                                <td>{{ $employeFamilyDetail->family_nic }}</td>
                                <td>{{ $employeFamilyDetail->date_of_birth }}</td>
                                <td>{{ $employeFamilyDetail->work_place }}</td>
                                <td>{{ $employeFamilyDetail->designation }}</td>


                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </page>
    <page size="A4">
        <div class="row">
            <div class="col-40"><b>17. Class/Grade:</b></div>
            <div class="col-60">{{ $employeWorkDetail->class }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>18. Appointment Number:</b>
                <div style=" font-size:10px">(only for combined service officers)</div>
            </div>
            <div class="col-60">{{ $employeWorkDetail->appoiment_number }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>19. Appointment Date : </b></div>
            <div class="col-60">{{ $employeWorkDetail->appoiment_date }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>20. Current Work Place : </b></div>
            <div class="col-60"></div>
        </div>
        <div class="row malign-40">
            <div class="col-40">Director Section</div>
            <div class="col-60">{{ $employeWorkDetail->directorSection->d_name }}</div>
        </div>
        <div class="row malign-40">
            <div class="col-40">Sub Section</div>
            <div class="col-60">{{ $employeWorkDetail->subUnitSection->sub_name }}</div>
        </div>
        <div class="row malign-40">
            <div class="col-40">Sub Unit</div>
            <div class="col-60">{{ $employeWorkDetail->subSection->section_name }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>21. Contact details of the current work place: </b></div>
            <div class="col-60"></div>
        </div>
        <div class="row malign-40">
            <div class="col-40">Phone number</div>
            <div class="col-60">{{ $employeWorkDetail->land_phone }}</div>
        </div>
        <div class="row malign-40">
            <div class="col-40">Fax number</div>
            <div class="col-60">{{ $employeWorkDetail->fax }}</div>
        </div>
        <div class="row malign-40">
            <div class="col-40">E mail address</div>
            <div class="col-60">{{ $employeWorkDetail->email }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>22. Date appointed to the Department of Agriculture : </b></div>
            <div class="col-60">{{ $employeWorkDetail->appoiment_date_agri_department }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>23. Date appointed to current workplace : </b></div>
            <div class="col-60">{{ $employeWorkDetail->date_appoint_current_work }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>24. Period of Service at current workplace : </b></div>
            <div class="col-60"></div>
        </div>

        <div class="row malign-40">
            <div class="col-20"> Years </div>
            <div class="col-20">{{ $employeWorkDetail->period_appoint_current_work_year }}</div>
            <div class="col-20">Months </div>
            <div class="col-20">{{ $employeWorkDetail->period_appoint_current_work_month }}</div>
        </div>

        <div class="row">
            <div class="col-60"><b>25. Service records in the Department of Agriculture and leave details of maternity
                    /
                    study /abroad </b></div>
            <div class="col-40"></div>
            <div class="row malign-40">
                <table>
                    <thead>
                        <tr>
                            <th> Ditrector Section</th>
                            <th>Sub Section</th>
                            <th> Sub Unit</th>
                            <th> From</th>
                            <th> To</th>
                            <th> Period</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employeServiceRecords as $employeServiceRecord)
                            <tr>
                                <td>{{ $employeServiceRecord->dname }}</td>
                                <td>{{ $employeServiceRecord->sname }}</td>
                                <td>{{ $employeServiceRecord->uname }}</td>
                                <td>{{ $employeServiceRecord->r_from }}</td>
                                <td>{{ $employeServiceRecord->r_to }}</td>
                                <td>{{ $employeServiceRecord->period }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row malign-40">
                <div class="col-40"><b>25.2 Leave details of maternity / study /abroad </b></div>
                <div class="col-60"></div>
            </div>
            <div class="row malign-40">
                <table>
                    <thead>
                        <tr>
                            <th>Leave Type</th>
                            <th> Ditrector Section</th>
                            <th>Sub Section</th>
                            <th> Sub Unit</th>
                            <th> From</th>
                            <th> To</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employeLeaveRecords as $employeLeaveRecord)
                            <tr>
                                <td>{{ $employeLeaveRecord->leave_type }}</td>
                                <td>{{ $employeLeaveRecord->dname }}</td>
                                <td>{{ $employeLeaveRecord->sname }}</td>
                                <td>{{ $employeLeaveRecord->uname }}</td>
                                <td>{{ $employeLeaveRecord->r_from }}</td>
                                <td>{{ $employeLeaveRecord->r_to }}</td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </page>
    <page size="A4">
        <div class="row">
            <div class="col-60"><b>26. Calculation of marks for the service stations: </b></div>
            <div class="col-40"></div>
            <div class="row malign-40">
                @if ($employeWorkDetail->salary_code_id == 2 || 9 || 4)
                    <table>
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3" rowspan="2"> No</th>
                                <th scope="col" class="px-6 py-3" rowspan="2">Fact</th>
                                <th scope="col" class="px-6 py-3" rowspan="2"> Given marks as per Annual
                                    Transfer Procedure
                                </th>
                                <th scope="col" class="px-6 py-3" colspan="2"> Marks due to the
                                    officer</th>
                            </tr>
                            <tr>
                                <th>Plus</th>
                                <th>Minus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>(a)</td>
                                <td>Total period of service from date of
                                    appointment</td>
                                <td>01 mark for each year
                                    (Maximum 30 marks)</td>
                                <td>{{ $employeMarkesDetail->mark_a }}
                                </td>
                                <td>
                                </td>

                            </tr>
                            <tr>
                                <td rowspan="3">(b)</td>
                                <td>Service period in difficult service stations</td>
                                <td>04 marks for each year</td>
                                <td>
                                    {{ $employeMarkesDetail->mark_b_1 }} </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Service period in the listed institutions /
                                    units in difficult areas</td>
                                <td>06 marks for each year</td>
                                <td>
                                    {{ $employeMarkesDetail->edit_mark_b_2 }} </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Service period in the most difficult
                                    service stations</td>
                                <td>08 marks for each year</td>
                                <td>
                                    {{ $employeMarkesDetail->edit_mark_b_3 }} </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>(c)</td>
                                <td>Service period in very convenient service
                                    stations
                                </td>
                                <td>02 marks for each year</td>
                                <td></td>
                                <td>
                                    {{ $employeMarkesDetail->edit_mark_c }} </td>
                            </tr>
                            <tr>
                                <td>(d)</td>
                                <td>Service period in convenient service
                                    stations</td>
                                <td>01 mark for each year</td>
                                <td>

                                </td>
                                <td>
                                    {{ $employeMarkesDetail->edit_mark_d }} </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2">Total</td>
                                <td colspan="2">
                                    {{ $employeMarkesDetail->edit_mark_tot }} </td>
                            </tr>
                        </tbody>
                    </table>
                @elseif (($employeWorkDetail->salary_code_id == 3) | 5)
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-40"><b>27. Requests : </b></div>
            <div class="col-60"></div>


        </div>
        <div class="row malign-40">
            <table>
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3"> Priority</th>
                        <th scope="col" class="px-6 py-3">Director Section</th>
                        <th scope="col" class="px-6 py-3">Sub Section</th>
                        <th scope="col" class="px-6 py-3"> Sub Unit</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($transerRequests as $transerRequest)
                        <tr>
                            <td>{{ $transerRequest->priority }}</td>
                            <td>{{ $transerRequest->dname }}</td>
                            <td>{{ $transerRequest->sname }}</td>
                            <td>{{ $transerRequest->uname }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="row">
            <div class="col-40"><b>28. Reasons to apply for a transfer : </b></div>
            <div class="col-60">{{ $transerRequestReason->reason->reason_text }}</div>
        </div>
        <div class="row malign-40">
            <div class="col-40">Other</div>
            <div class="col-60">{{ $transerRequestReason->other }}</div>
        </div>
        <div class="row">
            <div class="col-40"><b>Date :- </b>......................... </div>
            <div class="col-60"><b>Applicant's Signature:-</b>.............................</div>
        </div>
    </page>

    <page size="A4">
        <div class="row">
            <div class="col-75"><b>Recommendations </b></div>
            <div class="col-25"></div>
        </div>


        @if ($employeWorkDetail->sub_section_id !== 134)
            <div class="row malign-40">
                <table>
                    <thead>
                        <tr>
                            <th>Recommendation of the head of the Sub Unit</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>
                            <ul>
                                <li> Recommended with replacement</li>
                                <li>Recommended with later replacement</li>
                                <li>Recommended without replacement</li>
                                <li>Not recommended </li>
                            </ul>
                        </td>
                        <td></td>
                    </tr>
                </table>
                <div class="malign-40">
                    <div class="col-40"><b>Date :- </b>......................... </div>
                    <div class="col-60"><b>Applicant's Signature:-</b>.............................</div>
                </div>
            </div>
        @elseif ($employeWorkDetail->sub_unit_section_id !== 134)
            <div class="row malign-40">
                <table>
                    <thead>
                        <tr>
                            <th>Recommendation of the Head of the Institute</th>

                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>
                            <ul>
                                <li> Recommended with replacement</li>
                                <li>Recommended with later replacement</li>
                                <li>Recommended without replacement</li>
                                <li>Not recommended </li>
                            </ul>
                        </td>
                        <td></td>
                    </tr>
                </table>
                <div class="malign-40">
                    <div class="col-40"><b>Date :- </b>......................... </div>
                    <div class="col-60"><b>Applicant's Signature:-</b>.............................</div>
                </div>
            </div>
        @endif

        <div class="row malign-40">
            <table>
                <thead>
                    <tr>
                        <th>Recommendation of the Director</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tr>
                    <td>
                        <ul>
                            <li> Recommended with replacement</li>
                            <li>Recommended with later replacement</li>
                            <li>Recommended without replacement</li>
                            <li>Not recommended </li>
                        </ul>
                    </td>
                    <td></td>
                </tr>
            </table>
            <div class="malign-40">
                <div class="col-40"><b>Date :- </b>......................... </div>
                <div class="col-60"><b>Applicant's Signature:-</b>.............................</div>
            </div>
        </div>

    </page>
</body>

</html>
