<?php namespace Iuxmat\Silex\Provider\Fractal\Serializer;

use League\Fractal\Serializer\DataArraySerializer;

class VoidSerializer extends DataArraySerializer
{
    public function collection($resourceKey, array $data)
    {
        return $data;
    }

    public function item($resourceKey, array $data)
    {
        return $data;
    }
}
