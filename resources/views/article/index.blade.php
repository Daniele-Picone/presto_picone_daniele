<x-layout>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-12">
            <h1 class="display-1" > Articoli disponibili </h1>
        </div>


       <div class="row header-custom">
       <div class="article-wrapper">
        
        @forelse($articles as $article)
        
            <x-card  :article=$article ></x-card>
       
        @empty
        <div class="col-12">
            <h3>
                Non ci sono articoli al momento
            </h3>
        </div>

        @endforelse

   
    </div>

       </div>
   
      <div class="d-flex justify-content-center">
         <div >
            {{$articles->links()}}
         </div>
      </div>
    </div>
</div>

</x-layout>