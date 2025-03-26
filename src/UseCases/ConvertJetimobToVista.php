<?php

namespace UseCases;

use Jetimob\CondominiosIterator;
use Jetimob\Condominio;
use Jetimob\Imovel as JetimobImovel;
use Vista\Foto;
use Vista\Imovel;
use Vista\Video;

class ConvertJetimobToVista
{
    /**
     * Summary of condominios
     * @var array<int, Condominio>
     */
    private $condominios = [];
    public function __construct(
        CondominiosIterator $condominios_iterator
    ) {
        foreach ($condominios_iterator as $condominio) {
            $this->condominios[$condominio->id_condominio] = $condominio;
        }
    }
    public function execute(JetimobImovel $row)
    {

        $imovel = new Imovel();
        $imovel->Empreendimento = $row->condominio_nome;

        if ($row->id_condominio !== 0 && isset($this->condominios[$row->id_condominio])) {
            $condominio = $this->condominios[$row->id_condominio];
            $imovel->Empreendimento = $condominio->nome;
            $imovel->CodigoEmpreendimento = $condominio->codigo;
        }
        $imovel->Codigo = $row->codigo;
        $imovel->ImoCodigo = $row->id_imovel;
        $imovel->UF = $row->endereco_uf;
        $imovel->CEP = $row->endereco_cep;
        $imovel->Cidade = $row->endereco_cidade;
        $imovel->Endereco = $row->endereco_logradouro;
        $imovel->Numero = $row->endereco_numero;
        $imovel->DescricaoWeb = $row->descricao_anuncio;
        $imovel->Latitude = $row->latitude;
        $imovel->Longitude = $row->longitude;
        $imovel->AreaPrivativa = $row->area_privativa;
        $imovel->AreaTotal = $row->area_total;
        $imovel->ValorVenda = $row->valor_venda;
        $imovel->ValorIptu = $row->valor_iptu;
        $imovel->ValorCondominio = $row->valor_condominio;
        $imovel->BanheiroSocialQtd = $row->banheiros;
        $imovel->Suites = $row->suites;
        $imovel->Dormitorios = $row->dormitorios;
        $imovel->Vagas = $row->garagens;
        $imovel->Bairro = $row->endereco_bairro;
        $imovel->BairroComercial = $row->endereco_bairro;
        $imovel->DataHoraAtualizacao = $row->updated_at;

        $count = 0;
        foreach ($row->imagens as $imagem) {
            $count++;
            $foto = new Foto();
            $foto->Codigo = $imovel->Codigo;
            $foto->Foto = $imagem->link;
            $foto->Codigo = $count;
            $foto->Ordem = $count;
            $foto->Destaque = $count === 1 ? 'Sim' : 'Nao';

            $imovel->Foto[] = $foto;
        }
        foreach ($row->plantas as $imagem) {
            $count++;
            $foto = new Foto();
            $foto->Codigo = $imovel->Codigo;
            $foto->Foto = $imagem->link;
            $foto->Codigo = $count;
            $foto->Ordem = $count;
            $foto->Destaque = $count === 1 ? 'Sim' : 'Nao';
            $imovel->Foto[] = $foto;
        }
        $count = 0;
        foreach ($row->videos as $v) {
            $count++;
            $video = new Video();

            $video->Codigo = $imovel->Codigo;
            $video->Video = $v->link;
            $video->DescricaoWeb = $v->descricao;
            $video->Destaque = $count === 1 ? 'Sim' : 'Nao';
            $video->ExibirNoSite = 'Sim';

            $imovel->Video[] = $video;
        }

        foreach ($row->condominio_comodidades as $titulo) {
            $imovel->InfraEstrutura[$titulo] = 'Sim';
        }
        foreach ($row->imovel_comodidades as $titulo) {
            $imovel->Caracteristicas[$titulo] = 'Sim';
        }


        return $imovel;
    }
}
