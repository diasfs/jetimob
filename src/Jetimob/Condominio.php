<?php

namespace Jetimob;

class Condominio
{
    /**
     * Summary of tipo
     * @var string
     */
    public $tipo = '';
    /**
     * Summary of sistema_estrutural
     * @var string
     */
    public $sistema_estrutural = '';
    /**
     * Summary of id_imagem
     * @var int
     */
    public $id_imagem = 0;
    /**
     * Summary of id_condominio
     * @var int
     */
    public $id_condominio = 0;
    /**
     * Summary of codigo
     * @var int
     */
    public $codigo = 0;
    /**
     * Summary of nome
     * @var string
     */
    public $nome = '';
    /**
     * Summary of destaque
     * @var bool
     */
    public $destaque = false;
    /**
     * Summary of lancamento
     * @var bool
     */
    public $lancamento = false;
    /**
     * Summary of fechado
     * @var bool
     */
    public $fechado = false;
    /**
     * Summary of acabamentos
     * @var string
     */
    public $acabamentos = '';
    /**
     * Summary of alvenaria
     * @var string
     */
    public $alvenaria = '';
    /**
     * Summary of estruturas
     * @var string
     */
    public $estruturas = '';
    /**
     * Summary of fundacoes
     * @var string
     */
    public $fundacoes = '';
    /**
     * Summary of instalacoes
     * @var string
     */
    public $instalacoes = '';
    /**
     * Summary of paisagismo
     * @var string
     */
    public $paisagismo = '';
    /**
     * Summary of projetos
     * @var string
     */
    public $projetos = '';
    /**
     * Summary of terraplanagem
     * @var string
     */
    public $terraplanagem = '';
    /**
     * Summary of latitude
     * @var float
     */
    public $latitude = 0.0;
    /**
     * Summary of longitude
     * @var float
     */
    public $longitude = 0.0;
    /**
     * Summary of observacoes
     * @var string
     */
    public $observacoes = '';
    /**
     * Summary of registro_incorporacao
     * @var string
     */
    public $registro_incorporacao = '';
    /**
     * Summary of endereco_cep
     * @var string
     */
    public $endereco_cep = '';
    /**
     * Summary of endereco_logradouro
     * @var string
     */
    public $endereco_logradouro = '';
    /**
     * Summary of endereco_numero
     * @var string
     */
    public $endereco_numero = '';
    /**
     * Summary of id_bairro
     * @var int
     */
    public $id_bairro = 0;
    /**
     * Summary of id_cidade
     * @var int
     */
    public $id_cidade = 0;
    /**
     * Summary of id_estado
     * @var int
     */
    public $id_estado = 0;
    /**
     * Summary of data_cadastro
     * @var string
     */
    public $data_cadastro = '';
    /**
     * (Summary of data_update)
     * @var string
     */
    public $data_update = '';
    /**
     * Summary of entrega_mes
     * @var string
     */
    public $entrega_mes = '';
    /**
     * Summary of entrega_ano
     * @var string
     */
    public $entrega_ano = '';
    /**
     * Summary of administradora
     * @var string
     */
    public $administradora = '';
    /**
     * Summary of endereco_bairro
     * @var string
     */
    public $endereco_bairro = '';
    /**
     * Summary of endereco_zona
     * @var string
     */
    public $endereco_zona = '';
    /**
     * Summary of regiao
     * @var string
     */
    public $regiao = '';
    /**
     * Summary of endereco_cidade
     * @var string
     */
    public $endereco_cidade = '';
    /**
     * Summary of endereco_estado
     * @var string
     */
    public $endereco_estado = '';
    /**
     * Summary of endereco_uf
     * @var string
     */
    public $endereco_uf = '';
    /**
     * Summary of situacao
     * @var string
     */
    public $situacao = '';
    /**
     * Summary of total_imoveis_disponiveis
     * @var int
     */
    public $total_imoveis_disponiveis = 0;
    /**
     * Summary of infraestruturas
     * @var array<string>
     */
    public $infraestruturas = [];
    /**
     * Summary of etiquetas
     * @var string
     */
    public $etiquetas = '';
    /**
     * Summary of construtora
     * @var string
     */
    public $construtora = '';
    /**
     * Summary of incorporadora
     * @var string
     */
    public $incorporadora = '';
    /**
     * Summary of projeto_arquitetonico
     * @var string
     */
    public $projeto_arquitetonico = '';
    /**
     * Summary of projeto_paisagismo
     * @var string
     */
    public $projeto_paisagismo = '';
    /**
     * Summary of projeto_decoracao
     * @var string
     */
    public $projeto_decoracao = '';
    /**
     * Summary of id_pessoa_administracao
     * @var int
     */
    public $id_pessoa_administracao = 0;
    /**
     * Summary of id_pessoa_zelador
     * @var int
     */
    public $id_pessoa_zelador = 0;
    /**
     * Summary of id_pessoa_sindico
     * @var int
     */
    public $id_pessoa_sindico = 0;
    /**
     * Summary of id_pessoa_incorporadora
     * @var int
     */
    public $id_pessoa_incorporadora = 0;
    /**
     * Summary of id_pessoa_construtora
     * @var int
     */
    public $id_pessoa_construtora = 0;
    /**
     * Summary of id_pessoa_arquitetura
     * @var int
     */
    public $id_pessoa_arquitetura = 0;
    /**
     * Summary of id_pessoa_paisagismo
     * @var int
     */
    public $id_pessoa_paisagismo = 0;
    /**
     * Summary of id_pessoa_decoracao
     * @var int
     */
    public $id_pessoa_decoracao = 0;
    /**
     * Summary of origem
     * @var string
     */
    public $origem = '';
    /**
     * Summary of logotipo
     * @var string
     */
    public $logotipo = '';
    /**
     * Summary of tour350
     * @var array
     */
    public $tour350 = [];
    /**
     * Summary of videos
     * @var array<Video>
     */
    public $videos = [];
    /**
     * Summary of imagens
     * @var array<Imagem>
     */
    public $imagens = [];
    /**
     * Summary of plantas
     * @var array<Imagem>
     */
    public $plantas = [];



