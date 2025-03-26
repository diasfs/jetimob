<?php

namespace Jetimob;

class Corretor
{
    /**
     * Summary of id
     * @var int
     */
    public $id = 0;
    /**
     * Summary of nome
     * @var string
     */
    public $nome = '';
    /**
     * Summary of creci
     * @var string
     */
    public $creci = '';
    /**
     * Summary of biografia
     * @var string
     */
    public $biografia = '';
    /**
     * Summary of cargo
     * @var string
     */
    public $cargo = '';
    /**
     * Summary of data_nascimento
     * @var string
     */
    public $data_nascimento = '';
    /**
     * Summary of cidade
     * @var string
     */
    public $cidade = '';
    /**
     * Summary of uf
     * @var string
     */
    public $uf = '';
    /**
     * Summary of corretor
     * @var bool
     */
    public $corretor = false;
    /**
     * Summary of email
     * @var string
     */
    public $email = '';
    /**
     * Summary of telefone
     * @var string
     */
    public $telefone = '';
    /**
     * Summary of telefone_whatsapp
     * @var bool
     */
    public $telefone_whatsapp = false;
    /**
     * Summary of telefone2
     * @var string
     */
    public $telefone2 = '';
    /**
     * Summary of telefone2_whatsapp
     * @var bool
     */
    public $telefone2_whatsapp = false;
    /**
     * Summary of twitter
     * @var string
     */
    public $twitter = '';
    /**
     * Summary of facebook
     * @var string
     */
    public $facebook = '';
    /**
     * Summary of linkedin
     * @var string
     */
    public $linkedin = '';
    /**
     * Summary of skype
     * @var string
     */
    public $skype = '';
    /**
     * Summary of instagram
     * @var string
     */
    public $instagram = '';
    /**
     * Summary of gplus
     * @var string
     */
    public $gplus = '';
    /**
     * Summary of website
     * @var string
     */
    public $website = '';
    /**
     * Summary of avatar
     * @var string
     */
    public $avatar = '';

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
