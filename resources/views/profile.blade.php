@extends('layouts.app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Profile</h4>

        </div>
    </div>
    <!-- END BREADCRUMB -->

    <!-- ROW -->
    <div class="row row-sm">
        <div class="col-xl-4">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="ps-0">
                        <div class="main-profile-overview">
                            <div class="main-img-user profile-user">
                                <img alt="" src="{{ $employee->Picture??asset('/build/assets/img/brand/favicon.png') }}">
                                <a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
                            </div>
                            <div class="d-flex justify-content-between mg-b-20">
                                <div>
                                    <h5 class="main-profile-name">{{ $employee->firstname. ' ' . $employee->lastname }}</h5>
                                    <p class="main-profile-name-text">{{$employee->position}}</p>
                                </div>
                            </div>
                            <h6>Certifications</h6>

                                <div class="main-profile-bio">
                                    @if(isset($employee->certifications_qualifications) && !empty($employee->certifications_qualifications))
                                    @foreach (json_decode($employee->certifications_qualifications) as $certification)
                                        <div class="certification">
                                            <h6>{{ $certification->name }}</h6>
                                            <p>
                                                Date obtained: {{ $certification->date_obtained }}
                                                <br>Issued by: {{ $certification->issuing_authority }}
                                            </p>
                                        </div>
                                    @endforeach
                                @endif

                                </div>
                            <div class="row">
                                <div class="col-md-4 col mb20">
                                    <h5>{{ $employee->date_of_birth->format('Y-m-d') }}</h5>
                                    <h6 class="text-small text-muted mb-0">Geburtsdatum</h6>
                                </div>
                                <div class="col-md-4 col mb20">
                                    <h5>{{ ($employee->place_of_birth) }}</h5>
                                    <h6 class="text-small text-muted mb-0">Geburtsort</h6>
                                </div>
                                <div class="col-md-4 col mb20">
                                    <h5>{{ $employee->monthly_planed_uhr }}</h5>
                                    <h6 class="text-small text-muted mb-0">Planned Hours</h6>
                                </div>
                            </div>
                            <hr class="mg-y-30">
                            <label class="main-content-label tx-13 mg-b-20">Social</label>
                            <div class="main-profile-social-list">
                                <div class="media">
                                    <div class="media-icon bg-primary-transparent text-primary">
                                        <i class="fe fe-phone-call"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Telefon</span> <a href="{{ route('initiate-call', ['phone' => $employee->user->phone]) }}">{{ $employee->user->phone }}</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-success-transparent text-success">
                                        <i class="fe fe-mail"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Email</span> <a href="{{$employee->user->email}};">{{ $employee->user->email }}</a>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <!-- main-profile-overview -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="row row-sm">
                <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="counter-status d-flex md-mb-0">
                                <div class="counter-icon bg-primary-transparent">
                                    <i class="icon-layers text-primary"></i>
                                </div>
                                <div class="ms-auto">
                                    <h5 class="tx-13">Effizienzstunden</h5>
                                    @php
                                        $efficiency = $employee->monthly_worked_uhr - $employee->monthly_planed_uhr;
                                    @endphp
                                    <h2 class="mb-0 tx-22 mb-1 mt-1">{{ $employee->monthly_worked_uhr }}</h2>
                                    @if ($efficiency < 0)
                                        <p class="text-muted mb-0 tx-11"><i class="si si-arrow-down-circle text-danger me-1"></i>decreased</p>
                                    @else
                                    <p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success me-1"></i>increased</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="counter-status d-flex md-mb-0">
                                <div class="counter-icon bg-danger-transparent">
                                    <i class="icon-paypal text-danger"></i>
                                </div>
                                <div class="ms-auto">
                                    <h5 class="tx-13">Ausfahlsquete</h5>
                                    @php
                                        $difference = $employee->monthly_planed_uhr - $employee->monthly_worked_uhr;
                                        $percentage = ($difference > 0) ? number_format(($difference / $employee->monthly_planed_uhr) * 100, 2) : '0.00';
                                    @endphp
                                    <h2 class="mb-0 tx-22 mb-1 mt-1">{{ $percentage }}%</h2>
                                    @if ($difference > 0)
                                        <p class="text-muted mb-0 tx-11"><i class="si si-arrow-down-circle text-danger me-1"></i>increased</p>
                                    @else
                                    <p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success me-1"></i>decreased</p>
                                    @endif
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="counter-status d-flex md-mb-0">
                                <div class="counter-icon bg-success-transparent">
                                    <i class="icon-rocket text-success"></i>
                                </div>
                                <div class="ms-auto">
                                    <h5 class="tx-13">Produktivitat</h5>
                                    @if ($employee->monthly_planed_uhr > 0)
                                        @php
                                            $productivity = number_format($employee->monthly_worked_uhr / $employee->monthly_planed_uhr * 100, 2);
                                        @endphp
                                        <h2 class="mb-0 tx-22 mb-1 mt-1">{{ $productivity }}%</h2>
                                        @if ($productivity > 100)
                                            <p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success me-1"></i>increase</p>
                                        @else
                                            <p class="text-muted mb-0 tx-11"><i class="si si-arrow-down-circle text-danger me-1"></i>decrease</p>
                                        @endif
                                    @else
                                        <p class="text-muted mb-0 tx-11">N/A</p>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="tabs-menu ">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                            <li class="">
                                <a href="#home" data-bs-toggle="tab" class="active" aria-expanded="true"> <span
                                        class="visible-xs"><i
                                            class="las la-user-circle tx-16 me-1"></i></span> <span
                                        class="hidden-xs">ABOUT ME</span> </a>
                            </li>
                            <li class="">
                                <a href="#timeTracking" data-bs-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="las la-images tx-15 me-1"></i></span>
                                    <span class="hidden-xs">Time Tracking</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#mydata" data-bs-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="las la-life-ring tx-16 me-1"></i></span>
                                    <span class="hidden-xs">Meine Daten</span> </a>
                            </li>
                            <li class="">
                                <a href="#profile" data-bs-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="las la-cog tx-16 me-1"></i></span>
                                    <span class="hidden-xs">Profile</span> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content border border-top-0 p-4 br-dark">
                        <div class="tab-pane active" id="home">

                            <div class="m-t-30">
                                <h4 class="tx-15 text-uppercase mt-3">Experience</h4>
                                <div class="p-t-10">
                                    @if ($employee->previous_employers)
                                        @foreach (json_decode($employee->previous_employers) as $employer)
                                            <h5 class="text-primary m-b-5 tx-14">{{ $employer->position }}</h5>
                                            <p>{{ $employer->company_name }} <br> {{ $employer->start_date }} - {{ $employer->end_date }}</p>

                                            @if (isset($employer->description))
                                                <p class="text-muted tx-13 m-b-0">{{ $employer->description }}</p>
                                            @else
                                            @endif
                                            <hr>
                                        @endforeach
                                    @else
                                    @endif
                                </div>
                            </div>

                            <hr style="border-top: 2px solid #010f2c;">

                            <div class="m-t-30">
                                <!-- Job History -->
                                <h4 class="tx-15 text-uppercase mt-3">Job History</h4>
                                <div class="p-t-10">
                                    @if ($employee->job_history)
                                        @foreach (json_decode($employee->job_history) as $job)
                                            <h5 class="text-primary m-b-5 tx-14">{{ $job->job_title }}</h5>
                                            <p>{{ $job->department }} <br> {{ $job->start_date }} - {{ $job->end_date }}</p>
                                            <p class="tx-13 m-b-0">
                                                @foreach ($job->responsibilities as $responsibility)
                                                    {{ $responsibility }}
                                                @endforeach
                                            </p>
                                            <hr>
                                        @endforeach
                                    @else
                                        <p>No job history available.</p>
                                    @endif
                                </div>

                                <hr style="border-top: 2px solid #010f2c;">

                                <!-- Training History -->
                                <h4 class="tx-15 text-uppercase mt-3">Training History</h4>
                                <div class="p-t-10">
                                    @if ($employee->training_history)
                                        @foreach (json_decode($employee->training_history) as $training)
                                            <h5 class="text-primary m-b-5 tx-14">{{ $training->course_name }}</h5>
                                            <p>{{ $training->provider }} <br> {{ $training->completion_date }}</p>
                                            <hr>
                                        @endforeach
                                    @else
                                        <p>No training history available.</p>
                                    @endif
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane" id="timeTracking">
                            <div class="masonry row">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Work Begin</th>
                                                    <th>Break Begin</th>
                                                    <th>Break End</th>
                                                    <th>Work End</th>
                                                    <th>Total Working Hours</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($days as $day)
                                                    <tr>
                                                        <td>{{ $day->format('Y-m-d') }}</td>
                                                        @php
                                                               /* $userId = $employee->user_id;// Assuming each employee has a related user
                                                                $month = \Carbon\Carbon::now()->month;
                                                                $year = \Carbon\Carbon::now()->year;

                                                                // Fetch work time recordings for the specific user, month, and year
                                                                // We are using 'record_date' for filtering, which should be sufficient
                                                                $workTimeRecordings = (new \App\Models\WorkTimeRecording)->where('user_id', $userId)->whereYear('record_date', $year)
                                                                ->whereMonth('record_date', $month)->get();
                                                                $daysOfMonth = \Carbon\Carbon::create($year, $month)->daysInMonth;
                                                                $days = collect(range(1, $daysOfMonth))->map(function ($day) use ($year, $month) {
                                                                    return \Carbon\Carbon::createFromDate($year, $month, $day);
                                                                });*/
                                                                $record = $workTimeRecordings->firstWhere('record_date', $day->format('Y-m-d'));
                                                        @endphp
                                                        <td>{{ optional($record)->start_time }}</td>
                                                        <td>{{ optional($record)->pause_start }}</td>
                                                        <td>{{ optional($record)->pause_end }}</td>
                                                        <td>{{ optional($record)->end_time }}</td>
                                                        <td>{{ optional($record)->hours_worked }}</td>
                                                        <td>{{ optional($record)->status }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                            </div>
                        </div>
                    </div>
                        <div class="tab-pane" id="mydata">
                            <form id="" method="POST" action=""  class="row g-3 needs-validation" novalidate>
                                        @csrf
                                        <div class="col-md-2">
                                            <label for="validationCustom01" class="form-label">Angestellte-ID</label>
                                            <input type="text" name="id" class="form-control" id="id" value="{{$employee->id}}" disabled>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide the Company Name
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom01" class="form-label">Unternehmen</label>
                                            <input type="text" name="company" class="form-control" id="company" placeholder="Company Name" value="{{$employee->user->company}}" disabled>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide the Company Name
                                            </div>
                                        </div>
                                <div class="col-md-2">
                                    <label for="validationCustom01" class="form-label">Familienstand</label>
                                    <input type="text" name="status" class="form-control" id="status" placeholder="" value="{{$employee->status}}" disabled>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustom01" class="form-label">Geschlecht</label>
                                    <input type="text" name="gender" class="form-control" id="gender" placeholder="Male" value="{{$employee->gender}}" disabled>
                                </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">Vorname</label>
                                            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="z.B. Max" value="{{$employee->firstname}}" disabled>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter the First Name
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">Nachname</label>
                                            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="z.B. Mustermann" value="{{$employee->lastname}}" disabled>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please Enter the Last Name
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustomUsername" class="form-label">Geburtsdatum</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="date_of_birth" class="form-control" id="date_of_birth" value="{{($employee->date_of_birth)->format('d-m-Y')}}" aria-describedby="inputGroupPrepend" placeholder="z.B. 01.01.1999" disabled>
                                                <div class="invalid-feedback">
                                                    invalid Date of Birth
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Geburtsort</label>
                                            <input type="text" name="place_of_birth" class="form-control" id="place_of_birth" value="{{($employee->place_of_birth)}}" placeholder="z.B. Berlin" disabled>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                invalid Place of Birth
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="extraEmail" class="form-label">Personal Identification card</label>
                                            <input type="text" name="id_card" class="form-control" id="id_card" value="{{($employee->id_card)}}" placeholder="z.B. XYE8475CE" disabled>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustomUsername" class="form-label">Nationality</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="nationality" class="form-control" id="nationality" aria-describedby="inputGroupPrepend" value="{{($employee->nationality)}}" placeholder="z.B. Deutsch" disabled>
                                                <div class="invalid-feedback">
                                                    Please insert a Valid Phone Number
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">street</label>
                                            <input type="text" name="street" class="form-control" id="street" value="{{$employee->street}}" placeholder="z.B. Elisenstr. 16" disabled>
                                            <div class="invalid-feedback">
                                                Please provide a valid street.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">PLZ</label>
                                            <input type="text" name="zip" value="{{$employee->zip_code}}" class="form-control" id="zip" placeholder="z.B. 45139" disabled>
                                            <div class="invalid-feedback">
                                                Please provide a valid PLZ.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">City</label>
                                            <input type="text" name="city" value="{{$employee->city}}" class="form-control" id="city" placeholder="z.B. Essen" disabled>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom03" class="form-label">Address Line 2 (Optional)</label>
                                            <input type="text" name="addressZu" value="{{$employee->Address_zusatz}}" class="form-control" id="addressZu" placeholder="z.B. Zweiterstr. 26" disabled>
                                            <div class="invalid-feedback">
                                                Please provide a valid street.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom05" class="form-label">Position</label>
                                            <input type="text" name="position" class="form-control" value="{{$employee->position}}" id="position" placeholder="z.B. Disponent" disabled>
                                            <div class="invalid-feedback">
                                                Enter the Position in the Company.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Krankenkasse</label>
                                    <input type="text" name="insurance" class="form-control" id="insurance" value="{{$employee->insurance}}" placeholder="z.B. AOK Bayern" disabled>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        invalid Krankenkasse
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Versicherungsnummer</label>
                                    <input type="text" name="insurance_number" class="form-control" id="insurance_number" value="{{$employee->insurance_number}}"  placeholder="z.B. Y123456789" disabled>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        invalid Kranken Versicherungsnummer
                                    </div>
                                </div>

                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Sozialversicherungsnummer</label>
                                    <input type="text" name="Social_Security" class="form-control" id="Social_Security" value="{{$employee->Social_Security}}" placeholder="z.B. 33 160894 W 098" disabled>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        invalid Sozialversicherungsnummer
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Steuer identification Nr.</label>
                                    <input type="text" name="tax_id" class="form-control" id="tax_id" value="{{$employee->tax_id}}" placeholder="z.B. 67 305 624 892" disabled>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Invalid identification Nr.
                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustom01" class="form-label">Steuer Klasse</label>
                                    <input type="text" name="tax_class" class="form-control" id="tax_class" value="{{$employee->tax_class}}"  placeholder="" disabled>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustom01" class="form-label">Kinder Anzahl</label>
                                    <input type="text" name="Num_of_children" class="form-control" id="Num_of_children" value="{{$employee->Num_of_children}}" placeholder="" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Bank Name</label>
                                    <input type="text" name="bank_name" class="form-control" id="bank_name" value="{{$employee->bank_name}}"  placeholder="z.B. Sparkasse Berlin" disabled>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Invalid identification Nr.
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">IBAN</label>
                                    <div class="input-group has-validation">
{{--                                        <span class="input-group-text" id="inputGroupPrepend">DE</span>--}}
                                        <input type="text" name="iban" class="form-control" id="iban" aria-describedby="inputGroupPrepend" value="{{$employee->iban}}" disabled placeholder="z.B. 01 2345 6789 1234 5678 91" required>
                                        <div class="invalid-feedback">
                                            Please insert a Valid Phone Number
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Beschäftigungsbeginn</label>
                                    <input type="text" name="employment_start_date" class="form-control" id="employment_start_date" value="{{($employee->employment_start_date)->format('d-m-Y')}}" disabled placeholder="z.B. 01.01.2024">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Invalid identification Nr.
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Beschäftigungsart</label>
                                    <input type="text" name="work_enum" class="form-control" id="work_enum" value="{{$employee->work_enum}}" placeholder="" disabled>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustom01" class="form-label">Bereitschaft</label>
                                    <input type="text" name="overtime_eligibility" class="form-control" id="overtime_eligibility" value="{{$employee->overtime_eligibility? 'Ja':'Nein'}}"  placeholder="" disabled>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustom01" class="form-label">Behinderung</label>
                                    <select type="text" name="overtime_eligibility" class="form-control" id="overtime_eligibility" value="{{$employee->overtime_eligibility}}" placeholder="" disabled>
                                        <option value="false">Nein</option>
                                        <option value="True">Ja, unter 50%</option>
                                        <option value="True">Ja, über 50%</option>
                                    </select>

                                </div>

                                        <div class="col-md-12">
                                            <label for="validationCustom05" class="form-label">Notes</label>
                                            <input type="text" name="notes" class="form-control" id="notes" disabled placeholder="Note">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </form>
                        </div>
                        <div class="tab-pane" id="profile">
                            <form id="editEmployeeForm" method="POST" action=""  class="row g-3 needs-validation" novalidate>
                                @csrf
                                @method('PUT')
                                <div class="col-md-4">
                                    <label for="validationCustom03" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" id="email" value="{{$employee->user->email}}" placeholder="example@smartpoint.com" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a Valid Email
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Mein Telefonnummer</label>
                                    <div class="input-group has-validation">
{{--                                        <span class="input-group-text" id="inputGroupPrepend">+49</span>--}}
                                        <input type="text" name="phone" class="form-control" id="phone" value="{{$employee->user->phone}}" aria-describedby="inputGroupPrepend" placeholder="1772345678">
                                        <div class="invalid-feedback">
                                            Please insert a Valid Phone Number
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Notfall Contact Person</label>
                                    <input type="text" name="emergency_contact_name" class="form-control" id="emergency_contact_name" value="{{$employee->emergency_contact_name}}" placeholder="z.B. Max Mustermann" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        invalid Name
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Telefonnummer Notafall Person </label>
                                    <div class="input-group has-validation">
{{--                                        <span class="input-group-text" id="inputGroupPrepend">+49</span>--}}
                                        <input type="text" name="emergency_contact_phone" class="form-control" id="emergency_contact_phone" value="{{$employee->emergency_contact_phone}}" aria-describedby="inputGroupPrepend" placeholder="1772345678">
                                        <div class="invalid-feedback">
                                            Please insert a Valid Phone Number
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->

@endsection

@section('scripts')
    <script>
        // Listen for when the HTML document has been completely loaded and parsed
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.getElementById('editEmployeeForm');
            form.action = '{{ route('employees.update.employee', '') }}/' + {{$employee->id}};
        });
    </script>

    <!-- SMART PHOTO MASTER JS -->
    <script src="{{asset('build/assets/plugins/SmartPhoto-master/smartphoto.js')}}"></script>
    <!-- INTERNAL Edit-Table JS -->
    <script src="{{asset('build/assets/plugins/edit-table/bst-edittable.js')}}"></script>
    <script src="{{asset('build/assets/plugins/edit-table/edit-table.js')}}"></script>

@endsection
