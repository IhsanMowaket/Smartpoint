@extends('app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Apps</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                <li class="breadcrumb-item active" aria-current="page">Calender</li>
            </ol>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center">
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i
                            class="mdi mdi-filter-variant"></i></button>
            </div>
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-danger btn-icon me-2"><i
                            class="mdi mdi-star"></i></button>
            </div>
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon me-2"><i
                            class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-xl-0">
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-primary">14 Aug 2019</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                            id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuDate">
                        <a class="dropdown-item" href="javascript:void(0);">2015</a>
                        <a class="dropdown-item" href="javascript:void(0);">2016</a>
                        <a class="dropdown-item" href="javascript:void(0);">2017</a>
                        <a class="dropdown-item" href="javascript:void(0);">2018</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMB -->

    <div class="pd-b-0  main-content-calendar pt-0">

        <!-- ROW OPEND -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Calender With different Color Events</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-3">
                                <div id="external-events">
                                    <h4>Draggable Events</h4>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary">
                                        <div class="fc-event-main">My Event 1</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-secondary"
                                         data-class="bg-teal">
                                        <div class="fc-event-main">My Event 2</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-warning"
                                         data-class="bg-warning">
                                        <div class="fc-event-main">My Event 3</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-info"
                                         data-class=" bg-info">
                                        <div class="fc-event-main">My Event 4</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-success"
                                         data-class="bg-danger">
                                        <div class="fc-event-main">My Event 5</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-danger"
                                         data-class="bg-danger">
                                        <div class="fc-event-main">My Event 6</div>
                                    </div>
                                </div>
                                <div>

                                </div>
                            </div>
                            <div class="col-md-12 col-lg-9">
                                <div id='calendar2'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Calendar</h3>
                    </div>
                    <div class="card-body">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW CLOSED -->

    </div>

    <!-- MODAL -->
    <div aria-hidden="true" class="modal main-modal-calendar-schedule" id="modalSetSchedule" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Create New Event</h6>
                    <button aria-label="Close" class="close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="mainFormCalendar" method="post" name="mainFormCalendar">
                        <div class="form-group">
                            <input class="form-control" placeholder="Add title" type="text">
                        </div>
                        <div class="form-group d-flex align-items-center">
                            <label class="rdiobox mg-r-60"><input checked name="etype" type="radio" value="event">
                                <span>Event</span></label> <label class="rdiobox"><input name="etype" type="radio"
                                                                                         value="reminder"> <span>Reminder</span></label>
                        </div>
                        <div class="form-group mg-t-30">
                            <label class="tx-13 mg-b-5 tx-gray-600">Start Date</label>
                            <div class="row row-xs">
                                <div class="col-7">
                                    <input class="form-control" id="mainEventStartDate" placeholder="Select date"
                                           type="text" value="">
                                </div><!-- col-7 -->
                                <div class="col-5">
                                    <select class="select2-modal main-event-time" data-placeholder="Select time"
                                            id="mainEventStartTime">
                                        <option label="Select time">
                                            Select time
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="tx-13 mg-b-5 tx-gray-600">End Date</label>
                            <div class="row row-xs">
                                <div class="col-7">
                                    <input class="form-control" id="EventEndDate" placeholder="Select date"
                                           type="text" value="">
                                </div><!-- col-7 -->
                                <div class="col-5">
                                    <select class="select2-modal main-event-time" data-placeholder="Select time"
                                            id="EventEndTime">
                                        <option label="Select time">
                                            Select time
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                            <textarea class="form-control"
                                                      placeholder="Write some description (optional)"
                                                      rows="2"></textarea>
                        </div>
                        <div class="d-flex mg-t-15 mg-lg-t-30">
                            <button class="btn btn-main-primary pd-x-25 mg-r-5" type="submit">Save</button>
                            <a
                                    class="btn btn-light" data-bs-dismiss="modal" href="javascript:void(0);">Discard</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /MODAL -->

    <!-- MMODAL -->
    <div aria-hidden="true" class="modal main-modal-calendar-event" id="modalCalendarEvent" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <nav class="nav nav-modal-event">
                        <a class="nav-link" href="javascript:void(0);"><i class="icon ion-md-open"></i></a>
                        <a class="nav-link" href="javascript:void(0);"><i class="icon ion-md-trash"></i></a>
                        <a class="nav-link" data-bs-dismiss="modal" href="javascript:void(0);">
                            <i class="icon ion-md-close"></i></a>
                    </nav>
                </div>
                <div class="modal-body">
                    <div class="row row-sm">
                        <div class="col-sm-6">
                            <label class="tx-13 tx-gray-600 mg-b-2">Start Date</label>
                            <p class="event-start-date"></p>
                        </div>
                        <div class="col-sm-6">
                            <label class="tx-13 mg-b-2">End Date</label>
                            <p class="event-end-date"></p>
                        </div>
                    </div>
                    <label class="tx-13 tx-gray-600 mg-b-2">Description</label>
                    <p class="event-desc tx-gray-900 mg-b-30"></p><a class="btn btn-secondary wd-80"
                                                                     data-bs-dismiss="modal" href="javascript:void(0);">Close</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /MODAL -->
@endsection

@section('scripts')

    <!-- FULL CALENDAR JS -->
    <script src="{{asset('build/assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
    @vite('resources/assets/js/fullcalendar.js')


    <!-- INTERNAL DATEPICKER JS -->
    <script src="{{asset('build/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
@endsection
