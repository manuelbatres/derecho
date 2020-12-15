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
    $PDF->multicell(0, 10, "Contrato de Alquiler",0,"C",false);//Añade texto centrado
    $PDF->setFont("Arial", '', 11);//Fuente Arial 11, tipo de texto normal, sin formato adicional
    $txt="Siendo ".$fecha.", se celebra el presente Contrato de Alquiler entre ".$nombre.", como Arrendador, y ".$nombre2.", como Arrendatario, respecto del inmueble que se describe a continuación, de conformidad con lo siguiente:";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable
    $PDF->setFont("Arial", 'BU', 11);//Fuente Arial 11 negritas y subrayado
    $PDF->multicell(0, 10, "DECLARACIONES",0,"C",false);
    $PDF->multicell(180,4,"I.DECLARA EL ARRENDADOR: ");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"a) Que tiene las facultades suficientes y bastantes para obligarse en términos del presenteinstrumento.");//Opción 2 para escribir, concatenar todo en la misma función de escritura. La opción 3 se ve en la línea 76.
    $PDF->multicell(180,6,"");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"b) Que es el único legítimo propietario del inmueble ".$propiedad." (el “Inmueble”) según consta en la escritura que se adjunta a este Contrato como Anexonúmero 1, y que es su deseo darlo en arrendamiento en favor del Arrendatario.");//Opción 2 para escribir, concatenar todo en la misma función de escritura. La opción 3 se ve en la línea 76.
    $PDF->multicell(180,6,"");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"c) Qué está legalmente facultado para dar en arrendamiento el Inmueble en los términos ycondiciones establecidos en este Contrato.");
    $PDF->multicell(180,6,"");
    $PDF->setFont("Arial", 'BU', 11);//Fuente Arial 11 negritas y subrayado
    $PDF->multicell(180,4,"II.DECLARA EL ARRENDATARIO: ");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"a) Que tiene las facultades suficientes y bastantes para obligarse en términos del presenteContrato, así como los recursos suficientes para cumplir con las obligaciones derivadas delmismo, los cuales obtiene de actividades licitas.");//Opción 2 para escribir, concatenar todo en la misma función de escritura. La opción 3 se ve en la línea 76.
    $PDF->multicell(180,6,"");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"b) Que es su deseo tomar en arrendamiento el Inmueble, el cual conoce y reconoce que seencuentra en las condiciones necesarias de seguridad, higiene y salubridad para ser habitadoy que cuenta con todo lo que se señala en el inventario que se adjunta al presente comoAnexo número 2 y que todos sus servicios se encuentran funcionando, por lo que nocondicionará el pago de rentas a ningún tipo de mejora.");//Opción 2 para escribir, concatenar todo en la misma función de escritura. La opción 3 se ve en la línea 76.
    $PDF->multicell(180,6,"");
    $PDF->setFont("Arial", 'BU', 11);//Fuente Arial 11 negritas y subrayado
    $PDF->multicell(180,4,"III.DECLARAN LAS PARTES: ");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"a) Que en el presente Contrato no existe dolo, error, mala fe o cualquier otro vicio de lavoluntad, por lo que expresamente renuncian a invocarlos en cualquier tiempo.");//Opción 2 para escribir, concatenar todo en la misma función de escritura. La opción 3 se ve en la línea 76.
    $PDF->multicell(180,6,"");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"b) Que se reconocen la personalidad con la que comparecen a la celebración de este contrato yexpresamente convienen en someterse a las obligaciones contenidas en las siguientes:");//Opción 2 para escribir, concatenar todo en la misma función de escritura. La opción 3 se ve en la línea 76.
    $PDF->multicell(180,6,"");
    
    $PDF->addPage();
    $PDF->multicell(0, 6, "Expuesto lo anterior los comparecientes estipulan las siguientes:",0,"C",false);
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(0, 10, "Cláusulas",0,"C",false);
    $PDF->multicell(180,4,"PRIMERA Objeto");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Sujeto a los plazos, términos y condiciones aquí acordadas, el Arrendador otorga en arrendamiento al Arrendatario, y éste toma en dicha calidad, el Inmueble.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"SEGUNDA Renta");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El Arrendatario pagará mensualmente al Arrendador o a quién sus derechos represente, por concepto de renta, la cantidad de $$costo ($costoletras Pesos, Moneda Nacional) (el “Precio de Compraventa”), sujeto a los siguientes términos y plazos:");//Colocar directamente la variable en la cadena de texto.
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"a) El pago de la renta será por meses adelantados, debiendo cubrirse íntegra la renta mensual,aun cuando no se usare el Inmueble el mes completo.");
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"b) El pago de la renta se cubrirá en su totalidad dentro de los primeros diez días naturales decada mes, en el domicilio del Arrendador");
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"c) Será causa de rescisión de este Contrato, sin necesidad de intervención judicial alguna, elhecho de que se pague extemporáneamente la renta, o de que ésta no sea cubiertas.");
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"d) El Arrendatario no podrá en ningún caso retener las rentas, bajo ningún título judicial, niextrajudicial, debiendo hacer el pago íntegro, a más tardar en el plazo que se describe en elinciso b) de esta Cláusula, por lo que de no hacerlo en el tiempo, modo y lugar convenidos,pagará una pena convencional del 5% (cinco por ciento) sobre el importe de la renta.");
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"e) Si el Arrendador recibe la renta en fecha y forma distinta de la estipulada, o recibe abonos acuenta de las mismas, no se entenderá novado el Contrato, ni sus términos, plazos o formasde pago.");
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"f) En caso que el Arrendatario pague la renta con cheque, y éste no fuere cubierto por el bancoemisor, por cualquier causa, se considerará que el pago de la renta de que se trate no fuerecibido por el arrendador en tiempo y forma, quedando obligado el Arrendatario a cubrir los gastos que dicho hecho genere, incluyendo el 20% del valor del cheque conforme a lo estipulado en el artículo 193 de la Ley General de Títulos y Operaciones de Crédito.");
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"g) En caso de prórroga del presente Contrato, en cada aniversario del mismo el monto de larenta mensual será incrementada en el mismo porcentaje que el Índice Nacional de Precios alConsumidor.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"TERCERA Deposito en garantia");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"A la fecha de firma del presente Contrato, el Arrendatario entrega al Arrendador por concepto de depósito en garantía la cantidad de $$costo ($costoletras Pesos, Moneda Nacional), equivalente a 1 mes(es) de renta. En caso de variación en el monto de la renta, este depósito se ajustará dentro de los cinco días siguientes, para que siempre corresponda a 1 mes(es) de la renta en vigor.");
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"Las partes acuerdan que el Arrendador no aplicará el depósito al pago de cualquier mensualidad vencida, o al pago de cualquier otra obligación incumplida por el Arrendatario ya que dicho depósito no podrá utilizarse para compensar la falta de pago de los anteriores conceptos. Tampoco podrá el Arrendatario dejar de pagar rentas, basado en que las mismas quedarán cubiertas con el mencionado depósito.");
    //$PDF->multicell(180,4,"b. El pago se realizará a más tardar el día $fentrega, día en que el vendedor entregue la posesión física del bien");
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"El Arrendatario autoriza expresamente al Arrendador a conservar dicho depósito (liberándolo de la obligación de depositarlo judicialmente) durante un plazo de sesenta días posteriores a que haya desocupado y entregado el Inmueble, autorizando en este acto el Arrendatario al Arrendador a que éste haga uso del monto del depósito para aquellos arreglos por deterioros en el Inmueble no derivados de su uso normal por parte del Arrendatario. Transcurrido este plazo, el Arrendador devolverá al Arrendatario el mencionado depósito sin interés ni rendimiento financiero alguno, siempre y cuando éste no se hubiere ocupado en arreglar deterioros en el Inmueble no causados por su uso normal o no existiere ningún saldo pendiente por servicios a cargo del Arrendatario o por cualquier otro concepto.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"CUARTA Vigencia");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"La vigencia del presente Contrato es de ".$fpago." al ".$fentrega." para ambas partes, iniciando su vigencia en la fecha de firma del presente Contrato y terminando en su primer aniversario, debiendo avisar el Arrendatario al Arrendador por escrito con por lo menos treinta días hábiles de anticipación a su vencimiento, su deseo prorrogar o no el arrendamiento, reservándose el Arrendador el derecho de aceptar dicha prórroga, lo cual en todo caso se hará mediante la celebración de un nuevo contrato y siempre y cuando el Arrendatario se encuentre al corriente en el pago de las rentas y sean renovadas y actualizadas las garantías señaladas en dicho contrato.");
    $PDF->multicell(180,6,"");
    $PDF->multicell(180,4,"Las partes acuerdan que a la terminación del presente Contrato, el Arrendatario estará obligado a desocupar inmediatamente el Inmueble.");
    //$PDF->multicell(180,4,"b. El pago se realizará a más tardar el día $fentrega, día en que el vendedor entregue la posesión física del bien");
    //$PDF->multicell(180,4," El Vendedor entregrá al notario público designado por el Comprador todos y cada uno de los documentos que éste requiera para tirar la correspondiente documentación que avale la propiedad del bien, a efecto de que el notario en cuestión confirme que no existe limitación o restricción alguna para la entrega de posesión del bien. Una vez ocurrido lo anterior y en cualquier caso, la formalización de este Contrato se llevará a cabo a más tardar con fecha $fentrega y se hará a favor del Comprador o de quien éste designe. Fecha misma en que el Vendedor se obliga a entregar al Comprador posesión del bien sin limitación alguna.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"QUINTA Uso de suelo");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El inmueble será destinado únicamente para [casa habitación], quedándole prohibido al Arrendatario cambiar el uso referido, siendo causa de rescisión el incumplimiento a esta disposición, deslindando al Arrendador desde este momento de cualquier responsabilidad si se le diera algún uso distinto al Inmueble, y obligándose a sacar al Arrendador en paz y a salvo de cualquier daño y/o perjuicio que le sea causado por este hecho.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"SEXTA Servicios");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El Arrendatario se obliga a cubrir oportunamente el importe de todos los servicios utilizados en el Inmueble, incluyendo energía eléctrica, servicio de agua potable, teléfono, gas y cuota de mantenimiento (en su caso).");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"SEPTIMA Inmueble");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," El Arrendatario reconoce que recibe el Inmueble en buen estado, en condiciones de higiene, seguridad y salubridad, con todo señalado en el inventario correspondiente, todo lo cual devolverá al terminarse el Arrendamiento con el deterioro natural de su uso, siendo por cuenta suya los gastos de reparación y obligándose a indemnizar al Arrendador por cualquier daño y perjuicios causados por variaciones en el Inmueble.");
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4," El Arrendatario está de acuerdo en que no podrá, sin el consentimiento previo y por escrito del Arrendador, variar la forma del Inmueble, comprometiéndose a devolverlo en el estado en que lo recibió. Para efectuar cualquier mejora o instalación en el Inmueble, deberá obtener autorización previa y por escrito del Arrendador, ya que en caso contrario, todas aquellas que puedan ser aprovechables, quedarán a beneficio del Inmueble, sin que exista obligación del Arrendador de cubrir el importe pagado por las mismas, o a su elección de restablecer el Inmueble a su estado normal, por lo que el Arrendatario se obliga a pagar los gastos que se originen por lo anterior.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"OCTAVA Cesión de derechos");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El Arrendatario no podrá subarrendar, traspasar o ceder, en todo o en parte, sus derechos derivados de este Contrato. El Arrendador podrá ceder, todo oparte, de sus derechos derivados de este Contrato mediante simple notificación por escrito dada alArrendatario.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"NOVENA Sustancias peligrosas");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El Arrendatario está de acuerdo en no almacenar sustancias peligrosas, inflamables, corrosivas, deletéreas o ilegales dentro del Inmueble. En caso de siniestro, el Arrendatario deberá cubrir al Arrendador y a los terceros que resulten afectados los daños y perjuicios que les ocasione.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"DECIMA Terminacion anticipada");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"En caso de que el Arrendador pretenda dar por concluido el presente Contrato antes del vencimiento de su plazo forzoso, cualquiera que sea la causa, pagarán como pena convencional el importe de 1 mes de renta, debiendo desocupar el Inmueble en un plazo no mayor a diez días posteriores a dicho pago.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"DECIMA PRIMERA Rescisión");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"La falsedad en las declaraciones vertidas en este contrato y/o el incumplimiento de las partes a cualquiera de sus obligaciones será motivo de su rescisión, sin necesidad de intervención judicial alguna, quedando la parte que incumplió obligada a pagar los daños y perjuicios causados a la otra parte.");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"DECIMA SEGUNDA Domicilios");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Para los efectos del presente Contrato las partes señalan como sus domicilios los siguientes:");
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"a) Arrendador con domicilio en $calle #$num $frac");
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"b) Arrendatario con domicilio donde se localiza el Inmueble");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"DECIMA TERCERA Acuerdo total");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Este Contrato y todos sus Anexos constituyen la totalidad de los acuerdos celebrados entre las partes respecto al objeto del mismo, y substituye y deja sin efectos cualquier acuerdo previo entre las partes en relación con el mismo.");
    $PDF->multicell(180,4,"");
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"DECIMA CUARTA Leyes aplicables y tribunales competentes");
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Para todo lo relacionado con la interpretación y ejecución con este instrumento son aplicables las Leyes correspondientes a su objeto y, en caso de controversia, serán competentes los tribunales de [la Ciudad de México, Distrito Federal], renunciando las partes expresamente a cualquier otra jurisdicción que pudiera corresponderles por virtud de sus domicilios presentes o futuros o por cualquier otro motivo.");
    $PDF->multicell(180,4,"");
    $PDF->multicell(180,4,"En virtud de lo cual, las partes han celebrado el presente Contrato en la fecha mencionada en el preámbulo del mismo.");
    $PDF->multicell(180,4,"");
    $PDF->setFont("Arial", 'B', 11);
    $PDF->multicell(0, 10, "El Arrendador",0,"C",false);
    $PDF->multicell(0, 10, "__________________________________________",0,"C",false);
    $PDF->multicell(0, 10, "_____________________________",0,"C",false);
    $PDF->multicell(0, 10, "El Arrendatario",0,"C",false);
    $PDF->multicell(0, 10, "__________________________________________",0,"C",false);
    $PDF->multicell(0, 10, "_____________________________",0,"C",false);
    $PDF->output();
?>