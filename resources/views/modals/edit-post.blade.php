<div class="modal fade" id="edit-post" tabindex="-1" role="dialog" aria-labelledby="modal-edit-post" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-edit-post">Editar Postagem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('posts.update', ['id' => $post->id]) }}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="form-group">
              <label for="Texto">Texto</label>
              <textarea placeholder="Conteúdo" class="form-control" name="content" rows="10">{{ $post->content }}</textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Salvar Alterações"/>
        </form>
      </div>
    </div>
  </div>
</div>