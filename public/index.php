<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <!--jquery-->
        <script type='text/javascript' src="_js/jquery1-8-2.min.js"></script>
        <script type='text/javascript' src="_js/jquery.mask.min.js"></script>
        <script type='text/javascript' src="_js/scripts.js"></script>

        <link rel="stylesheet" type="text/css" href="http://www.uva.br/web/dhtmlxCalendar/codebase/skins/dhtmlxcalendar_omega.css">
        <link rel="stylesheet" type="text/css" href="http://www.uva.br/web/dhtmlxCalendar/codebase/dhtmlxcalendar.css">
        <script src="http://www.uva.br/web/dhtmlxCalendar/codebase/dhtmlxcalendar.js"></script>

        <title>Solicitação para o Marketing</title>
    </head>
    <body onload="doOnLoad();">
        <nav class="navbar navbar-default navbar-static-top">

        </nav>
        <div class="container">

            <?php
            if (isset($_GET['para']) && isset($_GET['tipo'])) {
                $para = $_GET['para'];
                $tipo = "Solicitação de " . $_GET['tipo'];
            } else {
                $tipo = "";
            }
            ?>

            <header class="col-xs-12">
                <div class="col-md-6 col-sm-6">
                    <img src="imgs/logouva.png" class="img-responsive">
                </div> 
                <div class="col-md-6 col-sm-6 titulo">
                    <h3><?php echo $tipo ?></h3>
                </div>
                <div class="col-xs-12 line-black">
                    <p>informações gerais</p>
                </div>
            </header>



            <form class="" id="form" action="../control/enviardados.php" method="post" name="dado">

                <div class="hidden">   
                    <label>Para: </label>
                    <input type="text" name="para" value="<?php echo $para ?>" placeholder="<?php echo $para ?>">
                </div>

                <div class="hidden">   
                    <label>Solicito...: </label>
                    <input type="text" name="solicito" value="<?php echo $tipo ?>" placeholder="<?php echo $tipo ?>">
                </div>

                <div class="form-group col-md-7 col-sm-3 col-xs-12">   
                    <label>Coordenador Responsável: </label>
                    <input type="text" name="nome_coordenador" class="form-control required" pattern="[A-Z a-z\s àèìòùâêîôûäëïöüáéíóúãõÀÈÌÒÙÂÊÎÔÛÄËÏÖÜÁÉÍÓÚÃÕç]+$"/>
                </div>
                <div class="form-group col-md-2 col-sm-2 col-xs-12">   
                    <label>Telefone: </label>
                    <input type="tel" name="tel_coordenador" class="form-control required" attern="[0-9 ()-]+$" id="tel"/>
                </div>
                <div class="form-group col-md-3 col-sm-3 col-xs-12">   
                    <label>Email: </label>
                    <input type="email" name="email_coordenador" class="form-control required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
                </div>

                <div class="form-group col-xs-12">
                    <div class="divisoria">
                    </div>
                </div> 

                <div class="form-group col-md-12 col-sm-12">   
                    <label>Título: </label>
                    <input type="text" name="nome_evento" class="form-control required"/>
                </div>

                <div class="form-group col-md-2 col-sm-4">   
                    <label>Data: </label>
                    <input type="text" id="inicial" name="inicial" class="form-control required"/>
                </div>

                <div class="form-group col-md-2 col-sm-4">   
                    <label>Hora de Início: </label>
                    <select  name="horai_evento" class="required form-control">
                        <option value="" selected="selected">--</option>
                        <option>6h00</option>
                        <option>6h30</option>
                        <option>7h00</option>
                        <option>7h30</option>
                        <option>8h00</option>
                        <option>8h30</option>
                        <option>9h00</option>
                        <option>9h30</option>
                        <option>10h00</option>
                        <option>10h30</option>
                        <option>11h00</option>
                        <option>11h30</option>
                        <option>12h00</option>
                        <option>12h30</option>
                        <option>13h00</option>
                        <option>13h30</option>
                        <option>14h00</option>
                        <option>14h30</option>
                        <option>15h00</option>
                        <option>15h30</option>
                        <option>16h00</option>
                        <option>16h30</option>
                        <option>17h00</option>
                        <option>17h30</option>
                        <option>18h30</option>
                        <option>18h30</option>
                        <option>19h30</option>
                        <option>19h30</option>
                        <option>20h30</option>
                        <option>20h30</option>
                        <option>21h30</option>
                        <option>21h30</option>
                        <option>22h30</option>
                        <option>22h30</option>
                    </select>
                </div>
                <div class="form-group col-md-2 col-sm-4">   
                    <label>Hora de Término: </label>
                    <select  name="horaf_evento" class="required form-control">
                        <option value="" selected="selected">--</option>
                        <option>6h00</option>
                        <option>6h30</option>
                        <option>7h00</option>
                        <option>7h30</option>
                        <option>8h00</option>
                        <option>8h30</option>
                        <option>9h00</option>
                        <option>9h30</option>
                        <option>10h00</option>
                        <option>10h30</option>
                        <option>11h00</option>
                        <option>11h30</option>
                        <option>12h00</option>
                        <option>12h30</option>
                        <option>13h00</option>
                        <option>13h30</option>
                        <option>14h00</option>
                        <option>14h30</option>
                        <option>15h00</option>
                        <option>15h30</option>
                        <option>16h00</option>
                        <option>16h30</option>
                        <option>17h00</option>
                        <option>17h30</option>
                        <option>18h30</option>
                        <option>18h30</option>
                        <option>19h30</option>
                        <option>19h30</option>
                        <option>20h30</option>
                        <option>20h30</option>
                        <option>21h30</option>
                        <option>21h30</option>
                        <option>22h30</option>
                        <option>22h30</option>
                    </select>
                </div>
                <div class="form-group col-md-6 col-sm-12">   
                    <label>Observações: </label>
                    <input type="text" name="observacoes" class="form-control required"/>
                </div>

                <div class="form-group col-md-3 col-sm-4">   
                    <label>Campus:</label>
                    <select  name="campus" class="required form-control">
                        <option value="" selected="selected">--</option>
                        <option value="Tijuca">Campus Tijuca</option>
                        <option value="Campus Centro">Campus Centro</option>
                        <option value="Barra Downtown"> Campus Barra Downtown</option>
                        <option value="Barra Marapendi">Campus Barra Marapendi</option>
                        <option value="Outros">Evento Externo</option>
                        <option value="Outros">Outros</option>
                    </select>
                </div>
                <div class="form-group col-md-6 col-sm-4">   
                    <label>Local</label>
                    <input type="text" name="local" class="form-control required"/>
                </div>
                <div class="form-group col-md-3 col-sm-4">   
                    <label>Valor:</label>
                    <input type="text" name="valor" class="form-control required" id="valor" placeholder="R$"/>
                </div>

                <div class="form-group col-xs-12">
                    <div class="divisoria">
                    </div>
                </div> 


                <div class="form-group col-md-6 col-sm-12" style="display: table;">   
                    <label>Público Alvo</label>
                    <div class="checkbox pontilhado"  required="required">
                        <label class="col-xs-5">
                            <input type="checkbox"  name="publicoalvo[]" value="professores"><p>Professores</p>
                            <input type="checkbox"  name="publicoalvo[]" value="Aluno de graduação"><p>Aluno de Graduação</p>
                            <input type="checkbox"  name="publicoalvo[]" value="aluno de pos graduacao"><p>Aluno de Pós-graduação</p>
                            <input type="checkbox"  name="publicoalvo[]" value="aluno de outras instituicoes"><p>Aluno de outras instituições</p>
                        </label>
                        <label class="col-xs-7">
                            <input type="checkbox"  name="publicoalvo[]" value="funcionarios"><p>Funcionarios</p>
                            <input type="checkbox"  name="publicoalvo[]" value="profissionais"><p>Profissionais</p>
                            <input type="checkbox"  name="publicoalvo[]" value="exalunos"><p>Ex-alunos</p>
                            <input type="checkbox"  name="publicoalvo[]" value="alunos do curso"><p>Alunos dos cursos: <input type="text" name="alunos_curso" class="small_input"></p>
                        </label>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12">   
                    <div class="form-group">
                        <label>Atividade complementar: </label>
                        <input type="text" name="atComplementar" class="form-control required"/>
                    </div>
                    <div class="form-group">
                        <label>Público estimado: </label>
                        <input type="text" name="publicoEstimado" class="form-control required"/>
                    </div>
                </div>

                <div class="form-group col-md-3 col-sm-12">   
                    <label>Será necessario inscrição?</label>
                    <div class="radio-choise"  required="required">
                        <input type="radio" name="necInscricao" value="sim"><span>Sim</span>
                        <input type="radio" name="necInscricao" value="nao" class="margin-left"><span>Não</span>
                    </div><br/>
                    <label>Oferece certificado?</label>
                    <div class="radio-choise"  required="required">
                        <input type="radio" name="certificado" value="sim"><span>Sim</span>
                        <input type="radio" name="certificado" value="nao" class="margin-left"><span>Não</span>
                    </div>
                </div>

                <div class="form-group col-xs-12">
                    <div class="divisoria"></div>
                </div> 

                <div class="form-group col-sm-12">
                    <label>Objetivo | Descrição | Expectativas: </label>
                    <textarea class="form-control" rows="5" name="objetivo"></textarea>
                </div>

                <div class="form-group col-sm-12">
                    <label>Programação completa: </label>
                    <textarea class="form-control" rows="5" name="progComplementar"></textarea>
                </div>

                <div class="form-group col-sm-12">
                    <label>Convidados | Palestrantes - Perfil Profissional: </label>
                    <textarea class="form-control" rows="5" name="convidados"></textarea>
                </div>

                <div class="form-group col-md-6 col-sm-12">
                    <label>Parceiros | Apoio: </label>
                    <textarea class="form-control" rows="4" name="parceiros"></textarea>
                    <label>Outras informações: </label>
                    <textarea class="form-control" rows="4" name="outrasInformacoes"></textarea>
                </div>
                <div class="form-group  col-md-6 col-sm-12">   
                    <label>Forma de divulgação:</label>
                    <div class="checkbox pontilhado"  required="required">
                        <label>
                            <input type="checkbox" name="divulgacao[]"  value="Emailmarketing"><p>Emailmarketing</p>
                            <input type="checkbox" name="divulgacao[]" value='Divulgação no Portal UVA'><p>Divulgação no Portal UVA</p>
                            <input type="checkbox" nname="divulgacao[]" value="Banner"><p>Banner | Quantidade: <input type="text" name="quantBanner" class="small_input"></p>
                            <input type="checkbox" name="divulgacao[]" value="Cartaz"><p>Cartaz | Quantidade: <input type="text" name="quantCartaz" class="small_input"></p>
                            <input type="checkbox" name="divulgacao[]" value="Filipeta"><p>Filipeta | Quantidade: <input type="text" name="quantFilipeta" class="small_input"></p>
                            <input type="checkbox" name="divulgacao[]" value="Outros"><p>Outros: <input type="text" name="outrosDivulgacao" class="small_input"></p>
                        </label>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <button class="btn btn-primary col-md-12">Enviar Pedido</button>
                </div>

                <div class="form-group col-xs-12">
                    <div class="divisoria">
                    </div>
                </div> 
                <div class="col-md-12 col-sm-12">
                    <div class="col-xs-12 box-footer">
                        <h3>Contatos</h3>
                        <ul>
                            <li><b>Marketing | Marketing  - marketing@uva.br</b>: (21) 2574-8909 ramal 309</li>
                            <li><b>Marketing Digital | Marketing </b>: website@uva.br / (21) 2574-8990 ramal 390</li>
                            <li><b>Comunicação Coorporativa | Relações Públicas</b>: imprensa@uva.br / (21) 2574-8989 ramal 389</li>
                        </ul>
                    </div>
                    <div class="col-xs-12 box-footer">
                        <h3>Considerações Finais</h3>
                        <ul>
                            <li>Apenas os Coordenadores de Curso podem solicitar atendimento.</li>
                            <li>Não ""cole"" os CV dos palestrantes ou convidados. Resuma ao máximo o perfil profissional. </li>
                            <li>Todo material gráfico solicitado somente será produzido mediante aprovação do centro de custo acadêmico informado.</li>
                            * As solicitações  de divulgação passam por uma análise das áreas de Marketing e Relações Públicas.<br/> 
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var myCalendar;
    function doOnLoad() {
        myCalendar = new dhtmlXCalendarObject(["inicial", "final"]);
        myCalendar.setSkin("omega");
    }
</script>

</body>
</html>
