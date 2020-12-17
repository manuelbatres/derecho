<?php
    require("fpdf/fpdf.php");//librería para generar documento PDF (info fpdf.org)
    /////////////////LICENCIANTE////////////////
    $nombre=htmlspecialchars($_POST['nombre']);
    $nacionalidad=$_POST['nacionalidad'];
    $fnac=$_POST['fnac'];
    $lnac=$_POST['lnac'];
    $estado=$_POST['estado'];
    $ocupacion=$_POST['ocupacion'];
    $esc=$_POST['esc'];
    $calle=$_POST['calle'];
    $num=$_POST['num'];
    $frac=$_POST['frac'];
    $cp=$_POST['cp'];
    /////////////////LICENCIANTE////////////////

    /////////////////LICENCIATARIO////////////////
    $nombre2=$_POST['nombre2'];
    $nacionalidad2=$_POST['nacionalidad2'];
    $fnac2=$_POST['fnac2'];
    $lnac2=$_POST['lnac2'];
    $estado2=$_POST['estado2'];
    $ocupacion2=$_POST['ocupacion2'];
    $esc2=$_POST['esc2'];
    $calle2=$_POST['calle2'];
    $num2=$_POST['num2'];
    $frac2=$_POST['frac2'];
    $cp2=$_POST['cp2'];
    /////////////////LICENCIATARIO////////////////


    /////////////////LICENCIA////////////////
    $tipo=$_POST['tipo'];
    $espec=$_POST['espec'];
    $costo=$_POST['costo'];
    $costoletras=$_POST['costoletras'];
    $fecha=$_POST['fecha'];
    $fpago=$_POST['fpago'];
    $fentrega=$_POST['fentrega'];
    $intereses=$_POST['intereses'];
    /////////////////LICENCIA////////////////



    /////////////////FORMATO PENDIENTE////////////////
    $PDF = new FPDF();//Crea el objeto de tipo FPDF
    $PDF->addPage();//Añade una página al documento
    $PDF->setFont("Arial", 'B', 18);//Define la fuente como Arial 18 en "negritas"
    $PDF->multicell(0, 10, "CONTRATO DE LICENCIA DE USO DE MARCA (EN LO SUCESIVO: EL “CONTRATO”), QUE CELEBRAN ",0,"C",false);//Añade texto centrado
    $PDF->setFont("Arial", '', 11);//Fuente Arial 11, tipo de texto normal, sin formato adicional
    $txt="POR UNA PARTE ".$nombre." (EN LO SUCESIVO: LA “PARTE LICENCIANTE”) Y,";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt = "POR OTRA PARTE, ".$nombre2.", (EN LO SUCESIVO: LA “PARTE ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt ="LICENCIATARIA”, Y CONJUNTAMENTE CON LA PARTE LICENCIANTE, LAS “PARTES”), DE ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt = "CONFORMIDAD CON LAS SIGUIENTES DECLARACIONES Y CLAUSULAS: ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt = " ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt = " ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="                            DECLARACIONES";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "1.	Declara la parte LICENCIANTE que:";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "1.1	Es una persona moral debidamente constituida, su objeto social le permite la ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "celebración del presente Contrato y su representante cuenta con las facultades";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "necesarias y suficientes para celebrar el presente Contrato, mismas que a la fecha de ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "su celebración no le han sido modificadas, limitadas ni revocadas de manera alguna.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="1.2	 Su domicilio se ubica en $calle $num fracc. $frac cp $cp";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "2.	Declara la parte LICENCIATARIA que:";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "2.1 Es una persona moral debidamente constituida, su objeto social le permite la ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "celebración del presente Contrato y su representante cuenta con las facultades necesarias ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "y suficientes para celebrar el presente Contrato, mismas que a la fecha de su celebración ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "no le han sido modificadas, limitadas ni revocadas de manera alguna. ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "2.2 Su domicilio se ubica en $calle2 $num2 fracc. $frac2 cp $cp2 ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "3. 	Declaran conjuntamente las Partes que:";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "3.1 En la celebración del presente Contrato no ha mediado error, dolo, violencia, coerción o mala fe por cualquiera de las Partes, y que se reconocen la personalidad con la que cada parte comparece a la celebración del mismo. ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "EN VIRTUD DE LO ANTERIOR, las Partes en este acto acuerdan las siguientes: ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt= "4. En este contrato el licenciante se obliga a ceder el uso, no en exclusiva, al cliente del programa informático de software llamado <nombre del software> , que incluirá, no sólo la utilización del programa, sino también los servicios complementarios del mismo, que son: ".$intereses;
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="                    CLÁUSULAS";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="Condiciones de los servicios";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt=". El licenciante realizará la presentación de los servicios derivados de la cesión del uso del programa informático, teniendo en cuenta lo siguiente: ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="a.	El licenciante responderá de la calidad del trabajo desarrollado, con la diligencia necesaria que se le pueda exigir en relación al programa de software objeto del contrato. ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="b.	Al licenciante corresponderá la obligación de gestionar y obtener a su cargo todas las licencias, permisos y autorizaciones administrativas, que sean necesarias para la prestación de los servicios ofertados. ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="c.	Todos los impuestos, tributos y tasas que se devenguen por la cesión de uso del programa de software, serán por cuenta del licenciante sin perjuicio que en la facturación por los servicios prestados al cliente se incluya, el IVA/IGIC correspondiente.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="d.	 El licenciante responderá, de los daños y perjuicios ocasionados al cliente por errores o defectos causados por ella misma o el personal a su servicio en la ejecución de este contrato.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="e.	Las obligaciones anteriores tendrán que cumplirlas los empleados, colaboradores y posibles subcontratistas del licenciante, que pudieran participar en la prestación de servicios con el cliente.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="Licencia de uso";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="6. El licenciante realizará la cesión de la licencia de uso, no exclusiva, prestando los servicios, de la forma siguiente:";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="a. Licenciará al cliente para el uso del programa descrito en este contrato, entendiendo que dicha licencia le es cedida al cliente como licencia personal, no estando autorizado para ceder la misma a terceros.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="b. La propiedad intelectual del programa informático licenciado es de exclusiva titularidad del licenciante, incluyendo dicha propiedad intelectual, tanto el programa informático, como su código fuente y la estructura de su base de datos.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="Queda expresamente prohibido al cliente la reproducción total o parcial, modificación, adaptación, mantenimiento, corrección de errores, cesión, venta, alquiler, préstamo, cesión de uso total o parcial, transmisión del derecho de uso, divulgación, publicación, etc., del programa informático licenciado por cualquier medio, salvo la utilización del referido programa a través de los empleados y dentro del ámbito de su propia actividad.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="Confidencialidad";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="7. El licenciante se obliga a guardar confidencialidad sobre la información facilitada por el cliente y de la que tenga conocimiento como consecuencia de la prestación de los servicios objeto del presente contrato, debiendo mantener dicha confidencialidad durante un período mínimo de: ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="El incumplimiento de esta cláusula de confidencialidad supondrá la indemnización de los daños y perjuicios por el importe de ".$costo." $";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="También deberán cumplir lo anterior, los empleados, colaboradores y posibles subcontratistas de la parte suministradora, que pudieran intervenir en la relación contractual o prestación de servicios con el cliente.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="Protección de datos personales ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="8. Para el supuesto que en el desarrollo de la prestación de los servicios objeto del presente contrato, el licenciante accediera a datos de carácter personal del cliente, deberá cumplir las obligaciones incluidas en la legislación sobre protección de datos de carácter personal, siendo de su exclusiva responsabilidad las infracciones que pudiera cometer, si hiciera uso de los datos personales del cliente, con otra finalidad que no sea la de facilitar los servicios que constituyen el
    objeto de este contrato.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="El licenciante, deberá tomar las medidas técnicas y organizativas necesarias, para garantizar la seguridad de los datos de carácter personal y evitar su alteración, pérdida o tratamiento o acceso no autorizado, siendo de su exclusiva responsabilidad el incumplimiento de esta obligación.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="Duración";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="9. El plazo de duración de este contrato es de, a partir de su firma. ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="Una vez terminado el primer período de duración, se renovará automáticamente por el mismo periodo, salvo que cualquiera de los contratantes comunique al otro su voluntad de no prorrogar el contrato con 30 días de antelación a la fecha de terminación del mismo.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="Precio";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt ="10.  El precio por la cesión de la licencia de uso del programa informático ".$nombre." y sus servicios es de ".$costo." $ anuales, que se podrán pagar a los 15 días de la firma del contrato, mediante el pago en la cuenta bancaria que señale el licenciante, excluido el IVA/IGIC.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="Para el caso de renovación del contrato, el precio se actualizará conforme a las variaciones que experimente el IPC durante el año anterior.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="Mantenimiento ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="11. En el caso de cualquier avería o mal funcionamiento en la licencia de uso y servicios, el licenciante realizará la revisión y reparaciones necesarias, en el plazo de 72 horas desde que la incidencia en la utilización del programa informático, le haya sido comunicada por el usuario o cliente.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="El coste de los servicios de mantenimiento y reparación van incluidos en el precio de la utilización del programa informático, no pudiendo el licenciante hacer facturación alguna por estos trabajos, salvo que las averías y deficiente mantenimiento se haya producido como consecuencia de una incorrecta utilización del programa informático por parte del cliente, sus trabajadores y empleados.";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="Firma electrónica ";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", '', 11);
    $txt="12. Al usar la funcionalidad de e-sign para los contratos electrónicos, las partes acuerdan que este contrato es la copia original y que les vincula legalmente. Las partes recibirán un e-mail cuando este contrato haya sido firmado y formalizado por las mismas, sirviendo como prueba de su completa validez legal.
Y como prueba de lo convenido ambos firman el presente contrato por duplicado.
";
$PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
$PDF->setFont("Arial", '', 11);



    $PDF->multicell(0, 8, "El Vendedor",0,"C",false);
    $PDF->multicell(0, 10, "__________________________________________",0,"C",false);
    $PDF->multicell(0, 10, "_____________________________",0,"C",false);
    $PDF->multicell(0, 5, "El Comprador",0,"C",false);
    $PDF->multicell(0, 10, "__________________________________________",0,"C",false);
    $PDF->multicell(0, 10, "_____________________________",0,"C",false);
    $PDF->output();
?>