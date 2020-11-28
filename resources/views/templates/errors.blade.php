@foreach($errors->all() as $errorMessage)
    @include('templates.error', [
        'errorMessage' => $errorMessage
    ])
@endforeach