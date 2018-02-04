<div class="modal fade" id="destroy-post" tabindex="-1" role="dialog" aria-labelledby="modal-destroy-title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-destroy-post">Tem certeza que deseja deletar?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{ asset('storage/redBro.png') }}" class="rounded mx-auto d-block" alt="Responsive image">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form method="POST" action="{{ route('posts.destroy', ['id'=> $post->id]) }}">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <input type="submit" class="btn btn-danger" value="Delete"/>
        </form>
      </div>
    </div>
  </div>
</div>