<?php

include '../../class/mpdf60/mpdf.php';

$id = $_GET['id'];

include '../../persistence/conexao.php';
$sql = "select * from solicitacoes where id =" . $id;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$id = $row['id'];

$coordenador = $row['coordenador'];
$tel = $row['tel'];
$email = $row['email'];
$evento = $row['evento'];
$data = $row['data'];
$horai = $row['hora_inicial'];
$horaf = $row['hora_final'];
$obs = $row['obs'];
$campus = $row['campus'];
$local = $row['local'];
$valor = $row['valor'];
$atividade = $row['atividade_comp'];
$publicoest = $row['publico_est'];
$inscricao = $row['nec_inscricao'];
$certificado = $row['certificado'];
$publicoalvo = $row['publico_alvo'];
$objetivo = $row['objetivo'];
$programacao = $row['programacao'];
$convidado = $row['convidados'];
$parceiros = $row['parceiros'];
$infos = $row['outrasInfos'];
$divulgacao = $row['divulgacao'];
$banner = $row['banner'];


$html = "<html>
    <head></head>
    <body>
        <style>
            .container{
                width: 100%;
                margin: auto;
                font-family: \"Calibri\";
            }

            .line-black{
                background: #000;
                width: 100%;
                padding: 5px;
                border-radius: 5px;
                text-align: center;
                margin-bottom: 10px;
                color: white;
                text-transform: uppercase;
            }

            .line-tri{
                width: 35%;
            }

            .line-one{
                width: 100%;
            }

            .line-bi{
                width: 50%;
            }
            .line-four{
                width: 15%;
            }

            .line-tri, .line-one, .line-bi, .line-four{
                background: #EEEEEE;
                border-radius: 5px;
                padding: 5px;
            }

            #form{
                display: table;
            }

            label{
                display: block;
                font-weight: bold;
            }

            table{
                width: 100%;
                border-bottom: 1px black dashed;
                padding-bottom: 20px;
                margin-bottom: 20px;
            }
            
 .header{
               margin: 20px 0;
            }
        </style>

        <div class=\"container\">

 <div class=\"header\">
                <p>Solicitação nº $id</p>
            </div>

            <div class=\"line-black\">
                informações gerais
            </div>
            <table>
                <tr>
                    <td><label>Coordenador</label></td>
                    <td><label>Email</label></td>
                    <td><label>Telefone</label></td>
                </tr>
                <tr>
                    <td class=\"line-tri\">
                        $coordenador
                    </td>
                    <td class=\"line-tri\">
                       $email
                    </td>
                    <td class=\"line-tri\">
                        $tel
                    </td>
                </tr>

            </table>

            <table>
                <tr>
                    <td><label>Título</label></td>
                    <td><label>Data</label></td>
                </tr>
                <tr>
                    <td class=\"line-bi\">$evento</td>
                    <td class=\"line-bi\">$data</td>
                </tr>
            </table>

            <table>
                <tr>
                    <td><label>Hora de início</label></td>
                    <td><label>Hora de termino</label></td>
                    <td><label>Observações</label></td>
                </tr>
                <tr>
                    <td class=\"line-tri\">$horai</td>
                    <td class=\"line-tri\">$horaf</td>
                    <td class=\"line-tri\">$obs</td>
                </tr>
            </table>

            <table>
                <tr>
                    <td><label>Campus</label></td>
                    <td><label>Local</label></td>
                    <td><label>Valor</label></td>
                </tr>
                <tr>
                    <td class=\"line-tri\">$campus</td>
                    <td class=\"line-tri\">$local</td>
                    <td class=\"line-tri\">$valor</td>
                </tr>
            </table>

            <table>
                <tr>
                    <td><label>Público alvo</label></td>
                    <td><label>Público estimado</label></td>
                    <td><label>Complementar?</label></td>
                    <td><label>Inscrição?</label></td>
                    <td><label>Certificado?</label></td>
                </tr>
                <tr>
                    <td class=\"line-tri\">$publicoalvo</td>
                    <td class=\"line-four\">$publicoest</td>
                    <td class=\"line-four\">$atividade</td>
                    <td class=\"line-four\">$inscricao</td>
                    <td class=\"line-four\">$certificado</td>
                </tr>
            </table>

            <table>
                <tr>
                    <td><label>Objetivo | Descrição</label></td>
                </tr>
                <tr>
                    <td class=\"line-one\">$objetivo</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><label>Programação Completa</label></td>
                </tr>
                <tr>
                    <td class=\"line-one\">$programacao</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><label>Convidados | Palestrantes - Perfil Profissional</label></td>
                </tr>
                <tr>
                    <td class=\"line-one\">$convidado</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td><label>Parceiros | Apoio</label></td>
                    <td><label>Outras Informações</label></td>
                    <td><label>Formas de Divulgação</label></td>
                </tr>
                <tr>
                    <td class=\"line-tri\">$parceiros</td>
                    <td class=\"line-tri\">$infos</td>
                    <td class=\"line-tri\">$divulgacao</td>
                </tr>
            </table>


        </div>
    </div>
</body>
</html>
";

$mpdf = new mPDF();
$mpdf->WriteHTML($html);

$mpdf->Output();
exit();
?>
