<?php

namespace Jetimob;

class Imovel
{
    /**
     * Summary of codigo
     * @var string
     */
    public $codigo = '';
    /**
     * Summary of contrato
     * @var string
     */
    public $contrato = '';
    /**
     * Summary of tipo
     * @var string
     */
    public $tipo = '';
    /**
     * Summary of subtipo
     * @var string
     */
    public $subtipo = '';
    /**
     * Summary of observacoes
     * @var string
     */
    public $observacoes = '';
    /**
     * Summary of tipo_construcao
     * @var string
     */
    public $tipo_construcao = '';
    /**
     * Summary of entrega_ano
     * @var string
     */
    public $entrega_ano = '';
    /**
     * Summary of entrega_mes
     * @var string
     */
    public $entrega_mes = '';
    /**
     * Summary of mobiliado
     * @var bool
     */
    public $mobiliado = false;
    /**
     * Summary of mobiliado
     * @var bool
     */
    public $semi_mobiliado = false;
    /**
     * Summary of dormitorios
     * @var int
     */
    public $dormitorios = 0;
    /**
     * Summary of suites
     * @var int
     */
    public $suites = 0;
    /**
     * Summary of banheiros
     * @var int
     */
    public $banheiros = 0;
    /**
     * Summary of garagens
     * @var int
     */
    public $garagens = 0;
    /**
     * Summary of financiavel
     * @var 
     */
    public $financiavel = false;
    /**
     * Summary of minha_casa_minha_vida
     * @var 
     */
    public $minha_casa_minha_vida = false;
    /**
     * Summary of exclusividade
     * @var 
     */
    public $exclusividade = false;
    /**
     * Summary of area_total
     * @var float
     */
    public $area_total = 0.0;
    /**
     * Summary of area_privativa
     * @var float
     */
    public $area_privativa = 0.0;
    /**
     * Summary of area_util
     * @var float
     */
    public $area_util = 0.0;
    /**
     * Summary of medida
     * @var string
     */
    public $medida = '';
    /**
     * Summary of tipo_piso
     * @var string
     */
    public $tipo_piso = '';
    /**
     * Summary of terreno_frente
     * @var float
     */
    public $terreno_frente = 0.0;
    /**
     * Summary of terreno_fundos
     * @var float
     */
    public $terreno_fundos = 0.0;
    /**
     * Summary of terreno_esquerdo
     * @var float
     */
    public $terreno_esquerdo = 0.0;
    /**
     * Summary of terreno_direita
     * @var float
     */
    public $terreno_direita = 0.0;
    /**
     * Summary of terreno_total
     * @var float
     */
    public $terreno_total = 0.0;
    /**
     * Summary of medida_terreno_total
     * @var string
     */
    public $medida_terreno_total = '';
    /**
     * Summary of data_cadastro
     * @var string
     */
    public $data_cadastro = '';
    /**
     * Summary of data_update
     * @var string
     */
    public $data_update = '';
    /**
     * Summary of status
     * @var string
     */
    public $status = '';
    /**
     * Summary of valor_venda_visivel
     * @var bool
     */
    public $valor_venda_visivel = false;
    /**
     * Summary of valor_venda
     * @var float
     */
    public $valor_venda = 0.0;
    /**
     * Summary of valor_locacao_visivel
     * @var bool
     */
    public $valor_locacao_visivel = false;
    /**
     * Summary of valor_locacao
     * @var float
     */
    public $valor_locacao = 0.0;
    /**
     * Summary of valor_temporada_visivel
     * @var bool
     */
    public $valor_temporada_visivel = false;
    /**
     * Summary of valor_temporada
     * @var float
     */
    public $valor_temporada = 0.0;

