    <nav>
           <div class="logo">Presto.it</div>
           @auth
           <p>Ciao , {{Auth::user()->name}}</p>
           <form action="{{route('logout')}}" method="POST" >
            @csrf
            Logout
           </form>
           @endauth
          <ul>
            <li><a href="{{route('hompage')}}">Home</a></li>
            <li><a href="">Articoli</a></li>
         
            <li><a href="{{route('create.article')}}">Crea Articolo</a></li>
        
            <li><a href="#">Chi Siamo</a></li>
            <li><a href="#">Contatti</a></li>
            @guest
            <li><a href="{{route('login')}}">Accedi</a></li>
            <li><a href="{{route('register')}}">Registrati</a></li>
            @endguest
          </ul>
        </nav>