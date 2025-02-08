<x-layout>
@if (session()->has('errorMessage'))
 <div class="alert alert danger text-center shadown rounded w-50">
   {{session('errorMessage')}}
 </div>

@endif


 <div class="container-fulid"></div>
   <div class="row justify-content-center ailgn-items-center">
     
   @forelse($articles as $article )
      <div class="col-12 col-md-6">
        <x-card :article=$article ></x-card>
      </div>
    @empty 
       <div class="col-12">
          <h3 class="text-center"> Non sono stati aggiunti annunci al momento</h3>
       </div>  
    @endforelse   



   </div>
  
        
   






</x-layout>
