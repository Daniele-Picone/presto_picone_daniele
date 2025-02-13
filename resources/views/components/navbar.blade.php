    <nav>
           <div class="logo">Presto.it</div>
           <div class="profile">
            
             @auth
             <div class="auth">
             
             <p>{{__("ui.Ciao")  }} , {{Auth::user()->name}}</p>
             @if (Auth::user()->is_revisor)
              <li class="revisor-zone" > <a href="{{route('revisor.index')}}">{{ __('ui.Zona Revisori') }}
                <span >{{App\Models\Article::toBerevisedCount()}}</span>
              </a></li>
              @endif
          </div>


           <li class="logout" >
          <form 
           action="{{route('logout')}}"
           method="POST"> 

            @csrf
             <button class="nav-link" type="submit" >{{ __('ui.Logout') }}</button>
            </form>
        </li>
           @endauth
           </div>

            <form action="{{route('article.search')}}" role="search" method="get" >
            <div class="search">
             <input type="search" placeholder="{{ __('ui.Search') }}" aria-label="search" name="query" >
             <button type="submit" class="serach-button" id="basic-addon2" > {{ __('ui.Search') }} </button>

           </div>

            </form>


          <ul>
            <li><a href="{{route('homepage')}}">{{ __('ui.Home') }}</a></li>
         @auth
            <li><a href="{{route('create.article')}}">{{ __('ui.Crea Articolo') }}</a></li>
        @endauth
            <li><a href="{{route('article.index')}}">{{ __('ui.Articoli') }}</a></li>
            <li>
              <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                {{ __('ui.Categorie') }}
              </a>
              <ul class="dropdown-menu" >
                @foreach ($categories as $category )
                <li><a class="dropdown-item text-capitalize"
                href="{{route('byCategory',['category'=>$category]) }}">{{__(key: "ui.$category->name")}}</a>
              </li>
              @if ($loop->last)
              <hr class="dropdown-divider">
              @endif
              
             
                
                @endforeach
              </ul>

            </li>
           
            @guest
            <li><a href="{{route('login')}}">{{ __('ui.Accedi') }}</a></li>
            <li><a href="{{route('register')}}">{{ __('ui.Registrati') }}</a></li>
            @endguest
          </ul>
        </nav>