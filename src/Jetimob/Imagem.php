<?php

namespace Jetimob;

class Imagem {
    /**
     * Summary of linke
     * @var string
     */
    public $link = '';
    /**
     * Summary of titulo
     * @var string
     */
    public $titulo = '';
    /**
     * Summary of link_thumb
     * @var string
     */
    public $link_thumb = '';

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