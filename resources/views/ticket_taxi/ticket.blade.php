<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estiloticket.css">
    <title>Ticket</title>

    @vite('resources/assets/css/estiloticket.css'),

</head>

<body>
    <main class="principal">
        <section class="encabezado">
            
            <div class="cabeza1">
                <div>
                    <img src="assets/img/sri.png" class="logo_cabecera">
                </div>
                <h1>DIRECCIÓN ZONAL 7</h1>
            </div>
            
            <div class="cabeza2">
                <h1>RECIBO DE TAXI</h1>
                <br>
                <div class="cabeza3">
                    <table border="1px solid">
                        <tr>
                            <td>Fecha: </td>            
                            <td>Solicitud</td>            
                            <td>Utilización</td>            
                        </tr>
                    
                        <tr>            
                            <td></td>            
                            <td>03/08/2023</td>            
                            <td>..../..../....</td>            
                        </tr>
                    </table>
                </div>
            </div>

            <div class="cabeza4">
                <table border="1px solid">
                    <tr>
                        <td>Valor Total</td>           
                                 
                    </tr>
                
                    <tr>            
                                 
                        <td>$ ......</td>            
                    </tr>
                </table>
                <h3>ORIGINAL</h3>
            </div>

            
        </section>
        <section class="usuario">
            <h2>Nombre</h2>
            <h2>Departamento</h2>
            <h2>Origen</h2>
            <h2>Asunto</h2>
        </section>
        <section class="sec_tabla">
            <div class="tabla">
                <table border="1px solid">
                    <tr>
                        <td></td>            
                        <td>Valor Unitario</td>            
                        <td>Lugar / Tiempo</td>            
                    </tr>
                
                    <tr>            
                        <td>Ruta 1: </td>            
                        <td>10.00</td>            
                        <td>Recorrido Urbano Loja</td>            
                    </tr>

                    <tr>            
                        <td>Valor Espera: </td>            
                        <td></td>            
                        <td></td>            
                    </tr>

                    <tr>            
                        <td>Valor Total: </td>            
                        <td></td>            
                        <td></td>            
                    </tr>
                </table>

                <div class="tabla1">
                    <h5>Hora de salida</h5>
                    <br>
                    <h5>Hora de llegada</h5>
                </div>
            </div>
        </section>
        <section class="tabla_letras">
            <h3>Valor total en letras: ........................................................</h3>
            <h3>Número Unidad: .................   Número Autorización: ...........</h3>
            <h3>Observaciones: ...................................................................................</h3>
        </section>
        <section class="firma">
            <div class="firma1">
                <h5>Autorizado por</h5>
                <br>
                <br>
                <h6>--------------</h6>
                <h6>Firma</h6>
                <br>
                <h5>Nombre:</h5>
            </div>
            <div class="firma2">
                <h5>Custodio</h5>
                <br>
                <br>
                <h6></h6>
                <h5>Firma</h5>
                <br>
                <h5>Nombre:</h5>
            </div>
            <div class="firma3">
                <h5>Usuario</h5>
                <br>
                <br>
                <h6>________________________</h6>
                <h6>Firma</h6>
                <br>
                <h5>Nombre:</h5>
            </div>
        </section>
            
     
    </main> 
</body>
</html>