    /**
     * Summary of rural
     * @var Rural
     */
    public $rural;
    /**
     * Summary of numero_pessoas
     * @var int
     */
    public $numero_pessoas = 0;
    /**
     * Summary of valor_condominio_visivel
     * @var bool
     */
    public $valor_condominio_visivel = false;
    /**
     * Summary of valor_condominio
     * @var float
     */
    public $valor_condominio = 0.0;
    /**
     * Summary of periodicidade_iptu
     * @var string
     */
    public $periodicidade_iptu = '';
    /**
     * Summary of valor_iptu_visivel
     * @var bool
     */
    public $valor_iptu_visivel = false;
    /**
     * Summary of valor_iptu
     * @var float
     */
    public $valor_iptu = 0.0;
    /**
     * Summary of meta_title
     * @var string
     */
    public $meta_title = '';
    /**
     * Summary of meta_description
     * @var string
     */
    public $meta_description = '';
    /**
     * Summary of valor_seguro_incendio
     * @var float
     */
    public $valor_seguro_incendio = 0.0;
    /**
     * Summary of valor_taxa_limpeza
     * @var float
     */
    public $valor_taxa_limpeza = 0.0;
    /**
     * Summary of posicao
     * @var string
     */
    public $posicao = '';
    /**
     * Summary of posicao_solar
     * @var string
     */
    public $posicao_solar = '';
    /**
     * Summary of distancia_mar
     * @var float
     */
    public $distancia_mar = 0.0;
    /**
     * Summary of permuta
     * @var bool
     */
    public $permuta = false;
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
     * Summary of situacao
     * @var string
     */
    public $situacao = '';
    /**
     * Summary of destaque
     * @var bool
     */
    public $destaque = false;
    /**
     * Summary of destaque_fim
     * @var string
     */
    public $destaque_fim = '';
    /**
     * Summary of condominio_tipo
     * @var string
     */
    public $condominio_tipo = '';
    /**
     * Summary of condominio_nome
     * @var string
     */
    public $condominio_nome = "";
    /**
     * Summary of condominio_fechado
     * @var bool
     */
    public $condominio_fechado = false;
    /**
     * Summary of id_condominio
     * @var int
     */
    public $id_condominio = 0;
    /**
     * Summary of id_imovel
     * @var int
     */
    public $id_imovel = 0;
    /**
     * Summary of id_corretor
     * @var int
     */
    public $id_corretor = 0;
    /**
     * Summary of endereco_complemento_visivel
     * @var 
     */
    public $endereco_complemento_visivel = false;
    /**
     * Summary of andar_visivel
     * @var 
     */
    public $andar_visivel = false;
    /**
     * Summary of endereco_numero_visivel
     * @var 
     */
    public $endereco_numero_visivel = false;
    /**
     * Summary of endereco_referencia_visivel
     * @var 
     */
    public $endereco_referencia_visivel = false;
    /**
     * Summary of endereco_logradouro_visivel
     * @var 
     */
    public $endereco_logradouro_visivel = false;
    /**
     * Summary of endereco_bairro_visivel
     * @var 
     */
    public $endereco_bairro_visivel = false;
    /**
     * Summary of endereco_cidade_visivel
     * @var 
     */
    public $endereco_cidade_visivel = false;
    /**
     * Summary of endereco_estado_visivel
     * @var 
     */
    public $endereco_estado_visivel = false;
    /**
     * Summary of endereco_uf
     * @var string
     */
    public $endereco_uf = '';
    /**
     * Summary of endereco_estado
     * @var string
     */
    public $endereco_estado = '';
    /**
     * Summary of endereco_cidade
     * @var string
     */
    public $endereco_cidade = '';
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
     * Summary of endereco_logradouro
     * @var string
     */
    public $endereco_logradouro = '';
    /**
     * Summary of endereco_cep
     * @var string
     */
    public $endereco_cep = '';
    /**
     * Summary of endereco_referencia
     * @var string
     */
    public $endereco_referencia = '';
    /**
     * Summary of endereco_numero
     * @var string
     */
    public $endereco_numero = '';
    /**
     * Summary of endereco_complemento
     * @var string
     */
    public $endereco_complemento = '';
    /**
     * Summary of andar
     * @var int
     */
    public $andar = 0;
    /**
     * Summary of id_estado
     * @var int
     */
    public $id_estado = 0;
    /**
     * Summary of id_cidade
     * @var int
     */
    public $id_cidade = 0;
    /**
     * Summary of id_bairro
     * @var int
     */
    public $id_bairro = 0;
    /**
     * Summary of geoposicionamento_visivel
     * @var 
     */
    public $geoposicionamento_visivel = false;
    /**
     * Summary of geoposicionamento_aproximado
     * @var 
     */
    public $geoposicionamento_aproximado = false;
    /**
     * Summary of titulo_anuncio
     * @var string
     */
    public $titulo_anuncio = '';
    /**
     * Summary of descricao_anuncio
     * @var string
     */
    public $descricao_anuncio = '';
    /**
     * Summary of tags
     * @var array<string>
     */
    public $tags = [];
    /**
     * Summary of seguro_fianca
     * @var 
     */
    public $seguro_fianca = false;
    /**
     * Summary of condominio_comodidades
     * @var array<string>
     */
    public $condominio_comodidades = [];
    /**
     * Summary of imovel_comodidades
     * @var array<string>
     */
    public $imovel_comodidades = [];
    /**
     * Summary of updated_at
     * @var string
     */
    public $updated_at = '';
    /**
     * Summary of data_atualizacao
     * @var string
     */
    public $data_atualizacao = '';


