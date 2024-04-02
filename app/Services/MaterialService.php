<?php

namespace App\Services;
use App\Models\Material;


class MaterialService {

    public function getMaterialsWithLocationByMaterialId($materialId) {
        $results = Material::join('material_location','materials.id','=','material_location.material_id')
            ->join('availability','material_location.availability_id','=','availability.id')
            ->join('material_status','material_location.material_status_id','=','material_status.id')
            ->join('locations','material_location.location_id','=','locations.id')
            ->where('material_id',$materialId)
            ->get([
                'material_location.id as id',
                'locations.description as location',
                'material_location.price as price',
                'availability.description as availability',
                'material_status.description as status',
            ]);

        return $results;
    }
}