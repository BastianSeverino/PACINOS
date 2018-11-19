function login(){
    var input1 = $("#inputEmail").val();
    var input2 = $("#inputPassword").val();
    var funcion = 1;
    $("#lblError1").text("");
    $("#lblError2").text("");
    if(input1.length<4)
    {
       $("#lblError1").text("***Error!! Campo debe tener un largo de más de 3 letras.");
       $("#inputEmail").focus();
    }
    else
    {
        if(input2.length<4)
        {
            $("#lblError2").text("***Error!! Campo debe tener un largo de más de 3 letras.");
            $("#inputPassword").focus();
        }
            else{
                $.ajax({
                    type:'POST',
                    url:'funciones/funciones.php',
                    data:('funcion=1&user='+input1+'&pass='+input2),
                    beforeSend: function () {
                        $('body').addClass('loading'); //Agregamos la clase loading al body
                    },
                    success:function(respuesta)
                    {
                        if(respuesta==1)
                        {
                            $('body').removeClass('loading'); //Removemos la clase loading
                            window.location.href = "views/inicio.php";
                        }
                        else if(respuesta==2){
                            $('body').removeClass('loading'); //Removemos la clase loading
                            $("#lblError2").text("Contraseña incorrecta.");
                        }
                        else if(respuesta==3){
                            $('body').removeClass('loading'); //Removemos la clase loading
                            $("#lblError1").text("Usuario no encontrado.");
                        }
                    },
                    error:function(){
                        $('body').removeClass('loading'); //Removemos la clase loading
                        alert("ERROR!! Hay problemas de comunicación. Favor comunicarse con el administrador si el problema persiste.");
                    }
                })
            }
        }
    
}

/*



$consulta = "SELECT * FROM `adm.usuarios`";
$result = $con->query($consulta);

   while ($comon = mysqli_fetch_array($result)){
    echo 'Hola don: '.$comon["user_NAME"];
    }



*/