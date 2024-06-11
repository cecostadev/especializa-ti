<h1>Novo Ticket</h1>

<form action="{{ route('support.store')}}" method="POST">
    @include('site.supports.partials.update-create-form') 
</form>

@if ($errors->any())
    @foreach ($errors->all() as $error)
       {{ $error }} 
    @endforeach
@endif