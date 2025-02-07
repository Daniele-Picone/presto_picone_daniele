<x-layout>


<div class="register-container">
    <h2>Registrati</h2>
    <form action="{{route('register')}}" method="POST">
      @csrf
      <div class="input-group">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" required placeholder="Inserisci il tuo nome">
      </div>
      @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror

      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email"  placeholder="Inserisci la tua email">
      </div>
      @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror

      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password"  placeholder="Inserisci la tua password">
      </div>
      @error('password')
            <p class="text-danger">{{ $message }}</p>
        @enderror

      <div class="input-group">
        <label for="password_confirmation">Conferma Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation"  placeholder="Ripeti la password">
      </div>
      @error('password_confirmation')
            <p class="text-danger">{{ $message }}</p>
        @enderror

      <button type="submit" class="register-button">Registrati</button>

      <div class="extra-links">
        <p>Hai già un account? <a href="{{route('login')}}">Accedi</a></p>
      </div>

    </form>
  </div>






</x-layout>