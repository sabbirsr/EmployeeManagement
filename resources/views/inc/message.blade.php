@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-dismissible alert-success text-center">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger text-center">
        {{session('error')}}
    </div>
@endif
