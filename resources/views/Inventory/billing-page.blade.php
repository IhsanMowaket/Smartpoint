@extends('app')

@section('styles')

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

    {{--    @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif--}}

    <div class="col-lg-12">
        <h3 class="card-title">Clients list</h3>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a class="modal-effect btn btn-primary btn-rounded btn-block wd-xl-100 col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"
                       data-bs-effect="effect-super-scaled" data-bs-toggle="modal"
                       href="#modaldemo8">Add Client
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border-top-0  table-bordered text-nowrap border-bottom"
                               id="responsive-datatable">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">id</th>
                                <th class="border-bottom-0">Company</th>
                                <th class="border-bottom-0">Contact Person</th>
                                <th class="border-bottom-0">Position</th>
                                <th class="border-bottom-0">phone</th>
                                <th class="border-bottom-0">Address</th>
                                <th class="border-bottom-0">Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($clients as $client)
                                <tr data-id="{{ $client->client->id ?? 'NULL' }}"
                                    data-company="{{ $client->company }}"
                                    data-position="{{ $client->position }}"
                                    data-name="{{ $client->name }}"
                                    data-phone="{{ $client->phone }}"
                                    data-address="{{ $client->client->address ?? 'NULL'}}"
                                    data-email="{{$client->client->email ?? 'NULL'}}"
                                    onclick="setFormData({{ $client->client->id ?? 'NULL' }},
                                                        '{{ $client->company }}',
                                                        '{{ $client->name }}',
                                                        '{{ $client->position }}',
                                                        '{{ $client->phone }}',
                                                        '{{ $client->client->address ?? 'NULL' }}',
                                                        '{{ $client->client->email ?? 'NULL' }}')">

                                    <td>{{ $client->client->id ?? 'NULL' }}</td>
                                    <td>{{ $client->company }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->position }}</td>
                                    <td>{{ $client->phone }}</td>
                                    <td>{{ $client->client->address ?? 'NULL' }}</td>
                                    <td>{{ $client->client->email ?? 'NULL' }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modaldemo8">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add a New Client</h6>
                    <button aria-label="Close" class="close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div>
                    <span><p></p></span>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{'clients/add'}}"  class="row g-3 needs-validation" novalidate>
                                @csrf
                                <div class="col-md-10">
                                    <label for="validationCustom01" class="form-label">Company</label>
                                    <input type="text" name="company" class="form-control" id="validationCustom01" placeholder="Company Name" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide the Company Name
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">First name</label>
                                    <input type="text" name="first_name" class="form-control" id="validationCustom01" placeholder="Enter the First Name" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please Enter the First Name
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="validationCustom02" placeholder="Enter the Last Name" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please Enter the Last Name
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Phone</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">+49</span>
                                        <input type="text" name="phone" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="0172 3456 789" required>
                                        <div class="invalid-feedback">
                                            Please insert a Valid Phone Number
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <label for="validationCustom03" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" id="validationCustom03" placeholder="example@smartpoint.com" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a Valid Email
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" id="validationCustom03" placeholder="Elisen Str. 16, 45139 Essen" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid Address.
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom05" class="form-label">Contact Person Position</label>
                                    <input type="text" name="position" class="form-control" id="validationCustom05" placeholder="CEO" required>
                                    <div class="invalid-feedback">
                                        Enter the Contact Person Position in the Company.
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit"> Add </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modaldemo9">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Client</h6>
                    <button aria-label="Close" class="close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div>
                    <span><p></p></span>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="editClientForm" method="POST" action="" class="row g-3 needs-validation" novalidate>
                                @csrf
                                @method('PUT')
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Company</label>
                                    <input type="text" name="company" class="form-control" id="company" placeholder="Company Name" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide the Company Name
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Contact Person</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Contact Person Name" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please Enter the Contact Person
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="validationCustom02" class="form-label">ID</label>
                                    <input type="text" name="id" class="form-control" id="id" placeholder="ID" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Phone</label>
                                    <div class="input-group has-validation">
                                        {{--                                        <span class="input-group-text" id="inputGroupPrepend">+49</span>--}}
                                        <input type="text" name="phone" class="form-control" id="phone" aria-describedby="inputGroupPrepend" placeholder="0172 3456 789" required>
                                        <div class="invalid-feedback">
                                            Please insert a Valid Phone Number
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <label for="validationCustom04" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="example@smartpoint.com" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a Valid Email
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <label for="validationCustom03" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" id="address" placeholder="Elisen Str. 16, 45139 Essen" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid Address.
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom05" class="form-label">Contact Person Position</label>
                                    <input type="text" name="position" class="form-control" id="position" placeholder="CEO" required>
                                    <div class="invalid-feedback">
                                        Enter the Contact Person Position in the Company.
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <span> </span>
                                    <button id="swal-delete" class="btn btn-danger" type="button">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Function to show success notification using the 'notif' library
        function notUpdateSuccess(message) {
            notif({
                msg: "<b>Success:</b> " + message,
                type: "success"
            });
        }

        // Function to show error notification using the 'notif' library
        function notUpdateError(messages) {
            var messageHtml = "<b>Error:</b> <ul>";
            // Loop through error messages array and create a list item for each
            for (var i = 0; i < messages.length; i++) {
                messageHtml += "<li>" + messages[i] + "</li>";
            }
            messageHtml += "</ul>";

            // Display the error messages using the 'notif' library
            notif({
                msg: messageHtml,
                type: "error",
            });
        }

        // On document ready, perform certain actions
        $(document).ready(function() {
            // Retrieve success and error messages from session (Laravel)
            var successMessage = "{{ session('success') }}";
            var errorMessage = @json($errors->all());

            // Display notifications if session messages are present
            if (successMessage) notUpdateSuccess(successMessage);
            if (errorMessage.length > 0) notUpdateError(errorMessage);

            // Handle form submission via AJAX
            $('#editClientForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission
                var formData = $(this).serialize(); // Serialize form data for AJAX request

                // AJAX request to update client information
                $.ajax({
                    url: $(this).attr('action'), // URL from form's action attribute
                    type: 'POST', // HTTP method
                    data: formData, // Serialized form data
                    success: function(response) {
                        // On success, show a notification and hide the modal
                        notUpdateSuccess(response.message || 'Client updated successfully!');
                        $('#modaldemo9').modal('hide');
                    },
                    error: function(xhr) {
                        // On error, parse the response and show error notifications
                        var errorMessages = xhr.responseJSON.errors
                            ? Object.values(xhr.responseJSON.errors).flat()
                            : ['An error occurred'];
                        notUpdateError(errorMessages);
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Event listener for the delete button
            document.getElementById('swal-delete').addEventListener('click', function() {
                // SweetAlert confirmation dialog
                swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this client record!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel!",
                        closeOnConfirm: false,
                        closeOnCancel: true
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            // Retrieve the client ID from the form
                            var id = document.getElementById('id').value;
                            console.log('Deleting client with ID:', id);

                            if (!id) {
                                swal("Error", "Client ID is missing. Cannot delete the client.", "error");
                                return;
                            }

                            // Perform AJAX request for deletion
                            $.ajax({
                                url: '/clients/delete/' + id, // URL to the server-side delete script
                                type: 'DELETE',
                                data: {
                                    "_token": "{{ csrf_token() }}", // CSRF token for Laravel applications
                                    "id": id
                                },
                                success: function(response) {
                                    swal("Deleted!", "Client has been deleted successfully.", "success");
                                    // Optionally, update the UI or redirect
                                },
                                error: function() {
                                    swal("Error", "There was an issue deleting the client.", "error");
                                }
                            });
                        } else {
                            swal("Cancelled", "Your client record is safe :)", "info");
                        }
                    });
            });
        });
    </script>

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
                    // Retrieve various data attributes from the clicked row
                    var id = this.getAttribute('data-id');
                    var company = this.getAttribute('data-company');
                    var name = this.getAttribute('data-name');
                    var position = this.getAttribute('data-position');
                    var phone = this.getAttribute('data-phone');
                    var email = this.getAttribute('data-email');
                    var address = this.getAttribute('data-address');

                    // Find the form with the ID 'editClientForm' and set its 'action' attribute
                    // The form action is set to a route for updating the client, with the client ID appended
                    var form = document.getElementById('editClientForm');
                    form.action = '{{ route('clients.update.client', '') }}/' + id;

                    // Populate input fields in a modal with the data retrieved from the clicked row
                    document.getElementById('company').value = company;
                    document.getElementById('id').value = id;
                    document.getElementById('name').value = name;
                    document.getElementById('position').value = position;
                    document.getElementById('phone').value = phone;
                    document.getElementById('email').value = email;
                    document.getElementById('address').value = address;

                    // Initialize and display a modal (Bootstrap Modal) for editing the client's details
                    var modal = new bootstrap.Modal(document.getElementById('modaldemo9'));
                    modal.show();
                };

                // Add hover effects to each row for better user experience
                // Change background color when the mouse hovers over a row
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


    <!-- Select2 JS -->
    <script src="{{asset('build/assets/plugins/select2/js/select2.min.js')}}"></script>

    <!-- DataTables JS -->
    <script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
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

    <!-- Vite Managed Scripts -->
    @vite('resources/assets/js/advanced-form-elements.js')
    @vite('resources/assets/js/form-wizard.js')
    @vite('resources/assets/js/modal.js')
    @vite('resources/assets/js/table-data.js')
    @vite('resources/assets/js/select2.js')
    @vite('resources/assets/js/form-validation.js')
    @vite('resources/assets/js/sweet-alert.js')

@endsection
