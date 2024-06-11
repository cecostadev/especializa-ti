@csrf()
<input type="text" name="subject" id="subject" placeholder="Assunto" value="{{ $support->subject ?? old('subject') }}"></br></br>
<textarea name="body" id="body" cols="20" rows="10" placeholder="Descrição">{{ $support->body ?? old('body') }}</textarea></br>
<button type="submit">Enviar</button>  