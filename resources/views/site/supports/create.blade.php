<h1>Novo Ticket</h1>

<form action="{{ route('support.store')}}" method="POST">
    @include('site.supports.partials.update-create-form') 
</form>

<x-alert/>