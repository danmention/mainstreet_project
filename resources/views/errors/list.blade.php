@if(isset ($errors) && count($errors) > 0)
    <div class="alert alert-danger ">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <ul class="list-unstyled mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
{{--        {{ $errors->first() }}--}}
    </div>
@endif<?php
