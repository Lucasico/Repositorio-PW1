<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Delivery</title>
    <link href="css/pedidos.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
</head>
<body >
    <div id="wrap">
        <form method="post" action='pedido/mostrar.php' id="delivery-form" >
        <div>
            <div class="cont_order">

               <fieldset>
                <legend>Monte sua refeição</legend>
                <div class='field_container'>
                <label >Acompanhamento</label>
                <label class='radiolabel'><input type="radio"  value="Arroz"  name="acompanhamento"/>Arroz branco</label><br/>
                <label class='radiolabel'><input type="radio"  value="Farofa" name="acompanhamento"/>Farofa de calabreza</label><br/>
                <label class='radiolabel'><input type="radio"  value="Salada" name="acompanhamento"/>Salada de folhas</label><br/>
                </div>
                
                <div class='field_container'>
                    <label for="flavor">Prato principal:</label >
                    <select id="flavor" name='prato_principal' >
                    <option value="">Escolha uma opção</option>
                    <option value="bife-parmegiana">Bife à parmegiana</option>
                    <option value="frango-parmegiana">Frango à parmegiana</option>
                    <option value="lasanha-brocolis">Lasanha de brócolis</option>
                    <option value="peixe-frito">Peixe frito</option>
                   </select>
                </div>

                <div class='field_container'>
                    <label >Adicionais:</label>
                    <label><input type="checkbox" value="Batata-frita" name="adicionais[]"/>Batata-frita</label>
                    <label><input type="checkbox" value="Batata-palha" name="adicionais[]"/>Batata-palha</label>
                    <label><input type="checkbox" value="Oregano" name="adicionais[]"/>Orégano</label>
                    <label><input type="checkbox" value="Vinagrete" name="adicionais[]"/>Vinagrete</label>
                    <label><input type="checkbox" value="Tomate" name="adicionais[]"/>Tomate</label>
                    <label><input type="checkbox" value="Cebola" name="adicionais[]"/>Cebola</label>
               </div>

               <div class='field_container'>
                   <label class="inlinelabel"><input type="checkbox" id="agree" value="ok" name="confirmar"/> Confirmo que as opções são verdadeiras e que está de acordo com o meu pedido.</label>
               </div>

              </fieldset>
            </div>
            
        	<div class="cont_details">
            	<fieldset>

                <legend>Informações do cliente</legend>

                <label for='name'>Nome completo</label>
                <input type="text" name="nome" id="name"/>
                <br/>

                <label for='address'>Endereço de entrega</label>
                <input type="text" name="entrega" id="address" />

                <br/>
                <label for='phonenumber'>Telefone</label>
                <input type="text"  name="telefone" id="phonenumber"/>

                <br/>
                </fieldset>
            </div>
            <input type='submit' id='submit' name="enviado" value='Realizar pedido'/>
        </div>  
       </form>
	</div>

</body>
</html>