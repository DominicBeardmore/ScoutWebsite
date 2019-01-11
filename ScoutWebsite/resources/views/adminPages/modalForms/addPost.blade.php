<head>
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
        <form method="post" action="{{route('posts.store')}}" id="form" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group row">
                    <label for="postTitle" class="col-sm-3 col-form-label">Event Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" name="postTitle" id="postTitle" placeholder="Posts title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="postDescription" class="col-sm-3 col-form-label">Event Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-group" name="postDescription" id="postDescription" cols="46" rows="10" placeholder="Write a few words explaining what the post is..."></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="postImage" class="col-sm-3 col-form-label">Event Date</label>
                    <div class="col-sm-9">
                        <input id="postImage" name="postImage[]" width="276" type="file" multiple/>
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