    /**
     * Summary of videos
     * @var array<Video>
     */
    public $videos = [];
    /**
     * Summary of plantas
     * @var array<Imagem>
     */
    public $plantas = [];
    /**
     * Summary of imagens
     * @var array<Imagem>
     */
    public $imagens = [];
    /**
     * Summary of tour
     * @var array<string>
     */
    public $tour = [];

    public function __construct()
    {
        $this->rural = new Rural();
    }

    public static function fromArray($data = [])
    {
        $data = (array) $data;
        $record = new self();

        if (isset($data['geoposicionamento_visivel'])) {
            switch ((int)$data['geoposicionamento_visivel']) {
                case 1:
                    $record->geoposicionamento_visivel = true;
                    break;
                case 2:
                    $record->geoposicionamento_visivel = true;
                    $record->geoposicionamento_aproximado = true;
                    break;

                default:
                    # code...
                    break;
            }
            unset($data['geoposicionamento_visivel']);
        }

        if (isset($data['mobiliado'])) {
            switch ((int)$data['mobiliado']) {
                case 1:
                    $record->mobiliado = true;
                    break;
                case 2:
                    $record->semi_mobiliado = true;
                    break;

                default:
                    # code...
                    break;
            }
            unset($data['mobiliado']);
        }

        if (isset($data['financiavel'])) {
            switch ((int)$data['financiavel']) {
                case 1:
                    $record->financiavel = true;
                    break;
                case 2:
                    $record->financiavel = true;
                    $record->minha_casa_minha_vida = true;
                    break;

                default:
                    # code...
                    break;
            }
            unset($data['financiavel']);
        }
        if (isset($data['destaque'])) {
            $data['destaque'] = $data['destaque'] === 'Destaque';
        }
        if (isset($data['tags']) && is_string($data['tags'])) {
            $data['tags'] = explode(',', $data['tags']);
            $data['tags'] = array_map('trim', $data['tags']);
            $data['tags'] = array_filter($data['tags'], function ($tag) {
                return $tag !== '';
            });
        }
        if (isset($data['condominio_comodidades']) && is_string($data['condominio_comodidades'])) {
            $data['condominio_comodidades'] = explode(',', $data['condominio_comodidades']);
            $data['condominio_comodidades'] = array_map('trim', $data['condominio_comodidades']);
            $data['condominio_comodidades'] = array_filter($data['condominio_comodidades'], function ($tag) {
                return $tag !== '';
            });
        }
        if (isset($data['imovel_comodidades']) && is_string($data['imovel_comodidades'])) {
            $data['imovel_comodidades'] = explode(',', $data['imovel_comodidades']);
            $data['imovel_comodidades'] = array_map('trim', $data['imovel_comodidades']);
            $data['imovel_comodidades'] = array_filter($data['imovel_comodidades'], function ($tag) {
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
