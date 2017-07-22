<form name="importa" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
        <input type="file" name="excel" />
        <input type='submit' name='enviar'  value="Importar"  />
        <input type="hidden" value="upload" name="action" />
</form>
    
<?php

extract($_POST);

    if ($action == "upload") {
        //cargamos el archivo al servidor con el mismo nombre
        //solo le agregue el sufijo bak_ 
        $archivo = $_FILES['excel']['name'];
        $tipo = $_FILES['excel']['type'];
        $destino = "bak_" . $archivo;
        if (copy($_FILES['excel']['tmp_name'], $destino)){
            echo "Archivo Cargado Con Éxito<br>";
        }
        else{
            echo "Error Al Cargar el Archivo<br>";
        }
        if (file_exists("bak_" . $archivo)) {
            /** Clases necesarias */
            require_once('Classes/PHPExcel.php');
            require_once('Classes/PHPExcel/Reader/Excel2007.php');
            // Cargando la hoja de cálculo
            $objReader = new PHPExcel_Reader_Excel2007();
            $objPHPExcel = $objReader->load("bak_" . $archivo);
            $objFecha = new PHPExcel_Shared_Date();
            // Asignar hoja de excel activa
            $objPHPExcel->setActiveSheetIndex(0);
            //conectamos con la base de datos 
            $cn = mysql_connect("localhost", "root", "") or die("ERROR EN LA CONEXION");
            $db = mysql_select_db("practicemanagementdatabase", $cn) or die("ERROR AL CONECTAR A LA BD");
            // Llenamos el arreglo con los datos  del archivo xlsx
            //for ($i = 1; $i <=47 ; $i++) {
                //$_DATOS_EXCEL[$i]['nombre'] = $objPHPExcel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
                //$_DATOS_EXCEL[$i]['direccion'] = $objPHPExcel->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                //$rut = trim($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue());
                //$nombre = trim($objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue());
                //$clave = trim($objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue());
                //$fecha = trim($objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue());
                //$mencion = trim($objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue());
                //$mail = trim($objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue());
                //$telefono = trim($objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue());
                //$celular = trim($objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue());
                //$profesor = trim($objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue());
                //$practica = trim($objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue());
                //$imagen = trim($objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue());
                //$sesion = trim($objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue());
                //$horas = trim($objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue());
                
                 //$query = "INSERT INTO estudiante(RutEstudiante,NombreEstudiante,ClaveEstudiante,FechaIncorporacion,Mencion_NombreMencion,MailEstudiante,TelefonoEstudiante,CelularEstudiante,ProfesorGuiaCP_RutProfGuiaCP,ConfiguracionPractica_NombrePractica,ImagenEstudiante,SesionesPlanificadas,HorasPlanificadas) VALUES('".$rut."','".$nombre."','".$clave."','".$fecha."','".$mencion."','".$mail."','".$telefono."','".$celular."','".$profesor."','".$practica."','".$imagen."','".$sesion."','".$horas."')";
                
                 //echo $query."<br>";
            //$result = mysql_query($query,$cn);
            //if (!$result) {
                 //die("query failed: " . mysql_error());
            //}
                
            //}
            
            
            $i=1; //celda inicial en la cual empezara a realizar el barrido de la grilla de excel
            $param=0;
            $contador=0;
            while($param==0) //mientras el parametro siga en 0 (iniciado antes) que quiere decir que no ha encontrado un NULL entonces siga metiendo datos
            {

                $rut = trim($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue());
                $nombre = trim($objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue());
                $clave = trim($objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue());
                $fecha = trim($objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue());
                $mencion = trim($objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue());
                $mail = trim($objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue());
                $telefono = trim($objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue());
                $celular = trim($objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue());
                $profesor = trim($objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue());
                $practica = trim($objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue());
                $imagen = trim($objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue());
                $sesion = trim($objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue());
                $horas = trim($objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue());
                
                 $query = "INSERT INTO estudiante(RutEstudiante,NombreEstudiante,ClaveEstudiante,FechaIncorporacion,Mencion_NombreMencion,MailEstudiante,TelefonoEstudiante,CelularEstudiante,ProfesorGuiaCP_RutProfGuiaCP,ConfiguracionPractica_NombrePractica,ImagenEstudiante,SesionesPlanificadas,HorasPlanificadas) VALUES('".$rut."','".$nombre."','".$clave."','".$fecha."','".$mencion."','".$mail."','".$telefono."','".$celular."','".$profesor."','".$practica."','".$imagen."','".$sesion."','".$horas."')";
                
                 echo $query."<br>";
            $result = mysql_query($query);
            if (!$result) {
                 die("query failed: " . mysql_error());
            }

                if($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue()==NULL) //pregunto que si ha encontrado un valor null en una columna inicie un parametro en 1 que indicaria el fin del ciclo while
                {
                    $param=1; //para detener el ciclo cuando haya encontrado un valor NULL
                }
                $i++;
                $contador=$contador+1;
            }
        }   
        //si por algo no cargo el archivo bak_ 
        else {
            echo "Necesitas primero importar el archivo";
        }
       
        //recorremos el arreglo multidimensional 
        //para ir recuperando los datos obtenidos
        //del excel e ir insertandolos en la BD
        
        echo "<strong><center>ARCHIVO IMPORTADO CON EXITO, EN TOTAL $campo REGISTROS Y $errores ERRORES</center></strong>";
        //una vez terminado el proceso borramos el archivo que esta en el servidor el bak_
        unlink($destino);
    }
?>
