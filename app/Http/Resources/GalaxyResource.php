<?php
 
namespace App\Http\Resources;
 
use Illuminate\Http\Resources\Json\JsonResource;
 
class GalaxyResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'dimension' => $this->dimension,
            'number_of_solar_systems' => $this->number_of_solar_systems,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}