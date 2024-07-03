<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all() 
    {
        return [
            [
                'id'=>1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1', 
                'author' => 'Adib Kurniawan',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum sunt in, incidunt eligendi sint aspernatur   vel voluptatem, ducimus, nulla eius recusandae quaerat quia itaque vitae aut provident quas mollitia? Excepturi!
                Magnam accusamus deleniti exercitationem impedit nulla eos voluptas nostrum. Deleniti expedita aspernatur aliquid nostrum cumque unde consequuntur consequatur omnis beatae deserunt nemo vel distinctio, labore commodi ut doloribus vero itaque!
                Pariatur at unde corrupti totam neque reprehenderit distinctio quae culpa nulla, facere omnis quo excepturi et recusandae. Et, mollitia iste quas porro aut, voluptatem inventore sapiente, sequi officiis accusamus labore?'
            ], 

            [
                'id'=>2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2' , 
                'author' => 'Adib Kurniawan 2',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum sunt in, incidunt eligendi sint aspernatur   vel voluptatem, ducimus, nulla eius recusandae quaerat quia itaque vitae aut provident quas mollitia? Excepturi!
                Magnam accusamus deleniti 2'
            ]
            ];
        
}

public static function find($slug):array {
    $post =Arr::first(static::all(),fn($post)=> $post['slug'] == $slug) ;

    if (!$post) {
        abort(404);
    }

    return $post;

}

}