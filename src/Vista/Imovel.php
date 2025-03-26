<?php

namespace Vista;

class Imovel
{
    /**
     * Summary of Codigo
     * @var string
     */
    public $Codigo = '';
    /**
     * Summary of ImoCodigo
     * @var int
     */
    public $ImoCodigo = 0;
    /**
     * Summary of Empreendimento
     * @var string
     */
    public $Empreendimento = '';
    /**
     * Summary of CodigoEmpreendimento
     * @var int
     */
    public $CodigoEmpreendimento = 0;
    /**
     * Summary of UF
     * @var string
     */
    public $UF = '';
    /**
     * Summary of CEP
     * @var string
     */
    public $CEP = '';
    /**
     * Summary of Cidade
     * @var string
     */
    public $Cidade = '';
    /**
     * Summary of Endereco
     * @var string
     */
    public $Endereco = '';
    /**
     * Summary of Numero
     * @var string
     */
    public $Numero = '';
    /**
     * Summary of DescricaoWeb
     * @var string
     */
    public $DescricaoWeb = '';
    /**
     * Summary of Latitude
     * @var float
     */
    public $Latitude = 0.0;
    /**
     * Summary of Longitude
     * @var float
     */
    public $Longitude = 0.0;
    /**
     * Summary of AreaPrivativa
     * @var float
     */
    public $AreaPrivativa = 0.0;
    /**
     * Summary of AreaTotal
     * @var float
     */
    public $AreaTotal = 0.0;
    /**
     * Summary of ValorVenda
     * @var float
     */
    public $ValorVenda = 0.0;
    /**
     * Summary of ValorIptu
     * @var float
     */
    public $ValorIptu = 0.0;
    /**
     * Summary of ValorCondominio
     * @var float
     */
    public $ValorCondominio = 0.0;
    /**
     * Summary of BanheiroSocialQtd
     * @var int
     */
    public $BanheiroSocialQtd = 0;
    /**
     * Summary of Suites
     * @var int
     */
    public $Suites = 0;
    /**
     * Summary of Dormitorios
     * @var int
     */
    public $Dormitorios = 0;
    /**
     * Summary of Vagas
     * @var int
     */
    public $Vagas = 0;
    /**
     * Summary of Bairro
     * @var string
     */
    public $Bairro = '';
    /**
     * Summary of BairroComercial
     * @var string
     */
    public $BairroComercial = '';
    /**
     * Summary of DataHoraAtualizacao
     * @var string
     */
    public $DataHoraAtualizacao = '';

    /**
     * Summary of InfraEstrutura
     * @var array<string, string>
     */
    public $InfraEstrutura = [];
    /**
     * Summary of Caracteristicas
     * @var array<string, string>
     */
    public $Caracteristicas = [];

    /**
     * Summary of Foto
     * @var array<Foto>
     */
    public $Foto = [];
    /**
     * Summary of Video
     * @var array
     */
    public $Video = [];

    /**
     * Summary of CodigoAgencia
     * @var int
     */
    public $CodigoAgencia = 0;
    /**
     * Summary of CodigoCategoria
     * @var int
     */
    public $CodigoCategoria = 0;
    /**
     * Summary of CodigoMoeda
     * @var int
     */
    public $CodigoMoeda = 0;
    /**
     * Summary of Salas
     * @var int
     */
    public $Salas = 0;
    /**
     * Summary of VideoDestaque
     * @var string
     */
    public $VideoDestaque = '';
    /**
     * Summary of EEmpreendimento
     * @var string
     */
    public $EEmpreendimento = 'Nao';
    /**
     * Summary of Lancamento
     * @var string
     */
    public $Lancamento = 'Nao';

}
