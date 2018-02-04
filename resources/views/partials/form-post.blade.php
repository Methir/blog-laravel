<form method="POST" enctype="multipart/form-data" action="{{ route('posts.store') }}">
    {{ csrf_field() }}

    <div class="form-group">
        <label>Título</label>
        <input name="title" placeholder="Título da postagem" class="form-control" required="" type="text" value="{{ old('title') }}">
    </div>

    <div class="form-group">
        <label>Autor</label>
        <input name="author" placeholder="Autor" class="form-control" required="" type="text" value="{{ auth()->user()->name }}" readonly>
    </div>

    <div class="form-group">
        <label for="Texto">Texto</label>
        <textarea placeholder="Conteúdo" class="form-control" name="content" rows="10">{{ old('content') }}</textarea>
    </div>

    <div class="form-group">
        <label>Categoria</label>
        <select class="form-control" name="category">
            <option>test</option>
            <option>registro</option>
            <option>extras</option>
            <option>especiais</option>
            <option>personagens</option>
            <option>nenhuma</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Imagem</label>
        <input name="image" placeholder="Imagem" class="form-control-file" required="" type="file">
        <small class="form-text text-muted">Resolucão ideal de imagem para postagem: 900x300</small>
    </div>

    <div class="form-group">
        <input type="submit" value="Enviar" class="btn btn-primary mb-4 float-right"/>
    </div>

</form>
