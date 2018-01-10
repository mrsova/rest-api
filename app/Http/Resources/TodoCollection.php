<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TodoCollection extends ResourceCollection
{
    /**
     * php artisan make:resource TodoCollection
     *
     * https://laravel.com/docs/5.5/eloquent-resources
     *
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
    */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function ($page){
                 return [
                    'id' => $page->id,
                    'title' => $page->title,
                    'done' => $page->done
                 ];
            }),
            'links2' => [
                'хуелв' => 'Какая то хрень',
            ],
        ];
    }

    /**
     * Customize the outgoing response for the resource.
     * Для заголовков
     * @param  \Illuminate\Http\Request
     * @param  \Illuminate\Http\Response
     * @return void
     */
   /* public function withResponse($request, $response)
    {
        $response->header('X-Value', 'True');
    }*/
}
