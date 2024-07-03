<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>  
   
    
  <article class="py-8 max-w-screen-md border-b boder-gray-300">
    <h2 class="mb-1 text-3x1 tracking-tight font-bold text-gray-900">{{ $post['title']}}</h2>
    <div class="text-base text-gray-500">
      <a href="#">{{  $post['author'] }}</a> | 01 Januari 2024
    </div>
    <p class="my-4 font-light">{{ $post['body'], 150 }} </p>
      <a href="/posts/" class="font-media text-blue-500">Back To Posts More &laquo;</a>
  </article>
    

</x-layout> 