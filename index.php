<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
</head>
<body>

<?php 



?>



   <div class="container">
         <div class="row">
             <div class="col-md-4 col-md-offset-4">
                 <div class="panel panel-success">
                      <div class="panel-body">
                          <form action="" method="GET">
                              <div class="form-group">
                                  <label for="">Seleccione operacion a realizar</label>
                                  <select name="operacion" id="operacion" class="form-control" required>
                                     <option  value="" selected>Seleccionar...</option>
                                      <option value="suma">Suma</option>
                                      <option  value="resta">Resta</option>
                                      <option value="multiplicacion" >Multiplicacion</option>
                                      <option  value="division">División</option>
                                  </select>
                                  <h4>Ingresa el primer numero:</h4>
                                  <input type="number" name="operacion1" required>
                                  <h4>Ingresa el segundo numero:</h4>
                                  <input type="number" name="operacion2" required>
                              </div>
                              <button type="submit" class="btn btn-info pull-right">Operar </button>
                          </form>
                      </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-8 col-md-offset-2">
                   <?php 
                     $operacion1  = $_GET['operacion1'];
                     $operacion2  = $_GET['operacion2'];
                     $operacion = $_GET['operacion'];
                      if($operacion == 'suma'){
                          $operacion = $operacion1 + $operacion2;
                      
                      }else if($operacion == 'resta'){
                        $operacion = $operacion1 - $operacion2;
                      
                        }else if($operacion == 'multiplicacion') {
                            $operacion = $operacion1 * $operacion2;
                      
                        }else if($operacion == 'division'){
                            $operacion = $operacion1 / $operacion2;
                      }else{
                        print("<h1>Seleccionar una operacion por favor</h1>");
                          
                      }
                      print "la solucion es"  .$operacion;
                     
                   ?>
                       
                   
             </div>
         </div>
     </div>
                    
</body>
</html>