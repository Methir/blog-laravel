          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Buscar</h5>
            <div class="card-body">
              <form method="GET" action="{{ route('home.search') }}">
                {{ csrf_field() }}
                <div class="input-group">
                  <input type="text" name="search" class="form-control" placeholder="Busca por...">
                  <span class="input-group-btn">
                    <input class="btn btn-secondary" type="submit" value="Go!"/>
                  </span>
                </div>
              </form>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categorias</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="{{ route('home.category', ['category' => 'test']) }}">Test</a>
                    </li>
                    <li>
                      <a href="{{ route('home.category', ['category' => 'none']) }}">Sem Categoria</a>
                    </li>
                    <li>
                      <a href="#"> - </a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#"> - </a>
                    </li>
                    <li>
                      <a href="#"> - </a>
                    </li>
                    <li>
                      <a href="#"> - </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Teste de framework</h5>
            <div class="card-body">
              <p>
                O site aqui está sendo desenvolvido como experiencia na utilização do framework backend laravel 5.5 e o framework frontend bootstrap 4.0 .
              </p>
              <ul>
                <li>Possibilitar envio de email</li>
              </ul>
            </div>
          </div>