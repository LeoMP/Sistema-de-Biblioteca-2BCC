		</div>
	</div>
</body>
<script>function validarSenha(){
    var campo1 = document.getElementById('senha').value;
    var campo2 = document.getElementById('senha2').value;       
    if (campo1 == campo2){
        document.getElementById('resultado').style.color = "blue";
        document.getElementById('resultado').innerHTML = "Senhas iguais";
    } else {
        document.getElementById('resultado').style.color = "red";
        document.getElementById('resultado').innerHTML = "Senhas não correspondentes";       
      }
    }</script>
</html>