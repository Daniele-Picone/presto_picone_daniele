<x-layout>


<div class="login-container">
    <h2>Accedi</h2>
    <form action="{{route('login')}}" method="POST" >
        @csrf
      
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="Inserisci la tua email">
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required placeholder="Inserisci la tua password">
      </div>

      <button type="submit" class="login-button">Accedi</button>

      <div class="extra-links">
        <p>Non hai un account? <a href="{{route('register')}}">Registrati</a></p>
      </div>
      
    </form>
  </div>









</x-layout>