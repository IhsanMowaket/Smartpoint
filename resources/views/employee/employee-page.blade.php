@extends('app')

@section('styles')

@endsection

@section('styles')
    <!-- Add your custom styles here -->
    <link href="{{ asset('build/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
@endsection

@section('content')


    <head>
        <style>
            #responsive-datatable {
                cursor: pointer; /* Change 'pointer' to your preferred cursor style */
            }
            #responsive-datatable tr {
                user-select: none; /* This will prevent text selection */
            }
        </style>
    </head>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <ol class="breadcrumb">
            </ol>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center">
            <div class="pe-1 mb-xl-0">
            </div>
            <div class="pe-1 mb-xl-0">
            </div>
            <div class="pe-1 mb-xl-0">
            </div>
            <div class="mb-xl-0">
                <div class="btn-group dropdown">
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuDate">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12">
        <h3 class="card-title">Employees list</h3>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a class="modal-effect btn btn-primary btn-rounded btn-block wd-xl-120 col-sm-6 col-md-1 mg-t-10 mg-sm-t-0"
                       data-bs-effect="effect-super-scaled" data-bs-toggle="modal"
                       href="">Add Employee
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0" id="responsive-datatable">
                            <thead>
                            <tr>
                                <th class="border-bottom-0"></th>
                                <th class="border-bottom-0">Name</th>
                                <th class="border-bottom-0">Start Date</th>
                                <th class="border-bottom-0">Position</th>
                                <th class="border-bottom-0">Email</th>
                                <th class="border-bottom-0">phone</th>
                                <th class="border-bottom-0">Field</th>
                                <th class="border-bottom-0">Working Hours </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($employees as $employee)
                                <tr data-id="{{ $employee->id??''}}"
                                    onclick="setFormData('{{ $employee->id??''}}')">
                                    
                                    <td style="display: flex; align-items: center; justify-content: flex-start;">
                                        <img alt="" class="rounded-circle avatar-md me-3" src="{{ $employee->Picture??asset('/build/assets/img/brand/favicon.png') }}">
                                        <div class="dot-label {{$employee->user->is_online ? 'bg-success' : '' }} me-1"></div>
                                    </td>
                                    
                                    <td>{{$employee->firstname??''}} {{$employee->lastname??''}}</td>
                                    
                                    <td>{{ optional($employee->employment_start_date)->format('Y-m-d') ?? 'N/A' }}</td>
                                    
                                    <td>{{$employee->position}}</td>
                                    
                                    <td>
                                        <a href="{{$employee->user->email}};">{{$employee->user->email}}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('initiate-call', ['phone' => $employee->user->phone]) }}">{{$employee->user->phone}}</a>
                                    </td>
                                    
                                    <td>{{$employee->user->field}}</td>
                                    
                                    <td>
                                        {{ $employee->monthly_worked_uhr }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection



@section('scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    

    <script>
        // Listen for when the HTML document has been completely loaded and parsed
        document.addEventListener('DOMContentLoaded', function() {
            // Get the table element with the ID 'responsive-datatable'
            var table = document.getElementById('responsive-datatable');
            // Retrieve all the row elements ('tr') within the table
            var rows = table.getElementsByTagName('tr');
            // Iterate over each row in the table
            for (var i = 0; i < rows.length; i++) {
                // Assign a click event handler to each row
                rows[i].ondblclick = function() {
      // Retrieve the employee ID from the data-id attribute
      var employeeId = this.getAttribute('data-id');
      // Redirect to the employee profile page with the retrieved ID
      window.location.href = '{{ route('employee.profile', '') }}/' + employeeId;
    };
                rows[i].onmouseover = function() {
                    this.style.backgroundColor = 'rgba(0, 128, 203, 0.2)';
                };

                rows[i].onclick = function() {
                    this.style.backgroundColor = 'rgba(0, 128, 203, 0.2)';
                };

                // Revert the background color when the mouse leaves the row
                rows[i].onmouseout = function() {
                    this.style.backgroundColor = '';
                };
            }
        });
    </script>
    
    <script>
        // Initialize DataTable if not already initialized
if (!$.fn.DataTable.isDataTable('#responsive-datatable')) {
    $('#responsive-datatable').DataTable({
        responsive: true,
        paging: true,
        lengthMenu: [10, 25, 50, 100],
        pageLength: 10,
        searching: true,
    });
} else {
    // If DataTable is already initialized, destroy it and reinitialize
    var table = $('#responsive-datatable').DataTable();
    table.destroy();

    $('#responsive-datatable').DataTable({
        responsive: true,
        paging: true,
        lengthMenu: [10, 25, 50, 100],
        pageLength: 10,
        searching: true,
    });
}

    </script>


    <!-- Select2 JS -->
    <script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script

    <!-- DataTables JS -->
    <script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script.>
    <script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

    <!-- jQuery Steps JS -->
    <script src="{{asset('build/assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>

    <!-- Parsley JS -->
    <script src="{{asset('build/assets/plugins/parsleyjs/parsley.min.js')}}"></script>

    <!-- Rating JS -->
    <script src="{{asset('build/assets/plugins/ratings-2/jquery.star-rating.js')}}"></script>
    <script src="{{asset('build/assets/plugins/ratings-2/star-rating.js')}}"></script>

    <!-- Datepicker JS -->
    <script src="{{asset('build/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

    <!-- File Uploads JS -->
    <script src="{{asset('build/assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{asset('build/assets/plugins/fileuploads/js/file-upload.js')}}"></script>

    <!-- Fancy Uploader JS -->
    <script src="{{asset('build/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{asset('build/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{asset('build/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{asset('build/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

    <!-- SumoSelect JS -->
    <script src="{{asset('build/assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>

    <!-- Notification JS -->
    <script src="{{asset('build/assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{asset('build/assets/plugins/notify/js/notifit-custom.js')}}"></script>

    <!-- Sweet Alert JS -->
    <script src="{{asset('build/assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
    <script src="{{asset('build/assets/plugins/sweet-alert/jquery.sweet-alert.js')}}"></script>

    <script src="{{ asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>


    <!-- Vite Managed Scripts -->
    @vite('resources/assets/js/advanced-form-elements.js')
    @vite('resources/assets/js/form-wizard.js')
    @vite('resources/assets/js/modal.js')
    @vite('resources/assets/js/table-data.js')
    @vite('resources/assets/js/select2.js')
    @vite('resources/assets/js/form-validation.js')
    @vite('resources/assets/js/sweet-alert.js')

@endsection
