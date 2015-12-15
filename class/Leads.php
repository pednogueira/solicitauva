<?php

class Leads {

    public $para;
    public $solicito;
    public $nome_coordenador;
    public $tel_coordenador;
    public $email_coordenador;
    public $nome_evento;
    public $data_evento;
    public $horai_evento;
    public $horaf_evento;
    public $observacoes;
    public $campus;
    public $local;
    public $valor;
    public $atComplementar;
    public $publicoEstimado;
    public $necInscricao;
    public $certificado;
    public $publicoalvo;
    public $objetivo;
    public $progComplementar;
    public $convidados;
    public $parceiros;
    public $outrasInformacoes;
    public $divulgacao;
    public $quantBanner;
    public $quantCartaz;
    public $quantFilipeta;
    public $outrosDivulgacao;
    public $datacadastro;
    public $dataprazo;

    function getPara() {
        return $this->para;
    }

    function getSolicito() {
        return $this->solicito;
    }

    function getNome_coordenador() {
        return $this->nome_coordenador;
    }

    function getTel_coordenador() {
        return $this->tel_coordenador;
    }

    function getEmail_coordenador() {
        return $this->email_coordenador;
    }

    function getNome_evento() {
        return $this->nome_evento;
    }

    function getData_evento() {
        return $this->data_evento;
    }

    function getHorai_evento() {
        return $this->horai_evento;
    }

    function getHoraf_evento() {
        return $this->horaf_evento;
    }

    function getObservacoes() {
        return $this->observacoes;
    }

    function getCampus() {
        return $this->campus;
    }

    function getLocal() {
        return $this->local;
    }

    function getValor() {
        return $this->valor;
    }

    function getAtComplementar() {
        return $this->atComplementar;
    }

    function getPublicoEstimado() {
        return $this->publicoEstimado;
    }

    function getNecInscricao() {
        return $this->necInscricao;
    }

    function getCertificado() {
        return $this->certificado;
    }

    function getPublicoalvo() {
        return $this->publicoalvo;
    }

    function getObjetivo() {
        return $this->objetivo;
    }

    function getProgComplementar() {
        return $this->progComplementar;
    }

    function getConvidados() {
        return $this->convidados;
    }

    function getParceiros() {
        return $this->parceiros;
    }

    function getOutrasInformacoes() {
        return $this->outrasInformacoes;
    }

    function getDivulgacao() {
        return $this->divulgacao;
    }

    function getQuantBanner() {
        return $this->quantBanner;
    }

    function getQuantCartaz() {
        return $this->quantCartaz;
    }

    function getQuantFilipeta() {
        return $this->quantFilipeta;
    }

    function getOutrosDivulgacao() {
        return $this->outrosDivulgacao;
    }

    function setPara($para) {
        $this->para = $para;
    }

    function setSolicito($solicito) {
        $this->solicito = $solicito;
    }

    function setNome_coordenador($nome_coordenador) {
        $this->nome_coordenador = $nome_coordenador;
    }

    function setTel_coordenador($tel_coordenador) {
        $this->tel_coordenador = $tel_coordenador;
    }

    function setEmail_coordenador($email_coordenador) {
        $this->email_coordenador = $email_coordenador;
    }

    function setNome_evento($nome_evento) {
        $this->nome_evento = $nome_evento;
    }

    function setData_evento($data_evento) {
        $this->data_evento = $data_evento;
    }

    function setHorai_evento($horai_evento) {
        $this->horai_evento = $horai_evento;
    }

    function setHoraf_evento($horaf_evento) {
        $this->horaf_evento = $horaf_evento;
    }

    function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    function setCampus($campus) {
        $this->campus = $campus;
    }

    function setLocal($local) {
        $this->local = $local;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setAtComplementar($atComplementar) {
        $this->atComplementar = $atComplementar;
    }

    function setPublicoEstimado($publicoEstimado) {
        $this->publicoEstimado = $publicoEstimado;
    }

    function setNecInscricao($necInscricao) {
        $this->necInscricao = $necInscricao;
    }

    function setCertificado($certificado) {
        $this->certificado = $certificado;
    }

    function setPublicoalvo($publicoalvo) {
        $this->publicoalvo = $publicoalvo;
    }

    function setObjetivo($objetivo) {
        $this->objetivo = $objetivo;
    }

    function setProgComplementar($progComplementar) {
        $this->progComplementar = $progComplementar;
    }

    function setConvidados($convidados) {
        $this->convidados = $convidados;
    }

    function setParceiros($parceiros) {
        $this->parceiros = $parceiros;
    }

    function setOutrasInformacoes($outrasInformacoes) {
        $this->outrasInformacoes = $outrasInformacoes;
    }

    function setDivulgacao($divulgacao) {
        $this->divulgacao = $divulgacao;
    }

    function setQuantBanner($quantBanner) {
        if ($quantBanner == "") {
            $this->quantBanner = $quantBanner;
        } else {
            $this->quantBanner = " -> Quandidade de Banners: " . $quantBanner;
        }
    }

    function setQuantCartaz($quantCartaz) {
        if ($quantCartaz == "") {
            $this->quantCartaz = $quantCartaz;
        } else {
            $this->quantCartaz = " | Quantidade de Cartazes: " . $quantCartaz;
        }
    }

    function setQuantFilipeta($quantFilipeta) {
        if ($quantFilipeta == "") {
            $this->quantFilipeta = $quantFilipeta;
        } else {
            $this->quantFilipeta = " | Quantidade de Filipetas: " . $quantFilipeta;
        }
    }

    function setOutrosDivulgacao($outrosDivulgacao) {
        if ($outrosDivulgacao == "") {
            $this->outrosDivulgacao = $outrosDivulgacao;
        } else {
            $this->outrosDivulgacao = " | Outras : " . $outrosDivulgacao;
        }
    }

}

function juntarCheck($f) {

    $m = implode(", ", $f);
    $f = $m;
    return $f;
}

function calculaPrazo($f) {

    $novadata = explode("/", $f);
    $dia = $novadata[0];
    $mes = $novadata[1];
    $ano = $novadata[2];

    $novadata = date('d/m/Y', mktime(0, 0, 0, $mes, $dia + 5, $ano));
    return $novadata;
}
