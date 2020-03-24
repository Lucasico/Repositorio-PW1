<form method="post" action='php/mostrar/mostrar.php'>
            <div class="row">
              <div class="input-field col s2">
                  <input type="text" name= "protocolo" id="autocomplete-input" class="autocomplete"
                  value="<?php echo $protocolo; ?>">
                  <label for="autocomplete-input">PROTOCOLO:</label>
              </div>
              <div class="input-field col s2 offset-s8">
                  <input type="text" name= "dataProtocolo" id="autocomplete-input" class="autocomplete"
                  value="<?php echo $dataRequerimento?>">
                  <label for="autocomplete-input">DATA:</label>
              </div>
            </div>   
            
            <div class="input-field col s8">
           
              <input type="text" name= "requerente" id="autocomplete-input" class="autocomplete"
              value="<?php echo $_POST['requerente']?>">
              <label for="autocomplete-input">REQUERENTE:</label>
            </div>
            <div class="input-field col s2">
              <input type="text" name= "numMatricula" id="autocomplete-input" class="autocomplete"
              value="<?php echo $_POST['numMatricula']?>">
              <label for="autocomplete-input">Nº DE MATRÍCULA:</label>
            </div>
            <div class="input-field col s2">
              <input type="text" name= "naturalidade" id="autocomplete-input" class="autocomplete"
              value="<?php echo $_POST['naturalidade']?>">
              <label for="autocomplete-input">NATURALIDADE:</label>
            </div>
            <div class="input-field col s10">
              <input type="text" name= "filiacao" id="autocomplete-input" class="autocomplete"
              value="<?php echo $_POST['filiacao']?>">
              <label for="autocomplete-input">FILIAÇÃO:</label>
            </div>
            <div class="input-field col s2">
              <input type="text" name= "dtNascimento" id="autocomplete-input" class="autocomplete"
              value="<?php echo $_POST['dtNascimento']?>">
              <label for="autocomplete-input">DATA DE NASCIMENTO:</label>
            </div>
            <div class="input-field col s8">
              <input type="text" name= "curso" id="autocomplete-input" class="autocomplete"
              value="<?php echo $_POST['curso']?>">
              <label for="autocomplete-input">CURSO:</label>
            </div>
            <div class="input-field col s2">
              <input type="text" name= "periodo" id="autocomplete-input" class="autocomplete"
              value="<?php echo $_POST['periodo']?>">
              <label for="autocomplete-input">PERÍODO(1):</label>
            </div>
            <div class="input-field col s2">
              <select name="turno" value="<?php echo $_POST['turno']?>">
                  <option value="" disabled selected>TURNO</option>
                  <option value="manha">MANHÃ</option>
                  <option value="tarde">TARDE</option>
                  <option value="noite">NOITE</option>
              </select> 
            </div>
            <div class="input-field col s2">
              <input type="text" name = "fone01" id="autocomplete-input" class="autocomplete"
              value="<?php echo $_POST['fone01']?>">
              <label for="autocomplete-input">TELEFONE 1:</label>
            </div>
            <div class="input-field col s2">
              <input type="text" name= "fone02" id="autocomplete-input" class="autocomplete"
              value="<?php echo $_POST['fone02']?>">
              <label for="autocomplete-input">TELEFONE 2:</label>
            </div>
            <div class="row">
              <div class="input-field col s8">
                <input id="email" name="email" type="email" class="validate"
                value="<?php echo $_POST['email']?>">
                <label for="email" data-error="wrong" data-success="right">EMAIL:</label>
              </div>
           </div>
           <div class="row">
             <div class="col s6">
             <p>
                  <input name="requerer" value = "segundaVia" type="radio" id="test1" 
                  <?php echo ($_POST['requerer'] == "segundaVia") ? "checked" : null; ?>/>
                  <label for="test1">2° VIA (ESPECIFICAR) - CAA</label>
                </p>
                <p>
                   <input name="requerer" value = "aproveitamento" type="radio" id="test2" 
                   <?php echo ($_POST['requerer'] == "aproveitamento") ? "checked" : null; ?>/>
                   <label for="test2">APROVEITAMENTO DE DISCIPLINA
                    (ANEXAR HISTÓRICO ESCOLAR E PROGRAMA
                    DA DISCIPLINA)
                    - COORD. DO CURSO</label>
                </p>
                <p>
                  <input name="requerer" value = "Matricula fora do prazo" type="radio" id="test03" 
                  <?php echo ($_POST['requerer'] == "Matricula fora do prazo") ? "checked" : null; ?>/>
                  <label for="test03"> MATRÍCULA FORA DO PRAZO (JUSTIFICAR) - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Cancelar Matrícula" type="radio" id="test04" 
                  <?php echo ($_POST['requerer'] == "Cancelar Matrícula") ? "checked" : null; ?>/>
                  <label for="test04">CANCELAMENTO DA MATRÍCULA - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Colação de grau" type="radio" id="test05" 
                  <?php echo ($_POST['requerer'] == "Colação de grau") ? "checked" : null; ?>/>
                  <label for="test05">COLAÇÃO DE GRAU / COLAÇÃO ESPECIAL (JUSTIFICAR) - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Declaração" type="radio" id="test06" 
                  <?php echo ($_POST['requerer'] == "Declaração") ? "checked" : null; ?>/>
                  <label for="test06">DECLARAÇÃO (ESPECIFICAR) - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Diploma" type="radio" id="test07" 
                  <?php echo ($_POST['requerer'] == "Diploma") ? "checked" : null; ?>/>
                  <label for="test07">DIPLOMA (ESPECIFICAR) - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Histórico Escolar" type="radio" id="test08" 
                  <?php echo ($_POST['requerer'] == "Histórico Escolar") ? "checked" : null; ?>/>
                  <label for="test08">HISTÓRICO ESCOLAR - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Reabertura de Matrícula" type="radio" id="test09" 
                  <?php echo ($_POST['requerer'] == "Reabertura de Matrícula") ? "checked" : null; ?>/>
                  <label for="test09">REABERTURA DE MATRÍCULA - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Segunda chamada" type="radio" id="test10"
                  <?php echo ($_POST['requerer'] == "Segunda chamada") ? "checked" : null; ?> />
                  <label for="test10">SEGUNDA CHAMADA (ANEXAR JUSTIFICATIVA E ESPECIFICAR) - COORD. DO CURSO</label>
                </p>
                <p>
                  <input name="requerer" value = "Reigresso" type="radio" id="test11" 
                  <?php echo ($_POST['requerer'] == "Reigresso") ? "checked" : null; ?>/>
                  <label for="test11">REINGRESSO - CAA</label>
                </p>
             </div>
             <div class="col s6">
             <p>
                  <input name="requerer" value = "Trancamento de disciplina" type="radio" id="test12" 
                  <?php echo ($_POST['requerer'] == "Trancamento de disciplina") ? "checked" : null; ?>/>
                  <label for="test12">TRANCAMENTO DE DISCIPLINA (ESPECIFICAR) - COORD. DO CURSO</label>
                </p>
                <p>
                   <input name="requerer" value = "Trancamento de matrícula" type="radio" id="test13" 
                   <?php echo ($_POST['requerer'] == "Trancamento de matrícula") ? "checked" : null; ?>/>
                   <label for="test13">TRANCAMENTO DE MATRÍCULA (ANEXAR
                  DOCUMENTAÇÃO COMPROBATÓRIA) - COORD. PEDAGÓGICA
                  </label>
                </p>
                <p>
                  <input name="requerer" value = "Transferencia para outra instituição" type="radio" id="test14" 
                  <?php echo ($_POST['requerer'] == "Transferencia para outra instituição") ? "checked" : null; ?>/>
                  <label for="test14"> TRANSFERÊNCIA PARA OUTRA INSTITUIÇÃO - CAA</label>
                </p>
                <p> 
                  <input name="requerer" value = "Validação de conhecimento"type="radio" id="test15"
                  <?php echo ($_POST['requerer'] == "Validação de conhecimento") ? "checked" : null; ?> />
                  <label for="test15">VALIDAÇÃO DE CONHECIMENTO (ESPECIFICAR) - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Reajuste" type="radio" id="test16" 
                  <?php echo ($_POST['requerer'] == "Reajuste") ? "checked" : null; ?>/>
                  <label for="test16">REAJUSTE - CAA</label>
                </p>
                <p>
                  <input name="requerer" value = "Recorreção de prova" type="radio" id="test17"
                  <?php echo ($_POST['requerer'] == "Recorreção de prova") ? "checked" : null; ?> />
                  <label for="test17">RECORREÇÃO DE PROVA - COORD. CURSO</label>
                </p>
                <p>
                  <input name="requerer" value = "Aux. Tranporte"type="radio" id="test18" 
                  <?php echo ($_POST['requerer'] == "Aux. Tranporte") ? "checked" : null; ?>/>
                  <label for="test18">AUXÍLIO - TRANSPORTE - SERV.SOCIAL</label>
                </p>
                <p>
                  <input name="requerer" value = "Aux. Moradia" type="radio" id="test19" 
                  <?php echo ($_POST['requerer'] == "Aux. Moradia") ? "checked" : null; ?>/>
                  <label for="test19">AUXÍLIO - MORADIA - SERV.SOCIAL</label>
                </p>
                <p>
                  <input name="requerer" value = "Aux. Óculos" type="radio" id="test20"
                  <?php echo ($_POST['requerer'] == "Aux. Óculos") ? "checked" : null; ?> />
                  <label for="test20">AUXÍLIO - ÓCULOS - SERV.SOCIAL</label>
                </p>
                <p>
                  <input name="requerer" value = "Aux. País e Maes" type="radio" id="test21"
                  <?php echo ($_POST['requerer'] == "Aux. País e Maes") ? "checked" : null; ?> />
                  <label for="test21">AUXÍLIO - PAÍS E MAES - SERV.SOCIAL</label>
                </p>
                <p>
                  <input name="requerer" value = "outro" type="radio" id="test22"
                  <?php echo ($_POST['requerer'] == "outro") ? "checked" : null; ?> />
                  <label for="test22">OUTRO (ESPECIFICAR)</label>
                </p>
             </div>
             
           </div>
           <div class="row">   
              <div class="input-field col s6">
                <input type="text" name = "espeficar"id="autocomplete-input" class="autocomplete"
                value="<?php echo $_POST['espeficar']?>">
                <label for="autocomplete-input">ESPECIFICAR:</label>
              </div>
              <div class="input-field col s6">
                <input type="text" name="justificar" id="autocomplete-input" class="autocomplete"
                value="<?php echo $_POST['justificar']?>">
                <label for="autocomplete-input">JUSTIFICAR:</label>
              </div>
              <div class="input-checkbox col s12">
                <input type="checkbox" name = "declaroConhecer" id="testdd5" value="ok"
                <?php echo ($_POST['declaroConhecer'] == "ok") ? "checked" : null; ?>/>
                <label for="testdd5">DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</label>
              </div>
              <div class="input-radio col s6">
                <span class="text-lighten-4 ">VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)</span>
                <p>
                  <input name="assEstudantil" value = "Requerente não deve chave" type="radio" id="abc1" 
                  <?php echo ($_POST['assEstudantil'] == "Requerente não deve chave") ? "checked" : null; ?>/>
                  <label for="abc1">O REQUERENTE NÃO DEVE CHAVE DE ARMÁRIO</label>
                </p>
                <p>
                  <input name="assEstudantil" value = "Requerente deve livros" type="radio" id="abc2" 
                  <?php echo ($_POST['assEstudantil'] == "Requerente deve livros") ? "checked" : null; ?>/>
                  <label for="abc2">O REQUERENTE DEVE CHAVE DO ARMÁRIO</label>
                </p>
              </div>
              <div class="input-radio col s6">
              <span class=" text-lighten-4 ">VISTO (BIBLIOTECA)</span>
                <p>
                    <input name="biblioteca" value = "Requerente não deve livros" type="radio" id="abc3" 
                    <?php echo ($_POST['biblioteca'] == "Requerente não deve livros") ? "checked" : null; ?>/>
                    <label for="abc3">O REQUERENTE NÃO DEVE LIVROS NA BIBLIOTECA</label>
                  </p>
                  <p>
                    <input name="biblioteca" value = "Requerente deve livros" type="radio" id="abc4"
                    <?php echo ($_POST['biblioteca'] == "Requerente deve livros") ? "checked" : null; ?> />
                    <label for="abc4">O REQUERENTE DEVE LIVRO(S) NA BIBLIOTECA</label>
                  </p>
              </div>
           </div>
          
        </form>