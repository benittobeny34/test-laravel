<?php

namespace App\Http\Resources\Post;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
         'title' => $this->title,
         'body' => $this->description,
         'user_id' => $this->user_id,
         'created_time'=>$this->created_at,
         'links' => [
                'comments'=>route('comments.index',$this->id),
            ],
        ];
    }
}
