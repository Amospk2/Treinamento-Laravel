
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="/index" class="brand-link brand-link">


      <span class="brand-text"><img src="" >Treinamento</span>
    </a>

    <div class="sidebar">
    @if (! Auth::guest())
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="/home" class="d-block"> Seja bem vindo<br> {{Auth::user()->name}}!</a>
          </div>
          <br>
      </div>
      @endif
             

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-header">MENU</li>

          <li class="nav-item">
            <a href="/cliente" class="nav-link">
            <i class="nav-icon fa fa-home"></i>
                <p>
                  Home
                </p>
            </a>
        </li>
      

        <li class="nav-item">
            <a href="/cliente/create" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
                <p>
                  Cadastro
                </p>
            </a>
        </li>




        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=" nav-icon fa fa-cart-plus"></i>
              <p>
                Loja CRUD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/gerenciar" class="nav-link">
                  <i class=" nav-icon far fa-circle"></i>
                  <p>Gerenciar produtos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/gerenciar/create" class="nav-link">
                  <i class=" nav-icon far fa-circle"></i>
                  <p>Cadastro de produtos</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=" nav-icon fa fa-cart-plus"></i>
              <p>
                Loja Vendas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/produtos" class="nav-link">
                  <i class=" nav-icon far fa-circle"></i>
                  <p>Produtos</p>
                </a>
              </li>
            </ul>
          </li>




          <li class="nav-item">
           <a href="{{ url('/logout') }}"  class="nav-link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="nav-icon fa fa-power-off"></i>  
                    <p>
                        Sair da Conta
                    </p>
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                <input type="submit" value="logout" style="display: none;">
            </form>
          </li>


        </ul>
      </nav>

    </div>

  </aside>
