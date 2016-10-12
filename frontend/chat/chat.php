
<meta charset="utf-8">
<style type="text/css">
*{
  margin: 0px;
	padding: 0px;
	border: 0px;
	font-family: "Open Sans";
}
.caja-chat{
	margin-right: 10px;
	width: 280px;
	border-color: #000;
}

footer {
  bottom:0;
  position:fixed;
  width: 260px;
}
.caja-chat{
  box-shadow:0 3px 10px rgba(0,0,0,0.23),0 3px 10px rgba(0,0,0,0.16);
  padding:0;
  position:absolute;
  bottom:0;width:90%;
  left:51px;
  background-color:#FFF;
  max-width: 280px;
  position:fixed;

}
.caja-chat-body{
    height:400px;
    width: 300px;
  }

.titulochat{
    background-color:<?php
$aleatorio = rand(1,18);

if ($aleatorio==1) {
  echo '#C1175A;';
} else
if ($aleatorio==2) {
  echo '#E54918;';

} else
if ($aleatorio==3) {
  echo '#05BB14;';

} else
if ($aleatorio==4) {
  echo '#2F3E9E;';
   echo '#2F3E9E;';
} else

if ($aleatorio==5) {
  echo '#1875D1;';

} else

if ($aleatorio==6) {
  echo '#0187D0;';
} else

if ($aleatorio==7) {
  echo '#0096A6;';
} else

if ($aleatorio==8) {
  echo '#00786A;';
} else

if ($aleatorio==9) {
  echo '#A9A9A9;';
} else
if ($aleatorio==10) {
  echo '#E54918;';
} else

if ($aleatorio==11) {
  echo '#AEB32A;';
} else

if ($aleatorio==12) {
  echo '#FABF2C;';
} else

if ($aleatorio==13) {
  echo '#FBC02C;';
} else

if ($aleatorio==14) {
  echo '#FFA000;';
} else

if ($aleatorio==15) {
  echo '#F57C00;';
} else

if ($aleatorio==16) {
  echo '#F47B00;';
} else

if ($aleatorio==17) {
  echo '#E54918;';
}
 if ($aleatorio==18) {
  echo '#000000;';
}
?>
    ;
    padding:10px}


.chat{
	margin: 10px;
	padding: 10px;
	color:#000;
	border: 1px;

}


.chat-entrante{
  margin: 6px;
  padding: 3px;
  border: 1px;
   margin-right: 25px;
}
.chat-saliente{

  text-align: right;
  margin: 6px;
  margin-right: 25px;
  padding: 3px;
  border: 1px;
      border-radius: 10px;
overflow: hidden;
  border-color: #2F3E9E;
  background-color: #e6e6e6;
}
.chat-text{
  width: 240px;
  border: 2px;
}

</style>



<footer>
	<div class="caja-chat">
		<div class="titulochat">
			<span class="chatnombre">
					<div  style="color: #fff">Avellaneda Alejandro</div>
			</span>
		</div>
		<div>
			<div class="caja-chat-body">
				<div class="chat">
		            <div class="chat-entrante">Hola como estas :D</div>
		            <div class="chat-saliente">bien y vos:)</div>
		            <div class="chat-entrante">que hacaes?</div>
		            <div class="chat-saliente">nada y vos?</div>
		            <div class="chat-saliente">OverPower</div>
				</div>

				<div class="control">
					<input type="text" class="chat-text" autocomplete="off" placeholder="Ingrese Aqui">

          			<button type="submit" value="Send" >Enviar</button>

				</div>
			</div>
		</div>
	</div>
</footer>
</body>
