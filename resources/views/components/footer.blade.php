<footer>
        <div class="footer-content">
          <div class="footer-section">
            <h4>{{__('ui.Contatti') }}</h4>
            <ul>
              <li>{{ __('ui.Email') }}: info@articolo.com</li>
              <li>{{ __('ui.Telefono') }}: +39 0123 456789</li>
              <li>{{ __('ui.Indirizzo') }}: Via Esempio 123, Città</li>
            </ul>
          </div>
          <div class="footer-section">
            <h4>{{ __('ui.Link Utili') }}</h4>
            <ul>
              <li><a href="">{{ __('ui.Home') }}</a></li>
              <li><a href="#">{{ __('ui.Articoli') }}</a></li>
              <li><a href="#">{{ __('ui.Categorie') }}</a></li>
              <li><a href="{{route('become.revisor')}}">{{ __('ui.Lavora con noi') }}</a></li>
              
            </ul>
          </div>
          <div class="footer-section">
            <h4>{{ __('ui.Seguici') }}</h4>
            <div class="social-icons">
              <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a> <!-- Codice FontAwesome: Facebook -->
              <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></i></a>  <!-- Codice FontAwesome: Twitter -->
              <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a><!-- Codice FontAwesome: Instagram -->
            </div>
          </div>
        </div>
        <div class="footer-section footer-language">
        
           <h4>{{ __('ui.Cambia Lingua') }}</h4>
           <x-_locale lang="it" ></x-_locale>
           <x-_locale lang="en" ></x-_locale>
           <x-_locale lang="es" ></x-_locale>
           
          </div>
        <p style="text-align:center; margin-top: 20px; font-size:0.9em;">&copy; 2025 {{ __('ui.Tutti i diritti riservati') }}.</p>
      </footer>

