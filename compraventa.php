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
    $propiedad=$_POST['propiedad'];
    $fecha=$_POST['fecha'];
    $costo=$_POST['costo'];
    $costoletras=$_POST['costoletras'];
    $fpago=$_POST['fpago'];
    $fentrega=$_POST['fentrega'];
    $intereses=$_POST['intereses'];
    $PDF = new FPDF();//Crea el objeto de tipo FPDF
    $PDF->addPage();//Añade una página al documento
    $PDF->setFont("Arial", 'B', 18);//Define la fuente como Arial 18 en "negritas"
    $PDF->multicell(0, 10, "Contrato de Compraventa",0,"C",false);//Añade texto centrado
    $PDF->setFont("Arial", '', 11);//Fuente Arial 11, tipo de texto normal, sin formato adicional
    $txt="Siendo ".$fecha.", se celebra el presente Contrato de Compraventa entre ".$nombre.", como Vendedor, y ".$nombre2.", como Comprador, respecto del inmueble que se describe a continuación, de conformidad con lo siguiente:";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", 'BU', 11);//Fuente Arial 11 negritas y subrayado
    $PDF->multicell(0, 10, "Antecedentes y Declaraciones",0,"C",false);
    $PDF->multicell(180,4,"1.- Descripción del bien: ");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,$propiedad." de la cual el vendedor declara ser el único y legítimo propietario.");//Opción 2 para escribir, concatenar todo en la misma función de escritura. La opción 3 se ve en la línea 76.
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"2.- Propiedad: ");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," El Vendedor declara que el bien fue adquirido legalmente mediante los actos jurídicos adecuados, adquisición que se realizó de manera perfecta y libre de cualquier gravamen, limitación, afectación u ocupaciones, y de restricciones de dominio de cualquier tipo.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"3.- Servicios: ");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El vendedor declara estar al corriente en pagos de servicios, pagos adicionales, pagos mensuales o impuestos (en caso de aplicar)");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"4.- Libre de gravámenes: ");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El vendedor declara que no hay hipotecas por pagar, ejecuciones o acciones legales que pongan en duda o limiten de cualquier forma la propiedad y/o posesión del poseción del Vendedor sobre el bien, ni juicios, procedimientos de concurso, demandas, procedimientos sucesorios, o gravámenes de cualquier tipo en contra del Vendedor, ni procedimientos judiciales o administrativos en contra de éstos que pudiera afectar el bien o su uso.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"5.- Libre de comodatos: ");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," El Vendedor declara que no ha celebrado servidumbres y/o comodato y/o cualesquiera derechos de paso sobre el bien y, por lo tanto, no existen terceros que puedan ostentar o reclamar la posesión del mismo. Además, el Vendedor declara que no ha celebrado convenio de ningún tipo, oral o escrito, ni otorgado opciones de compra o derechos preferenciales de transmisión, cesión o venta referentes al bien que de alguna forma pudieran limitar su derecho a disponer libremente de él, ni celebrará alguno a partir de esta fecha.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"6.- El comprador: ");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El Comprador declara que conoce y está interesado en adquirir el bien en el estado físico que se encuentra y en consideración de las declaraciones y antecedentes contenidas en este Contrato y que tiene la capacidad legal y económica para hacer frente a sus obligaciones establecidas en el presente Contrato, incluyendo el pago del Precio de Compraventa (según se define más adelante).");
    
    $PDF->addPage();
    $PDF->multicell(0, 6, "Expuesto lo anterior los comparecientes estipulan las siguientes:",0,"C",false);
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(0, 10, "Cláusulas",0,"C",false);
    $PDF->multicell(180,4,"PRIMERA Objeto");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El vendedor vende y entrega en este acto, sin reserva alguna, libre de todo gravamen, afectación y/o limitación de dominio, la propiedad, uso y disfrute, al corriente en el pago de todas sus obligaciones fiscales, el bien en favor del Comprador, comprendiendo la presente enajenación todos los usos, servidumbres, accesiones, permisos, construcciones, y todo lo demás que de hecho y por derecho le corresponda al bien. Las Partes están de acuerdo en que la compraventa se realiza bajo la modalidad denominada “ad corpus”, por lo que ninguna variación en las medidas dará pie a cambios en el Precio de Compraventa.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"SEGUNDA Precio");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El precio que de común acuerdo convienen el Comprador y el Vendedor por la transmisión de la propiedad del bien y demás derechos consignados en este Contrato en favor del Comprador, es la cantidad de $costo$ ($costoletras Pesos, Moneda Nacional) (el “Precio de Compraventa”).");//Colocar directamente la variable en la cadena de texto.
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"TERCERA Forma de pago");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,6," El Comprador pagará al Vendedor el Precio de Compraventa de la siguiente forma:");
    $PDF->multicell(180,4,"a. En la fecha $fpago, pagará la cantidad de $costo    ($costoletras Pesos, Moneda Nacional). Este pago generará un recibo de pago por dicha cantidad que será anexado al contrato y constituirá el finiquito más amplio que en derecho proceda por ese monto, dándose el Vendedor por pagado total y completamente por esa cantidad, y");
    $PDF->multicell(180,4,"b. El pago se realizará a más tardar el día $fentrega, día en que el vendedor entregue la posesión física del bien");
    $PDF->multicell(180,4,"$intereses");
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"Las partes manifiestan que el precio anterior es justo y legítimo, no existiendo al respecto, error, dolo, mala fe, vicio, lesión o enriquecimiento ilegítimo por ninguna de las partes.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"CUARTA Entrega de la posesión");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," El Vendedor entregrá al notario público designado por el Comprador todos y cada uno de los documentos que éste requiera para tirar la correspondiente documentación que avale la propiedad del bien, a efecto de que el notario en cuestión confirme que no existe limitación o restricción alguna para la entrega de posesión del bien. Una vez ocurrido lo anterior y en cualquier caso, la formalización de este Contrato se llevará a cabo a más tardar con fecha $fentrega y se hará a favor del Comprador o de quien éste designe. Fecha misma en que el Vendedor se obliga a entregar al Comprador posesión del bien sin limitación alguna.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"QUINTA Pena convencional");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," Las Partes están de acuerdo que en caso de incumplimiento a sus obligaciones aquí asumidas, el responsable cubrirá como pena convencional a la otra la cantidad equivalente al 1% del valor del bien  y quedarán como consecuencia del incumplimiento automáticamente liberadas ambas partes de su obligación de compra y venta, respectivamente, dándose por rescindido este Contrato sin necesidad de intervención judicial alguna. 
    Si el incumplimiento fuera imputable al Vendedor, además de pagar la pena convencional, devolverá cualquier parte del Precio de Compraventa que le haya sido entregada.
    Si el incumplimiento fuera imputable al Comprador, éste autoriza desde este momento y sin necesidad de juicio previo a que el Vendedor retenga la parte del Precio de Compraventa que ya le haya sido entregada que sea necesaria para cubrir la pena convencional acordada. Cualquier saldo, a favor o en contra, deberá ser entregado a la parte que le corresponda. 
    Si alguna de las partes incumple, ésta deberá pagar a la otra, la cantidad que como pena convencional se ha establecido dentro de los 3 (tres) días hábiles siguientes a que la otra parte le notifique por escrito el incumplimiento y en caso de no haber subsanado el mismo en el mencionado plazo de 3 (tres) días hábiles. Cada día de retraso causará intereses moratorios equivalentes al 10 % mensual.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"SEXTA Saneamiento para el caso de evicción y vicios ocultos");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El Vendedor se obliga al saneamiento para el caso de evicción y al pago de compensaciones por vicios ocultos en términos de la legislación aplicable. ");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"SEPTIMA Gastos");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," Las Partes están de acuerdo que el Comprador pagará todos aquellos gastos, honorarios e impuestos que se le generen derivados de la formalización en escritura de esta compraventa, y el Vendedor cualquier honorario que se genere a favor de corredores inmobiliarios o comisiones a terceros (en caso de que aplique), por la venta del Inmueble y los impuestos que se le causen, incluyendo, en su caso, impuesto sobre la renta.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"OCTAVA Datos de las partes");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"a.  Vendedor");
    $PDF->multicell(180,4,"   El o la C. $nacionalidad $nombre nacido(a) el $fnac, $lnac. Con domicilio $calle $num fracc. $frac cp $cp");
    $PDF->multicell(180,4,"   Declara ser $estado, mayor de edad, con ocupación $ocupacion y grado escolar $esc.");
    $PDF->multicell(180,4,"b.  Comprador");
    $PDF->multicell(180,4,"   El o la C. $nacionalidad2 $nombre2 nacido(a) el $fnac2, $lnac2. Con domicilio $calle2 $num2 fracc. $frac2 cp $cp2");
    $PDF->multicell(180,4,"   Declara ser $estado2, mayor de edad, con ocupación $ocupacion2 y grado escolar $esc2.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"NOVENA Acuerdo total");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Este Contrato y todos sus Anexos constituyen la totalidad de los acuerdos celebrados entre las partes respecto a la transmisión de propiedad objeto de este Contrato, y substituye y deja sin efectos cualquier acuerdo previo entre las partes en relación con la misma.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"DECIMA Leyes aplicables y tribunales competentes");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Para todo lo relacionado con la interpretación y ejecución con este instrumento son aplicables las Leyes correspondientes a su objeto y, en caso de controversia, serán competentes los tribunales de la Ciudad, renunciando las partes expresamente a cualquier otra jurisdicción que pudiera corresponderles por virtud de sus domicilios presentes o futuros o por cualquier otro motivo");
    $PDF->multicell(180,4,"En virtud de lo cual, las partes han celebrado el presente Contrato en la fecha mencionada en el preámbulo del mismo.");
    $PDF->setFont("Arial", 'B', 11);
    $PDF->multicell(0, 10, "El Vendedor",0,"C",false);
    $PDF->multicell(0, 10, "__________________________________________",0,"C",false);
    $PDF->multicell(0, 10, "_____________________________",0,"C",false);
    $PDF->multicell(0, 10, "El Comprador",0,"C",false);
    $PDF->multicell(0, 10, "__________________________________________",0,"C",false);
    $PDF->multicell(0, 10, "_____________________________",0,"C",false);
    $PDF->output();
?>