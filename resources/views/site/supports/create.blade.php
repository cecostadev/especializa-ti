<h1>Novo Ticket</h1>

<form action="{{ route('support.store')}}" method="POST">
    @csrf()
    <input type="text" name="subject" id="subject" placeholder="Assunto"></br></br>
    <textarea name="body" id="body" cols="20" rows="10" placeholder="Descrição"></textarea></br>
    <button type="submit">Enviar</button>   
</form>

@if ($errors->any())
    @foreach ($errors->all() as $error)
       {{ $error }} 
    @endforeach
@endif