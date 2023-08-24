@extends('app')
@section('content')
{{--    <section id="page-content" class="no-sidebar">--}}
{{--        <div class="container">--}}
{{--            <!-- Calendar -->--}}
{{--            <div class="row mb-5">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <h4>Basic veiws</h4>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6"><button type="button" class="btn btn-light btn-shadow float-right"><i class="icon-calendar"></i>--}}
{{--                        Add Event</button></div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3">--}}
{{--                    <div class="card card-static">--}}
{{--                        <!-- <div class="card-header">Draggable Events</div> -->--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title mb-4">Draggable Events</h4>--}}
{{--                            <div id="external-events">--}}
{{--                                <div class="fc-event fc-event-primary" data-color="fc-event-primary">Metting</div>--}}
{{--                                <div class="fc-event">All day event</div>--}}
{{--                                <div class="fc-event fc-event-danger" data-color="fc-event-danger">Birthday Party</div>--}}
{{--                                <div class="fc-event">Morning Meeting</div>--}}
{{--                                <div class="fc-event">Conference</div>--}}
{{--                                <div class="fc-event fc-event-warning" data-color="fc-event-warning">Lunch</div>--}}
{{--                                <div class="fc-event">Long Event</div>--}}
{{--                                <div class="fc-event fc-event-info" data-color="fc-event-info">Expo Meeting</div>--}}
{{--                                <div class="fc-event fc-event-success" data-color="fc-event-success">New Year Event</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card-footer">--}}
{{--                            <div class="float-left">Remove after drop</div>--}}
{{--                            <div class="float-right">--}}
{{--                                <label class="p-switch switch-color-success p-switch-sm mt-1"><input type="checkbox" checked id="drop-remove"><span class="p-switch-style"></span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-9">--}}
{{--                    <div id="calendar"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- end: Calendar -->--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <script src="{{asset('js/functions.js')}}"></script>--}}
{{--    <script src='{{asset('plugins/fullcalendar/lib/jquery-ui.min.js')}}'></script>--}}
{{--    <script src='plugins/moment/moment.min.js'></script>--}}
{{--    <script src='plugins/fullcalendar/fullcalendar.min.js'></script>--}}
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            /* initialize the external events--}}
{{--            -----------------------------------------------------------------*/--}}
{{--            $('#external-events .fc-event').each(function () {--}}
{{--                // store data so the calendar knows to render an event upon drop--}}
{{--                $(this).data('event', {--}}
{{--                    title: $.trim($(this).text()), // use the element's text as the event title--}}
{{--                    stick: true, // maintain when user navigates (see docs on the renderEvent method)--}}
{{--                    className: $(this).data("color")--}}
{{--                });--}}
{{--                // make the event draggable using jQuery UI--}}
{{--                $(this).draggable({--}}
{{--                    zIndex: 999,--}}
{{--                    revert: true, // will cause the event to go back to its--}}
{{--                    revertDuration: 0 //  original position after the drag--}}
{{--                });--}}
{{--            });--}}
{{--            /* initialize the calendar--}}
{{--            -----------------------------------------------------------------*/--}}
{{--            $('#calendar').fullCalendar({--}}
{{--                header: {--}}
{{--                    left: 'prev,next today',--}}
{{--                    center: 'title',--}}
{{--                    right: 'month,agendaWeek,agendaDay'--}}
{{--                },--}}
{{--                editable: true,--}}
{{--                droppable: true, // this allows things to be dropped onto the calendar--}}
{{--                drop: function () {--}}
{{--                    // is the "remove after drop" checkbox checked?--}}
{{--                    if ($('#drop-remove').is(':checked')) {--}}
{{--                        // if so, remove the element from the "Draggable Events" list--}}
{{--                        $(this).remove();--}}
{{--                    }--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endsection
