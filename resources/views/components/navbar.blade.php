    <nav>
           <div class="logo">Presto.it</div>
           <div class="profile">
            
          <div class="auth">
          @auth
             
             <p>Ciao , {{Auth::user()->name}}</p>
             @if (Auth::user()->is_revisor)
              <li class="revisor-zone" > <a href="{{route('revisor.index')}}">Zona Revisori
                <span >{{App\Models\Article::toBerevisedCount()}}</span>
              </a></li>
              @endif
          </div>


           <li class="logout" >
          <form 
           action="{{route('logout')}}"
           method="POST"> 

            @csrf
             <button class="nav-link" type="submit" >Loguot</button>
            </form>
        </li>
           @endauth
           </div>

          <ul>
            <li><a href="{{route('homepage')}}">Home</a></li>
         @auth
            <li><a href="{{route('create.article')}}">Crea Articolo</a></li>
        @endauth
            <li><a href="{{route('article.index')}}">Articoli</a></li>
            <li>
              <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                categorie
              </a>
              <ul class="dropdown-menu" >
                @foreach ($categories as $category )
                <li><a class="dropdown-item text-capitalize"
                href="{{route('byCategory',['category'=>$category]) }}">{{$category->name}}</a>
              </li>
              @if ($loop->last)
              <hr class="dropdown-divider">
              @endif
              
             
                
                @endforeach
              </ul>

            </li>
            <li><a href="#">Contatti</a></li>
            @guest
            <li><a href="{{route('login')}}">Accedi</a></li>
            <li><a href="{{route('register')}}">Registrati</a></li>
            @endguest
          </ul>
        </nav>