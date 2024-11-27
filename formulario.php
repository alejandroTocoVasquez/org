<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Encuesta</title>
    <link rel="stylesheet" href="estilos/encuesta.css">
</head>
<body>
    <header>
        <h1>CUESTIONARIO</h1>
    </header>
    <div class="container" id="formulario">
        <section id="p0">
            <h3>1-¿Como calificas la atencion del personal?</h3>
            <label>
                <input type="radio" value="1" name="p0" onclick="respuesta(0,this)">Excelente
            </label>
            <label>
                <input type="radio" value="2" name="p0" onclick="respuesta(0,this)">Buena
            </label>
            <label>
                <input type="radio" value="3" name="p0" onclick="respuesta(0,this)">Regular
            </label>
            <label>
                <input type="radio" value="4" name="p0" onclick="respuesta(0,this)">Mala
            </label>
        </section>
        <section id="p1">
            <h3>2-¿Te gusto el ambiente?</h3>
            <label>
                <input type="radio" value="1" name="p1" onclick="respuesta(1,this)">Si, mucho
            </label>
            <label>
                <input type="radio" value="2" name="p1" onclick="respuesta(1,this)">Estuvo bien
            </label>
            <label>
                <input type="radio" value="3" name="p1" onclick="respuesta(1,this)">Podria mejorar
            </label>
            <label>
                <input type="radio" value="4" name="p1" onclick="respuesta(1,this)">No me gusto
            </label>
        </section>
        <section id="p2">
            <h3>3-¿Te atendieron rapido?</h3>
            <label>
                <input type="radio" value="1" name="p2" onclick="respuesta(2,this)">Si, muy rapido
            </label>
            <label>
                <input type="radio" value="2" name="p2" onclick="respuesta(2,this)">Bastante rapido
            </label>
            <label>
                <input type="radio" value="3" name="p2" onclick="respuesta(2,this)">Tardaron un poco
            </label>
            <label>
                <input type="radio" value="4" name="p2" onclick="respuesta(2,this)">Mucho tiempo de espera
            </label>
        </section>
        <section id="p3">
            <h3>4-¿Recomendarias nuestra sucursal?</h3>
            <label>
                <input type="radio" value="1" name="p3" onclick="respuesta(3,this)">Si, claro
            </label>
            <label>
                <input type="radio" value="2" name="p3" onclick="respuesta(3,this)">Si, pero con reservas
            </label>
            <label>
                <input type="radio" value="3" name="p3" onclick="respuesta(3,this)">No estoy seguro
            </label>
            <label>
                <input type="radio" value="4" name="p3" onclick="respuesta(3,this)">No, no volveria
            </label>
        </section>
        <section id="p4">
            <h3>5-¿Como calificarias la calidad de la bebida?</h3>
            <label>
                <input type="radio" value="1" name="p4" onclick="respuesta(4,this)">Excelente
            </label>
            <label>
                <input type="radio" value="2" name="p4" onclick="respuesta(4,this)">Buena
            </label>
            <label>
                <input type="radio" value="3" name="p4" onclick="respuesta(4,this)">Regular
            </label>
            <label>
                <input type="radio" value="4" name="p4" onclick="respuesta(4,this)">Mala
            </label>
        </section>
        <section id="p5">
            <h3>6-¿Te ofrecieron opciones del menu?</h3>
            <label>
                <input type="radio" value="1" name="p5" onclick="respuesta(5,this)">Si, muchas
            </label>
            <label>
                <input type="radio" value="2" name="p5" onclick="respuesta(5,this)">Algunas
            </label>
            <label>
                <input type="radio" value="3" name="p5" onclick="respuesta(5,this)">Pocas
            </label>
            <label>
                <input type="radio" value="4" name="p5" onclick="respuesta(5,this)">No, no me ofrecieron
            </label>
        </section>
        <section id="p6">
            <h3>7-¿El ambiente del lugar fue agradable?</h3>
            <label>
                <input type="radio" value="1" name="p6" onclick="respuesta(6,this)">Muy agradable
            </label>
            <label>
                <input type="radio" value="2" name="p6" onclick="respuesta(6,this)">Agradable
            </label>
            <label>
                <input type="radio" value="3" name="p6" onclick="respuesta(6,this)">Regular
            </label>
            <label>
                <input type="radio" value="4" name="p6" onclick="respuesta(6,this)">Desagradable
            </label>
        </section>
        <section id="p7">
            <h3>8-¿El establecimiento estaba limpio?</h3>
            <label>
                <input type="radio" value="1" name="p7" onclick="respuesta(7,this)">Si, muy limpia
            </label>
            <label>
                <input type="radio" value="2" name="p7" onclick="respuesta(7,this)">Algo limpia
            </label>
            <label>
                <input type="radio" value="3" name="p7" onclick="respuesta(7,this)">Regular
            </label>
            <label>
                <input type="radio" value="4" name="p7" onclick="respuesta(7,this)">Sucia
            </label>
        </section>
        <section id="p8">
            <h3>9-¿El tiempo de espera fue adecuado?</h3>
            <label>
                <input type="radio" value="1" name="p8" onclick="respuesta(8,this)">Si, perfecto
            </label>
            <label>
                <input type="radio" value="2" name="p8" onclick="respuesta(8,this)">Un poco largo
            </label>
            <label>
                <input type="radio" value="3" name="p8" onclick="respuesta(8,this)">Lento
            </label>
            <label>
                <input type="radio" value="4" name="p8" onclick="respuesta(8,this)">Muy largo
            </label>
        </section>
        <section id="p9">
            <h3>10-¿Los productos cumplieron con tus expectativas?</h3>
            <label>
                <input type="radio" value="1" name="p9" onclick="respuesta(9,this)">Si, completamente
            </label>
            <label>
                <input type="radio" value="2" name="p9" onclick="respuesta(9,this)">Si, mas o menos
            </label>
            <label>
                <input type="radio" value="3" name="p9" onclick="respuesta(9,this)">No mucho
            </label>
            <label>
                <input type="radio" value="4" name="p9" onclick="respuesta(9,this)">No, para nada
            </label>
        </section>
        <button onclick="corregir()">ENVIAR</button>
        <h2>Calificacion de la cafeteria: <span id="resultado"></span></h2>
        <h4><span id="mensaje"></span></h4>
        <h5><a href="index.php">FINALIZAR</a></h5>
    </div>
    
    <script language="JavaScript">
    let correctas = [1,1,1,1,1,1,1,1,1,1];
    let regulares = [2,2,2,2,2,2,2,2,2,2];
    let regulares2 = [3,3,3,3,3,3,3,3,3,3];
    
        let opcion_elegida=[];
        
        let cantidad_correctas=0;
        let cantidad_regulares=0;
        let cantidad_regulares2=0;
        
        function respuesta(num_pregunta, seleccionada){
            opcion_elegida[num_pregunta] = seleccionada.value;
            id="p" + num_pregunta;
            labels = document.getElementById(id).childNodes;
            labels[3].style.backgroundColor = "white";
            labels[5].style.backgroundColor = "white";
            labels[7].style.backgroundColor = "white";
            seleccionada.parentNode.style.backgroundColor = "#90b99e";
        }
        function corregir(){
            cantidad_correctas=0;
            cantidad_regulares=0;
            cantidad_regulares2=0;
            for(i=0; i<correctas.length;i++){
                if(correctas[i]==opcion_elegida[i]){
                    cantidad_correctas++;
                }
            }
            for(i=0; i<regulares.length;i++){
                if(regulares[i]==opcion_elegida[i]){
                    cantidad_regulares++;
                }
            }
            for(i=0; i<regulares2.length;i++){
                if(regulares2[i]==opcion_elegida[i]){
                    cantidad_regulares2++;
                }
            }
            
            regular1=cantidad_regulares/2;
            regular22=cantidad_regulares2/4;
            total=regular1+cantidad_correctas+regular22;
            document.getElementById("resultado").innerHTML = total+(" /10");
            if(total>=7.25){
                document.getElementById("mensaje").innerHTML = ("GRACIAS POR SU CRITERIO");
            }else{
                document.getElementById("mensaje").innerHTML = ("GRACIAS POR SU CRITERIO INTENTAREMOS MEJORAR NUESTRO SERVICIO");
            }
            
        }
    </script>
</body>
</html>