<h1>Ediat Ticket</h1>

<form action="{{ route('support.update', $support->id)}}" method="post">
    @method('put')
    @include('site.supports.partials.update-create-form', ['support' => $support])
</form>

<x-alert/>