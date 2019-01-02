<head>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add event to the timeline</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="post" action="{{route('timeline.store')}}" id="form">
            @csrf
            <div class="modal-body">
                <div class="form-group row">
                    <label for="eventTitle" class="col-sm-3 col-form-label">Event Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" name="eventTitle" id="eventTitle" placeholder="Event title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="eventDescription" class="col-sm-3 col-form-label">Event Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-group" name="eventDescription" id="eventDescription" cols="46" rows="10" placeholder="Write a few words explaining what the event is..."></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="eventLocation" class="col-sm-3 col-form-label">Event Location</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" name="eventLocation" id="eventLocation" placeholder="Event title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="eventDate" class="col-sm-3 col-form-label">Event Date</label>
                    <div class="col-sm-9">
                        <input id="eventDate" name="eventDate" width="276" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="eventStart" class="col-sm-3 col-form-label">Start Time</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" name="eventStart" id="eventStart" placeholder="14:00:00">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="eventEnd" class="col-sm-3 col-form-label">End Time</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" name="eventEnd" id="eventEnd" placeholder="14:00:00">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script>
    $('#eventDate').datepicker();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script>
{{-- <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
