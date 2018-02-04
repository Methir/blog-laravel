<form method="POST" enctype="multipart/form-data" action="{{ route('mail.send') }}">
    {{ csrf_field() }}

    <div class="form-group">
        <label>Assunto</label>
        <input name="subject" placeholder="Assunto do Email" class="form-control" required="" type="text" value="{{ old('subject') }}">
    </div>

    <div class="form-group">
        <label>De: </label>
        <input name="email" placeholder="Email" class="form-control" required="" type="text" value="{{ auth()->user()->email }}" readonly>
    </div>

    <div class="form-group">
        <label>Mensagem</label>
        <textarea placeholder="Escreva sua mensagem" class="form-control" name="message" rows="10">{{ old('message') }}</textarea>
    </div>

    <div class="form-group">
        <input type="submit" value="Enviar" class="btn btn-primary mb-4 float-right"/>
    </div>

</form>
