<?php

namespace Jetimob;

class Rural {
    /**
     * Summary of atividade_rural
     * @var string
     */
    public $atividade_rural = '';
    /**
     * Summary of rural_sedes
     * @var int
     */
    public $rural_sedes = 0;
    /**
     * Summary of rural_area_aravel
     * @var float
     */
    public $rural_area_aravel = 0.0;
    /**
     * Summary of medida_total_area_aravel
     * @var string
     */
    public $medida_total_area_aravel = '';


    public static function fromArray($data = [])
    {
        $record = new self();

        $data = (array) $data;
        foreach ($data as $key => $value) {
            if (!property_exists($record, $key) || null === $value) {
                continue;
            }
            $record->{$key} = $value;
        }

        return $record;
    }
}