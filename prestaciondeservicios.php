<?php
    require("fpdf/fpdf.php");//librería para generar documento PDF (info fpdf.org)
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
    $nombre2=$_POST['nombre2']; $nacionalidad2=$_POST['nacionalidad2'];
    $fnac2=$_POST['fnac2'];
    $lnac2=$_POST['lnac2'];
    $estado2=$_POST['estado2'];
    $ocupacion2=$_POST['ocupacion2'];
    $esc2=$_POST['esc2'];
    $calle2=$_POST['calle2'];
    $num2=$_POST['num2'];
    $frac2=$_POST['frac2'];
    $cp2=$_POST['cp2'];
    $propiedad=$_POST['propiedad'];
    $fecha=$_POST['fecha'];
    $costo=$_POST['costo'];
    $costoletras=$_POST['costoletras'];
    $fpago=$_POST['fpago'];
    $intereses=$_POST['intereses'];
    $servicio=$_POST['servicio'];
    $finicio=$_POST['finicio'];
    $ffin=$_POST['ffin'];
    $modopago=$_POST['modopago'];
    $metodopago=$_POST['metodopago'];
    
    
    $PDF = new FPDF();//Crea el objeto de tipo FPDF
    $PDF->addPage();//Añade una página al documento
    $PDF->setFont("Arial", 'B', 18);//Define la fuente como Arial 18 en "negritas"
    $PDF->multicell(0, 10, "Contrato de Prestacion de Servicios",0,"C",false);//Añade texto centrado
    $PDF->setFont("Arial", '', 11);//Fuente Arial 11, tipo de texto normal, sin formato adicional
    $txt="Siendo ".$fecha.", se celebra el presente Contrato de Prestacion de Servicios entre ".$nombre.", como PRESTADOR DE SERVICIO, y ".$nombre2.", como CONTRATANTE, respecto del servicio que se describe a continuación, de conformidad con lo siguiente:";
    $PDF->multicell(180,4,$txt,0,"J",false);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", 'BU', 11);//Fuente Arial 11 negritas y subrayado
    $PDF->multicell(0, 10, "DECLARACIONES",0,"C",false);
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"a.  PRESTADOR DE SERVICIOS");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"   El o la C. $nacionalidad $nombre nacido(a) el $fnac en $lnac, con domicilio en $calle numero $num fracc. $frac CP $cp, declara ser $estado, mayor de edad, con ocupación $ocupacion y grado escolar $esc.",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"b.  CONTRATANTE");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"   El o la C. $nacionalidad2 $nombre2 nacido(a) el $fnac2 en $lnac2, con domicilio en $calle2 numero $num2 fracc. $frac2 CP $cp2, declara ser $estado2, mayor de edad, con ocupación $ocupacion2 y grado escolar $esc2.",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Ambas PARTES, conociendo el contenido de las declaraciones vertidas con anterioridad, las cuales ratifican por contener la verdad, y sin existir error, dolo, violencia, mala fe o vicio alguno en el consentimiento que pudieran invalidar el mismo, y estando de acuerdo en lo escrito y manifestando por ambas, sirven en someterse a las siguientes:",0,"J",false);

    $PDF->setFont("Arial", 'BU', 11);//Fuente Arial 11 negritas y subrayado
    $PDF->multicell(0, 10, "CLAUSULAS",0,"C",false);

    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"CLAUSULA PRIMERA. OBJETO DEL CONTRATO");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"La PARTE CONTRATANTE encomienda a la PARTE PRESTADORA y esta se obliga a prestar los servicios profesionales de $servicio, consistentes en: $propiedad.",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);

    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"CLAUSULA SEGUNDA. VIGENCIA DEL CONTRATO");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"La PARTE PRESTADORA se obliga a desempeñar los servicios objeto del presente contrato en forma personal e independiente, por el lapso comprendido del dia $finicio al dia $ffin, y sera la unica responsable de la ejecucion de los servicios cuanto estos no se ajusten a las condiciones del contrato. ",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);

    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"CLAUSULA TERCERA. OBLIGACIONES DE LAS PARTES");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"La PARTE PRESTADORA se obliga a aplicar su capacidad y conocimientos especializados para cumplir satisfactoriamente con las actividades que le encomiende LA PARTE CONTRATANTE, asi como responder a la calidad de los servicios y de cualquier otra responsabilidad en la que incurra, asi como de los daños y perjuicios que por inobservancia o negligencia de su parte de causaren a la PARTE CONTRATANTE. Asimismo se obliga a rendir los informes de las actividades desarrollaas, en los terminos y condiciones que se lo requiera LA PARTE CONTRATANTE.",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);

    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"CLAUSULA CUARTA. HONORARIO");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"La PARTE CONTRATANTE se compromete a pagar a LA PARTE PRESTADORA por los servicios profesionales a que se refiere en el presente contrato, la cantidad de $costo ($costoletras, MONEDA MEXICANA) mas el Impuesto al Valor Agregado (IVA), menos retenciones que por ley deban realizarse. $intereses. ",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);

    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"CLAUSULA QUINTA. FORMA DE PAGO");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"La PARTE CONTRATANTE se compromete a pagar los honorarios de LA PARTE PRESTADORA en $metodopago. Lo anterior se realizara en la fecha que LA PARTE CONTRATANTE acuerde con LA PARTE PRESTADORA, previa entrega de los recibos o comprobantes respectivos, los cuales deberan reunir los requisitos fiscales que marca la legislacion vigente en la materia.",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);

    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"CLAUSULA SEXTA. UNICO PAGO");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," LAS PARTES convienen que los honorarios establecidos en la clausula cuarta de este contrato seran la unica remuneracion que LA PARTE PRESTADORA recibira como pago por los servicios materia del mismo. El pago sera al $modopago del servicio contratado, debiendose pagar el $fpago. ",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);

    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"CLAUSULA SEPTIMA. RELACION NO LABORAL");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Las PARTES declaran que no hay relacion laboral alguna entre ellas, por lo que no se creara subordinacion de ninguna especie con la parte opuesta. Asumiendo la responsabilidad legal con relacion a terceros que contraten, por lo que en ningun supuesto operará la figura juridica de patrón, patrón solidario o susituto, debiendo a la parte que contrató al trabajador de que se trate, liberar de toda responsabilidad a la otra en caso de conflictos laborales provocados por personal de la primera.",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);
    $PDF->multicell(180,4,"La PARTE CONTRATANTE no adquiere ni reconoce obligación alguna de caracter laboral, a favor de LA PARTE PRESTADORA en virtud de no ser aplicables a la relacion contractual que consta en este instrumento, los articulos 1° y 8° de la Ley Federal del Trabajo, por lo que LA PARTE PRESTADORA no será considerada como trabajador en ningun efecto legal.",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);


    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"CLAUSULA OCTAVA. CONFIDENCIALDIAD");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Toda información que se suministren LAS PARTES, ya sea durante la fase precontractual, de negociación o durante la ejecución de los servicios contratados, sera proporcionada en términos de estrictica reserva y confidencialidad.",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);

    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"CLAUSULA NOVENA. RESTRICCIÓN DEL CONTRATO");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"La PARTE CONTRATANTE podra rescindir el presente contrato sin necesidad del juicio, por cualquiera de las siguientes causas, imputables a LA PARTE PRESTADORA:",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"    a) Por prestar los servicios deficientemenete, de manera inoportuna o por no apegarse a lo estipulado en el presente contrato;",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);
    $PDF->multicell(180,4,"     b) Por no observar la discrecion debida respecto de la información a la que tenga acceso, como consecuencia de la prestación de los servicios encomendados;",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);
    $PDF->multicell(180,4,"     c) Por suspender injustificadamente la prestación de servicios o por negarse a corregir lo rechazado por LA PARTE CONTRATANTE;",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);
    $PDF->multicell(180,4,"     d) Por negarse a informar a LA PARTE CONTRATANTE sobre la prestación y/o el resultado de los servicios encomendados;",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);
    $PDF->multicell(180,4,"   e) Cuando exista imposibilidad fisica o mental de LA PARTE PRESTADORA para prestar los servicios profesionales contratados;",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);
    $PDF->multicell(180,4,"     f) Por incumplimiento de cualquiera de las obligaciones establecidad en este contrato.",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);
    $PDF->multicell(180,4,"Para los efectos a que se refiere esta cláusula, LA PARTE CONTRATANTE comunicará por escrito a LA PARTE PRESTADORA, el incumplimiento en que este haya incurrido, para que en un termino de diez días hábiles exponga lo que a su derecho convenga y aporte, en su caso, las pruebas correspondientes.",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);
    $PDF->multicell(180,4,"Transcurrido el término señalado en el parrafo anterior LA PARTE CONTRATANTE tomando en cuenta los agumentos y pruebas ofrecidos por LA PARTE PRESTADORA, determinará de manera fundada y motivada si resulta procedente o no rescindir el contrato, y comunicará por escrito a LA PARTE PRESTADORA dicha determinación.",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);

    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"CLAUSULA DÉCIMA. AMPLIACIÓN DEL CONTRATO");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Si al termino de la vigencia del contrato LA PARTE CONTRATANTE requiere de los servicios de LA PARTE PRESTADORA, se pactará la celebración de un nuevo contrato, con las formalidades correspondientes.",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);

    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"CLAUSULA DÉCIMA PRIMERA. DAÑOS Y PERJUICIOS");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Queda expresamente convenido que la falta de cumplimiento a cualquiera de las obligaciones que aquí se contraen, y aquellas otras que dimanan de las leyes vigentes, será motivo de rescision del presente contrato, con el pago de daños y prejuicios que el incumplimiento cause a la contraparte que cumple.",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);

    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"CLAUSULA DÉCIMA SEGUNDA. SOLUCION DE CONFLICTOS Y JURISDICCIÓN");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"LAS PARTES acuerdan que en caso de presentarse diferencias o disputas por virtud de la interpretación, cumplimiento y ejecución del presente contrato, tratarán razonablemente de resolverlas en forma amistosa, a traves de un proceso de mediación y/o conciliación que será voluntario y tendra un carácter previo a cualquier otro. De continuar la controversia, LAS PARTES se someten voluntaria y expresamente a la jurisdiccion y competencia de los Juzgados y Tribunales que conforme a derecho deban conocer el asunto en razón del lugar en el que es firmado el acuerdo, con renuncia a su propio fuero en caso que este les aplique y sea procedente por razón de domicilio, vecindad, o por cualquier otra naturaleza.",0,"J",false);
    $PDF->multicell(180,4," ",0,"J",false);
    $PDF->multicell(180,4,"Leído lo que fue el presente contrato y enteradas las partes del contenido y alcances de todas y cada una de las clausulas del mismo, lo firman de comun acuerdo en AGUASCALIENTES a $fecha. ",0,"J",false);

    $PDF->multicell(180,4," ",0,"J",false);
    $PDF->setFont("Arial", 'B', 11);
    $PDF->multicell(0, 10, "PRESTADOR DE SERVICIOS",0,"C",false);
  $PDF->multicell(180,4," ",0,"J",false);
    $PDF->multicell(0, 10, "__________________________________________",0,"C",false);
    $PDF->multicell(0, 5, "$nombre",0,"C",false);
  $PDF->multicell(180,4," ",0,"J",false);
    $PDF->multicell(0, 10, "CONTRATANTE",0,"C",false);
  $PDF->multicell(180,4," ",0,"J",false);
    $PDF->multicell(0, 10, "__________________________________________",0,"C",false);
    $PDF->multicell(0, 5, "$nombre2",0,"C",false);
    $PDF->output();
?>