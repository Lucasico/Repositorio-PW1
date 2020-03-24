<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <title>Formulário de Requerimento</title>
</head>
<body style="background-color: rgb(248,249,250)">
<div class="row">
    <div class="col s1 "></div>
    <div class="col s10">

    <div class="col s12 m12">
    <div class="card horizontal">
      <div class="card-image m4 s4">
        <img src="img/logo.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p class="text-lighten-4 right">GUIA DE REQUERIMENTO</p>
        </div>
      </div>
    </div>
  </div>
    <div class="row">
        <form method="post" action='php/mostrar/mostrar.php'>
            <div class="input-field col s8">
           
              <input type="text" name= "requerente" id="autocomplete-input" class="autocomplete">
              <label for="autocomplete-input">REQUERENTE:</label>
            </div>
            <div class="input-field col s2">
              <input type="text" name= "numMatricula" id="autocomplete-input" class="autocomplete">
              <label for="autocomplete-input">Nº DE MATRÍCULA:</label>
            </div>
            <div class="input-field col s2">
              <input type="text" name= "naturalidade" id="autocomplete-input" class="autocomplete">
              <label for="autocomplete-input">NATURALIDADE:</label>
            </div>
            <div class="input-field col s10">
              <input type="text" name= "filiacao" id="autocomplete-input" class="autocomplete">
              <label for="autocomplete-input">FILIAÇÃO:</label>
            </div>
            <div class="input-field col s2">
              <input type="text" name= "dtNascimento" id="autocomplete-input" class="autocomplete">
              <label for="autocomplete-input">DATA DE NASCIMENTO:</label>
            </div>
            <div class="input-field col s8">
              <input type="text" name= "curso" id="autocomplete-input" class="autocomplete">
              <label for="autocomplete-input">CURSO:</label>
            </div>
            <div class="input-field col s2">
              <input type="text" name= "periodo" id="autocomplete-input" class="autocomplete">
              <label for="autocomplete-input">PERÍODO(1):</label>
            </div>
            <div class="input-field col s2">
              <select name="turno">
                  <option value="" disabled selected>TURNO</option>
                  <option value="manha">MANHÃ</option>
                  <option value="tarde">TARDE</option>
                  <option value="noite">NOITE</option>
              </select> 
            </div>
            <div class="input-field col s2">
              <input type="text" name = "fone01" id="autocomplete-input" class="autocomplete">
              <label for="autocomplete-input">TELEFONE 1:</label>
            </div>
            <div class="input-field col s2">
              <input type="text" name= "fone02" id="autocomplete-input" class="autocomplete">
              <label for="autocomplete-input">TELEFONE 2:</label>
            </div>
            <div class="row">
              <div class="input-field col s8">
                <input id="email" name="email" type="email" class="validate">
                <label for="email" data-error="wrong" data-success="right">EMAIL:</label>
              </div>
           </div>
           <div class="row">
             <div class="col s6">
               <p>
                  <input name="requerer" value = "segundaVia" type="radio" id="test1" />
                  <label for="test1">2° VIA (ESPECIFICAR) - CAA</label>
                </p>
                <p>
                   <input name="requerer" value = "aproveitamento" type="radio" id="test2" />
                   <label for="test2">APROVEITAMENTO DE DISCIPLINA
                    (ANEXAR HISTÓRICO ESCOLAR E PROGRAMA
                    DA DISCIPLINA)
                    - COORD. DO CURSO</label>
                </p>
                <p>
                  <input name="requerer" value = "Matricula fora do prazo" type="radio" id="test03" />
                  <label for="test03"> MATRÍCULA FORA DO PRAZO (JUSTIFICAR) - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Cancelar Matrícula" type="radio" id="test04" />
                  <label for="test04">CANCELAMENTO DA MATRÍCULA - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Colação de grau" type="radio" id="test05" />
                  <label for="test05">COLAÇÃO DE GRAU / COLAÇÃO ESPECIAL (JUSTIFICAR) - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Declaração" type="radio" id="test06" />
                  <label for="test06">DECLARAÇÃO (ESPECIFICAR) - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Diploma" type="radio" id="test07" />
                  <label for="test07">DIPLOMA (ESPECIFICAR) - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Histórico Escolar" type="radio" id="test08" />
                  <label for="test08">HISTÓRICO ESCOLAR - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Reabertura de Matrícula" type="radio" id="test09" />
                  <label for="test09">REABERTURA DE MATRÍCULA - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Segunda chamada" type="radio" id="test10" />
                  <label for="test10">SEGUNDA CHAMADA (ANEXAR JUSTIFICATIVA E ESPECIFICAR) - COORD. DO CURSO</label>
                </p>
                <p>
                  <input name="requerer" value = "Reigresso" type="radio" id="test11" />
                  <label for="test11">REINGRESSO - CAA</label>
                </p>
               
             </div>


             <div class="col s6">
               <p>
                  <input name="requerer" value = "Trancamento de disciplina" type="radio" id="test12" />
                  <label for="test12">TRANCAMENTO DE DISCIPLINA (ESPECIFICAR) - COORD. DO CURSO</label>
                </p>
                <p>
                   <input name="requerer" value = "Trancamento de matrícula" type="radio" id="test13" />
                   <label for="test13">TRANCAMENTO DE MATRÍCULA (ANEXAR
                  DOCUMENTAÇÃO COMPROBATÓRIA) - COORD. PEDAGÓGICA
                  </label>
                </p>
                <p>
                  <input name="requerer" value = "Transferencia para outra instituição" type="radio" id="test14" />
                  <label for="test14"> TRANSFERÊNCIA PARA OUTRA INSTITUIÇÃO - CAA</label>
                </p>
                <p> 
                  <input name="requerer" value = "Validação de conhecimento"type="radio" id="test15" />
                  <label for="test15">VALIDAÇÃO DE CONHECIMENTO (ESPECIFICAR) - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Reajuste" type="radio" id="test16" />
                  <label for="test16">REAJUSTE - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Recorreção de prova" type="radio" id="test17" />
                  <label for="test17">RECORREÇÃO DE PROVA - COORD. CURSO</label>
                </p>
                <p>
                  <input name="requerer" value = "Aux. Tranporte"type="radio" id="test18" />
                  <label for="test18">AUXÍLIO - TRANSPORTE - SERV.SOCIAL</label>
                </p>
                <p>
                  <input name="requerer" value = "Aux. Moradia" type="radio" id="test19" />
                  <label for="test19">AUXÍLIO - MORADIA - SERV.SOCIAL</label>
                </p>
                <p>
                  <input name="requerer" value = "Aux. Óculos" type="radio" id="test20" />
                  <label for="test20">AUXÍLIO - ÓCULOS - SERV.SOCIAL</label>
                </p>
                <p>
                  <input name="requerer" value = "Aux. País e Maes" type="radio" id="test21" />
                  <label for="test21">AUXÍLIO - PAÍS E MAES - SERV.SOCIAL</label>
                </p>
                <p>
                  <input name="requerer" value = "outro" type="radio" id="test22" />
                  <label for="test22">OUTRO (ESPECIFICAR)</label>
                </p>
             </div>
             
           </div>
           <div class="row">   
              <div class="input-field col s6">
                <input type="text" name = "espeficar"id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">ESPECIFICAR:</label>
              </div>
              <div class="input-field col s6">
                <input type="text" name="justificar" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">JUSTIFICAR:</label>
              </div>
              <div class="input-checkbox col s12">
                <input type="checkbox" name = "declaroConhecer" id="testdd5" value="ok"/>
                <label for="testdd5">DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</label>
              </div>
              <div class="input-radio col s6">
                <span class="text-lighten-4 ">VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)</span>
                <p>
                  <input name="assEstudantil" value = "Requerente não deve chave" type="radio" id="abc1" />
                  <label for="abc1">O REQUERENTE NÃO DEVE CHAVE DE ARMÁRIO</label>
                </p>
                <p>
                  <input name="assEstudantil" value = "Requerente deve chave" type="radio" id="abc2" />
                  <label for="abc2">O REQUERENTE DEVE CHAVE DO ARMÁRIO</label>
                </p>
              </div>
              <div class="input-radio col s6">
              <span class=" text-lighten-4 ">VISTO (BIBLIOTECA)</span>
                <p>
                    <input name="biblioteca" value = "Requerente não deve livros" type="radio" id="abc3" />
                    <label for="abc3">O REQUERENTE NÃO DEVE LIVROS NA BIBLIOTECA</label>
                  </p>
                  <p>
                    <input name="biblioteca" value = "Requerente deve livros" type="radio" id="abc4" />
                    <label for="abc4">O REQUERENTE DEVE LIVRO(S) NA BIBLIOTECA</label>
                  </p>
              </div>
           </div>
           <button class="btn waves-effect green darken-1" type="submit" name="enviar" value="enviado">ENVIAR</button>
        </form>
      </div>
    </div>
    <div class="col s1 "></div>
  </div>
    <footer class="page-footer green darken-4">
      <div class="footer-copyright">
        <div class="container">
          IFCE Campus Cedro © 2020 Todos os direitos reservados
          <span class="text-lighten-4 right">Developed by<a class="grey-text text-lighten-4 right" href="https://github.com/Lucasico">Lucas Santos</a>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
        $('select').material_select();
    });
  </script>
</body>
</html>
<?php
  if(isset($_GET['error'])){
      require_once('php/mostrar/mostrar.php');
      var_dump($retorno);
  }
?>