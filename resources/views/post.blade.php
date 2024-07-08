<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>  
   
    
  <article class="py-8 max-w-screen-md border-b boder-gray-300">
    <h2 class="mb-1 text-3x1 tracking-tight font-bold text-gray-900">{{ $post['title']}}</h2>
    <div>
      By. 
      <a href="/authors/{{ $post->author->username }}" class="hover:underline text-base text-gray-500 ">{{ $post->author->name }}</a>       
      in
      <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-base text-gray-500 ">{{ $post->category->name  }}</a> 
       | {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light">{{ $post['body'], 150 }} </p>
      <a href="/posts/" class="font-media text-blue-500">Back To Posts More &laquo;</a>
  </article>
    

</x-layout> 