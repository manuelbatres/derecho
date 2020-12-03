<?php
    require("fpdf/fpdf.php");//librería para generar documento PDF (info fpdf.org)
    $nombre=htmlspecialchars($_POST['nombre']);
    $apepat=$_POST['apepat'];
    $apemat=$_POST['apemat'];
    $lnac=$_POST['lnac'];
    $calle=$_POST['calle'];
    $num=$_POST['num'];
    $frac=$_POST['frac'];
    $cp=$_POST['cp'];
    $nombre2=$_POST['nombre2'];
    $apepat2=$_POST['apepat2'];
    $apemat2=$_POST['apemat2'];
    $puesto2=$_POST['puesto2'];
    $numnotario2=$_POST['numnotario2'];
    $lic2=$_POST['lic2'];
    $lnac2=$_POST['lnac2'];
    $calle2=$_POST['calle2'];
    $num2=$_POST['num2'];
    $frac2=$_POST['frac2'];
    $cp2=$_POST['cp2'];
    $costo=$_POST['costo'];
    $costoletras=$_POST['costoletras'];
    $monto=$_POST['monto'];
    $montoletras=$_POST['montoletras'];
    $fechaini=$_POST['fechaini'];
    $fechafin=$_POST['fechafin'];
    $visita=$_POST['visita'];
    $visitam=$_POST['visitam'];
    

    $PDF = new FPDF();//Crea el objeto de tipo FPDF
    $PDF->addPage();//Añade una página al documento
    $PDF->setFont("Arial", 'B', 18);//Define la fuente como Arial 18 en "negritas"
    $PDF->multicell(0, 10, "Contrato de Mantenimiento",0,"C",false);//Añade texto centrado
    
    $PDF->setFont("Arial", '', 11);//Fuente Arial 11, tipo de texto normal, sin formato adicional
    $txt=" Contrato de prestación de servicio de mantenimiento preventivo y correctivo, que celebran por una parte ".$nombre.', a quienes para efectos del presente contrato se les denominará "EL CLIENTE", y por la otra parte '.$nombre2.", en su carácter de ".$puesto2.', a quien en lo sucesivo se le denominará "PRESTADOR DE SERVICIOS" al tenor de las siguientes declaraciones y cláusulas:';
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", 'BU', 11);//Fuente Arial 11 negritas y subrayado
    $PDF->multicell(0, 10, "DECLARACIONES",0,"C",false);

    $PDF->setFont("Arial", 'B', 11);
    $PDF->multicell(180,4,'I.- DECLARA "EL CLIENTE" ');
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," 1.- Que tiene la capacidad y personalidad jurídica, está facultado para suscribir el presente contrato. ");//Opción 2 para escribir, concatenar todo en la misma función de escritura. La opción 3 se ve en la línea 76.
    $PDF->multicell(180,4," 2.- Que señala como domicilio $calle $num cp $cp Fracc. $frac , $lnac , para efectos del contrato.");

    $PDF->setFont("Arial", 'B', 11);
    $PDF->multicell(180,4,'II.- DECLARA "EL PRESTADOR" ');
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," 1.- Ser una persona física legalmente constituida conforme a las leyes mexicanas, como lo acredita con la escritura constitutiva No. _ _ _ __ _ _ fecha _ _ _ _ _ _ _ _ _ _ otorgada ante la fe del Notario Público Número $numnotario2 , Lic. $lic2 .");
    $PDF->multicell(180,4," 2.- Que tiene capacidad jurídica para contratar y obligarse, de conformidad al objeto de este contrato y que dispone de la organización y de los elementos técnicos, económicos y humanos suficientes para ello.");
    $PDF->multicell(180,4," 3.- Que su representante $nombre2 , está facultado para contratar según lo acredita como representante legal.");
    $PDF->multicell(180,4," 4.- Que dispone de la organización, experiencia, personal, equipo y además de los elementos necesarios y apropiados, y que conoce en su integridad el equipo para llevar a efecto el mantenimiento objeto de este contrato.");
    $PDF->multicell(180,4," 5.- Que para efecto del presente contrato señala como domicilio el ubicado en $calle2 $num2 cp $cp2 Fracc. $frac2 , $lnac2 ");

    $PDF->setFont("Arial", 'B', 11);
    $PDF->multicell(180,4,"III.- DECLARAN AMBAS PARTES: ");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"ÚNICO.- Enteradas las partes de las declaraciones anteriores, acuerdan suscribir el presente contrato al tenor de las siguientes:");
    
    $PDF->setFont("Arial", 'BU', 11);//Define la fuente como Arial 18 en "negritas"
    $PDF->multicell(0, 10, "CLÁUSULAS",0,"C",false);//Añade texto centrado

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"PRIMERA.- “EL PRESTADOR”, se obliga a proporcionar a “EL CLIENTE” el servicio de mantenimiento preventivo y correctivo al equipo que se describe en el anexo 1, el cual firmado por las partes integrará a este documento.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"SEGUNDA.- El importe total de este contrato es de $$costo ($costoletras pesos 00/100 M.N) más IVA. Este monto será cubierto por “EL CLIENTE” en pagos de $$monto ($montoletras pesos 00/100 M.N) más IVA.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"La cantidad antes señalada, será pagadera en moneda nacional y compensará a “EL PRESTADOR” por materiales, insumos, sueldos, honorarios, organización, dirección técnica y administrativa, prestaciones sociales y laborales a su personal y todos los gastos que se originen como consecuencia de este contrato, por lo que éste no podrá exigir mayor retribución por ningún otro concepto.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"TERCERA.- Ambas partes aceptan que la vigencia del presente contrato comprenderá desde el día $fechaini y hasta el día $fechafin .");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"CUARTA.- Para el debido cumplimiento del objeto materia de este contrato, “EL PRESTADOR”  se obliga a:");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"a) Proporcionar los servicios objeto de este contrato, de acuerdo a lo estipulado en el anexo I, el cual firmado por las partes se integrará a este documento.");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"b) Prestar el servicio de mantenimiento preventivo y correctivo, de conformidad con las especificaciones técnicas y manuales de operación del equipo a que se refiere este contrato.");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"c) Dar el servicio, a través del personal especializado que se requiera para ello, y");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"d) Acudir a prestar el servicio, de conformidad con los calendarios, programas y horarios previamente aprobados.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"QUINTA.- El servicio de mantenimiento preventivo consistirá en $visita visitas durante la vigencia del presente contrato, una cada $visitam meses.");
    
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"“EL PRESTADOR”, trimestralmente enviará a las instalaciones de “EL CLIENTE” personal especializado para efecto del mantenimiento preventivo el cual consistirá en:");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"1. Corregir cualquier desperfecto que se encuentre en el equipo materia de este contrato,");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"2. Registrar las condiciones de funcionamiento encontradas y las correcciones efectuadas, entregando para ello a “EL CLIENTE” el reporte correspondiente,");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"3. Realizar los cambios de ingeniería, que dicten los manuales y especificaciones técnicas, para mantener siempre actualizado el equipo materia del mantenimiento, y");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"4. Sustituir las partes o refacciones que no estén funcionando correctamente, salvo aquellas que no estén amparadas en este contrato, en cuyo caso se requerirá la autorización previa y por escrito de “EL CLIENTE”, para que en su momento, puedan ser facturadas.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"a) El mantenimiento correctivo se proporcionará cuantas veces lo solicite “EL CLIENTE”, y además de comprender las características señaladas en el inciso anterior deberá contemplar lo siguiente:");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"1. “EL PRESTADOR”, dentro de un plazo de 48 horas contadas a partir de que reciba el reporte “EL CLIENTE”, dará respuesta a la solicitud de mantenimiento correspondiente. En aquellos casos en que la llamada sea dentro del Área de Aguascalientes.");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"2. Para los casos de requerimiento de servicio de equipo que se encuentre fuera del área señalada anteriormente, “EL PRESTADOR” contará con un término de 24 horas para dar respuesta al servicio de mantenimiento, y");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"3. “EL PRESTADOR”, contará con un plazo máximo de 6 horas, a partir del momento en que llegue a las instalaciones donde se encuentre instalado el equipo, a efecto de corregir las fallas que se encuentren en el mismo.");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Para el cumplimiento del mantenimiento preventivo o correctivo, “EL PRESTADOR” señala como horas y días hábiles los siguientes 15 días.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"SEXTA.- “EL CLIENTE” a través de la persona o personas que designe al efecto, tendrá la facultad de supervisar en todo tiempo los servicios materia de este contrato y dará a “EL PRESTADOR” por escrito las recomendaciones que sobre el particular estime pertinentes, mismas que “EL PRESTADOR” queda obligado a atender a la brevedad.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"SÉPTIMA.- “EL PRESTADOR”,  es el único responsable del personal que emplee con motivo de los trabajos a que se refiere este contrato, respecto de las obligaciones laborales, fiscales, de seguridad social y civiles que resulten, por lo tanto, responderá de todas las reclamaciones que sus trabajadores presenten en contra de él o de “EL CLIENTE”, sea cual fuere la naturaleza del conflicto.");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"“EL PRESTADOR”, se obliga a sacar en paz y a salvo a “EL CLIENTE” de cualquier reclamación que con motivo del presente contrato pretendiese su personal, pagando en todo caso los gastos y prestaciones necesarios.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"OCTAVA.- “EL PRESTADOR”, vigilará que todos sus trabajadores respeten las disposiciones internas de “EL CLIENTE”, cuando con motivo del servicio, tengan acceso a sus instalaciones y bienes.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"NOVENA.- El equipo y materiales requeridos para la prestación del servicio objeto del contrato, serán de la mejor calidad, provistos con toda oportunidad y en cantidad suficiente para garantizar la más eficiente, efectiva y eficaz prestación del servicio.");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"“EL PRESTADOR” se compromete a reemplazar sin costo alguno, las  partes y/o componentes dañados, defectuosos o en mal estado, tales como los componentes y/o refacciones diferentes a los mencionados en el párrafo anterior, que requieran ser reemplazados por encontrarse defectuosos, dañados o en mal estado, serán facturados por separado a “EL CLIENTE” con previa autorización.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DÉCIMA.- “EL CLIENTE”, no deberá trasladar o hacer alguna modificación a los ajustes del equipo sin consultar previamente a “EL PRESTADOR”, en cuyo caso las reparaciones que pudieran resultar de ello serán facturadas por separado a “EL CLIENTE”.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DÉCIMA PRIMERA.- Las partes acuerdan, que antes de que se inicie la prestación del servicio de mantenimiento preventivo o correctivo materia de este contrato, “EL PRESTADOR” realizará una inspección de los equipos a los cuales se les va a dar el mantenimiento, para verificar el estado y funcionamiento de los mismos.");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Lo anterior, con la finalidad de que si “EL PRESTADOR” detecta desperfectos o piezas faltantes en los equipos, presente a “EL CLIENTE” el presupuesto correspondiente de la reparación  para que los mismos queden en condiciones óptimas de operación.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DÉCIMA SEGUNDA.- En el caso de que los equipos, a los cuales se les va a dar mantenimiento sean instalados fuera del área metropolitana de la Ciudad de Aguascalientes, y “EL PRESTADOR” no cuente con sucursales en ese lugar, los gastos de transportación y viáticos del técnico de servicio, serán cubiertos por “EL CLIENTE”, tanto para las visitas de mantenimiento preventivo como correctivo, previa comprobación de los mismos.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DÉCIMA TERCERA.- Las partes acuerdan que “EL PRESTADOR” no podrá ceder, traspasar o enajenar total o parcialmente los derechos y obligaciones derivados de este contrato, sin la previa autorización por escrito de “EL CLIENTE”.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DÉCIMA CUARTA.- Para garantizar el debido cumplimiento de las obligaciones del presente contrato “EL PRESTADOR” deberá presentar en un plazo de 10 días naturales, contados a partir de la fecha de firma de este documento, las siguientes fianzas:");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"a) Una fianza por el valor total del anticipo que se le otorgue.");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"b) Una fianza por el 70% del valor total del contrato, para garantizar el debido cumplimiento de las obligaciones contenidas en el mismo.");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Las fianzas deberán contener las declaraciones que a continuación de señalan:");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"1. Que las fianzas se otorgan en los términos de este contrato,");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"2. Que no podrán ser canceladas sin la conformidad por escrito de “EL CLIENTE”, y");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"3. Que la institución afianzadora acepta lo preceptuado en el artículo 118 de la Ley Federal de Instituciones de Fianzas.");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"3. La fianza solamente se cancelará cuando “EL PRESTADOR” haya cumplido con las obligaciones que se deriven de este contrato.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DÉCIMA QUINTA.- “EL PRESTADOR” será responsable de los daños y perjuicios que se causen a “EL CLIENTE” o a terceros, con motivo de la ejecución de los trabajos.");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El pago por los daños y perjuicios que resulten lo hará “EL PRESTADOR” dentro de los 10 días naturales siguientes a la notificación  que “EL CLIENTE” le haga.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DÉCIMA SEXTA.- Si “EL PRESTADOR” en la realización de los trabajos de mantenimiento de los bienes objeto de este contrato incurre en mora o no prestare los servicios conforme a lo pactado, “EL CLIENTE” podrá requerirle por escrito a “EL PRESTADOR” que subsane las deficiencias en un plazo de dos días hábiles máximo, a partir de la fecha que reciba la notificación para su cumplimiento.  De no hacerlo “EL CLIENTE” podrá dar por rescindido el presente contrato y hacerle efectivas las fianzas que se mencionan en la cláusula DÉCIMA CUARTA, además de requerirle el pago de daños y perjuicios previsto en la cláusula DÉCIMA QUINTA del presente instrumento.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DÉCIMA SÉPTIMA.- Las partes convienen en que “EL CLIENTE” podrá rescindir administrativamente el presente contrato, con el sólo requisito de comunicar su decisión por escrito a “EL PRESTADOR” en los siguientes casos:");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"a) Por incumplimiento a cualquiera de las obligaciones contenidas en el presente contrato,");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"b) Si “EL PRESTADOR” es declarado en estado de quiebra o suspensión de pagos, por autoridad competente, y");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"c) Por cualquier otra causa imputable a “EL PRESTADOR” o su personal que impida parcial o totalmente el cumplimiento de este.");
    
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DÉCIMA OCTAVA.- “EL CLIENTE” podrá dar por terminado el presente contrato cuando concurran razones de interés general.  Si este fuere el caso, “EL CLIENTE” comunicará a “EL PRESTADOR” las razones que dieron origen a dicha terminación.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DÉCIMA NOVENA.- Este contrato podrá ser modificado en cualquier de sus condiciones por mutuo acuerdo, con 15 días de anticipación a la fecha en que la modificación deba surtir sus efectos.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"VIGÉSIMA.- Para la interpretación y cumplimiento del presente contrato, así como para todo lo no previsto en el mismo, las partes se someten a la jurisdicción y competencia de los tribunales federales, de la Ciudad de Aguascalientes, por lo que renuncia al fuero que por razón de su domicilio presente o futuro pudiera corresponderles.");

 $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Leído que fue el presente contrato y enteradas las partes de su contenido y alcances, lo firman en la Ciudad de  Aguascalientes, a los _ _ días del mes de _ _ _ __ _ _ _ _ de _ _ _ _.");
    
    $PDF->setFont("Arial", 'B', 11);
    $PDF->multicell(0, 10, "El Cliente",0,"C",false);
    $PDF->multicell(0, 10, "__________________________________________",0,"C",false);
    $PDF->multicell(0, 10, "_____________________________",0,"C",false);
    $PDF->multicell(0, 10, "El Prestador",0,"C",false);
    $PDF->multicell(0, 10, "__________________________________________",0,"C",false);
    $PDF->multicell(0, 10, "_____________________________",0,"C",false);
    $PDF->output();
?>