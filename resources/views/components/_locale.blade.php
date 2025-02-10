<form action="{{route('setLocale' , $lang)}}" class="d-inline" method="POST" >
    @csrf
    <button type="submit" class="btn"  >
        <img src="{{asset('vendor/blade-flags/languege-'. $lang . 'svg')}}" width="32" height="32"> 
    </button>
</form>