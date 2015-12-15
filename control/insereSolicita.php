<?php

require '../persistence/conexao.php';

function insereSolicita($con, $leads) {
    $query = "insert into solicitacoes (para, solicito, coordenador, tel, email, evento, data, hora_inicial, hora_final, obs, campus, local, valor, atividade_comp, publico_est, nec_inscricao, certificado, publico_alvo, objetivo, programacao, convidados, parceiros, outrasInfos, divulgacao, banner, cartaz, filipeta, outrasDivulga) values 
   ('{$leads->para}','{$leads->solicito}','{$leads->nome_coordenador}','{$leads->tel_coordenador}', '{$leads->email_coordenador}','{$leads->nome_evento}','{$leads->data_evento}','{$leads->horai_evento}','{$leads->horaf_evento}','{$leads->observacoes}','{$leads->campus}', '{$leads->local}', '{$leads->valor}','{$leads->atComplementar}','{$leads->publicoEstimado}','{$leads->necInscricao}','{$leads->certificado}','{$leads->publicoalvo}','{$leads->objetivo}','{$leads->progComplementar}','{$leads->convidados}', '{$leads->parceiros}','{$leads->outrasInformacoes}','{$leads->divulgacao}','{$leads->quantBanner}','{$leads->quantCartaz}','{$leads->quantFilipeta}','{$leads->outrosDivulgacao}')";

    return mysqli_query($con, $query);
}
