
@if($errors->has($fieldTitle))

    <div class="alert-danger">
        @foreach($errors->get($fieldTitle) as $error)

            <div>{{$error}}</div>

        @endforeach
    </div>

@endif