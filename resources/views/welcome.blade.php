<x-layout>
@if (session()->has('errorMessage'))
 <div class="alert alert danger text-center shadown rounded w-50">
   {{session('errorMessage')}}
 </div>

@endif

    
 
  
   <div class="container-fulid header-custom">
      <div class="row">
        <div class="col-12 mt-5 mb-5">  <h1 class="text-center">{{ __('ui.I Nostri articoli in evidenza') }} </h1></div>
      </div>
     <div class="article-wrapper">
       
       @forelse($articles as $article )
      
         <x-card :article=$article ></x-card>
       
        @empty 
        <div class="col-12">
          <h3 class="text-center"> {{__('ui.Non sono stati aggiunti annunci al momento')}}</h3>
        </div>  
        @endforelse   
      </div>
    </div>
 
        
   






</x-layout>
