@if(Session::has('error'))
    <!-- begin alert section-->
    <div class="row mr-2 ml-2">
        <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2" id="type-error">
            <small class="la la-times"></small>
            {{Session::get('error')}}
        </button>
    </div>
    <!-- end alert section-->
@endif