    public static function fromArray($data = [])
    {
        $data = (array) $data;
        $record = new self();

        if (isset($data['infraestruturas']) && is_string($data['infraestruturas'])) {
            $data['infraestruturas'] = explode(',', $data['infraestruturas']);
            $data['infraestruturas'] = array_map('trim', $data['infraestruturas']);
            $data['infraestruturas'] = array_filter($data['infraestruturas'], function ($tag) {
                return $tag !== '';
            });
        }

        if (isset($data['endereco_estado'])) {
            $estados = array(
                "Acre" => "AC",
                "Alagoas" => "AL",
                "Amazonas" => "AM",
                "Amapá" => "AP",
                "Bahia" => "BA",
                "Ceará" => "CE",
                "Distrito Federal" => "DF",
                "Espírito Santo" => "ES",
                "Goiás" => "GO",
                "Maranhão" => "MA",
                "Mato Grosso" => "MT",
                "Mato Grosso do Sul" => "MS",
                "Minas Gerais" => "MG",
                "Pará" => "PA",
                "Paraíba" => "PB",
                "Paraná" => "PR",
                "Pernambuco" => "PE",
                "Piauí" => "PI",
                "Rio de Janeiro" => "RJ",
                "Rio Grande do Norte" => "RN",
                "Rondônia" => "RO",
                "Rio Grande do Sul" => "RS",
                "Roraima" => "RR",
                "Santa Catarina" => "SC",
                "Sergipe" => "SE",
                "São Paulo" => "SP",
                "Tocantins" => "TO"
            );

            if (isset($estados[$data['endereco_estado']])) {
                $data['endereco_uf'] = $estados[$data['endereco_estado']];
            }
        }

        if (isset($data['videos']) && !empty($data['videos'])) {
            $data['videos'] = array_map(function ($video) {
                return Video::fromArray($video);
            }, $data['videos']);
        }

        if (isset($data['imagens']) && !empty($data['imagens'])) {
            $data['imagens'] = array_map(function ($video) {
                return Imagem::fromArray($video);
            }, $data['imagens']);
        }

        if (isset($data['plantas']) && !empty($data['plantas'])) {
            $data['plantas'] = array_map(function ($video) {
                return Imagem::fromArray($video);
            }, $data['plantas']);
        }


        foreach ($data as $key => $value) {
            if (!property_exists($record, $key) || null === $value) {
                continue;
            }
            $record->{$key} = $value;
        }

        return $record;
    }
}
