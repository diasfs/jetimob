<?php

namespace Jetimob;

class Video
{
    /**
     * Summary of link
     * @var string
     */
    public $link = '';
    /**
     * Summary of titulo
     * @var string
     */
    public $titulo = '';
    /**
     * Summary of descricao
     * @var string
     */
    public $descricao = '';

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
