<h1>Ediat Ticket</h1>

<form action="{{ route('support.update', $support->id)}}" method="post">
    @csrf()
    @method('put')
    <input type="text" name="subject" id="subject" placeholder="Assunto" value="{{ $support->subject }}"></br></br>
    <textarea name="body" id="body" cols="20" rows="10" placeholder="Descrição">{{ $support->body }}</textarea></br>
    <button type="submit">Enviar</button>   
</form>

@if ($errors->any())
    @foreach ($errors->all() as $error)
       {{ $error }} 
    @endforeach
@endif