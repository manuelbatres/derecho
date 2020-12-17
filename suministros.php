<?php
    require("fpdf/fpdf.php");//librería para generar documento PDF (info fpdf.org)
    $nombre=htmlspecialchars($_POST['nombre']);
    $nacionalidad=$_POST['nacionalidad'];
    $fnac=$_POST['fnac'];
    $direccion=$_POST['direccion'];
    $nombre2=$_POST['nombre2'];
    $nacionalidad2=$_POST['nacionalidad2'];
    $fnac2=$_POST['fnac2'];
    $direccion2=$_POST['direccion2'];
    $fecha=$_POST['fecha'];
    $suministro=$_POST['suministro'];
    $descripcion=$_POST['descripcion'];
    $costo=$_POST['costo'];
    $costoletras=$_POST['costoletras'];
    $fpago=$_POST['fpago'];
    $fentrega=$_POST['fentrega'];
    $PDF = new FPDF();
    $PDF->addPage();
    $PDF->setFont("Arial", 'B', 18);
    $PDF->multicell(0, 10,"CONTRATO DE SUMINISTROS",0,"C",false);
    $PDF->Ln();
    $PDF->setFont("Arial", '', 11);
    $txt="Siendo ".$fecha.", se celebra el presente contrato de suministro. Por una parte, el C. ".$nombre.", persona mayor de edad, con nacionalidad ".$nacionalidad." y domicilio en ".$direccion." a quien en adelante llamaremos suministrante y por otra parte el C. ".$nombre2.", persona mayor de edad, con nacionalidad ".$nacionalidad2." y domicilio en ".$direccion2." a quien en adelante llamaremos suministrado celebran el presente contrato de suministro.";
    $PDF->multicell(180,4,$txt,0,"J",false);
    $PDF->Ln();
    $PDF->Ln();
    $PDF->setFont("Arial", 'B', 13);
    $PDF->multicell(0, 15, "DECLARACIONES",0,"C",false);
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"- Ambas partes reconocen capacidad legal suficiente para celebrar el presente contrato.");
    $PDF->Ln();
    $PDF->multicell(180,4,"- Se declara que ".$nombre." se dedica a la fabricación de ".$suministro.".");
    $PDF->Ln();
    $PDF->multicell(180,4,"- Se declara que ".$nombre2." desea recibir entregas periódicas de ".$suministro.".");
    $PDF->Ln();
    $PDF->Ln();
    $PDF->setFont("Arial", 'B', 13);
    $PDF->multicell(0, 15, "CLÁUSULAS",0,"C",false);
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"PRIMERA. - SUMINISTRO");
    $PDF->Ln();
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El suministrador se obliga a entregar ".$suministro." en tiempo y forma según lo establezca el presente contrato. Es decir, el suministrante entregará al suministrado el número de piezas que este le solicite en las condiciones que a continuación se detallan: ".$descripcion.".",0,"J",false);
    $PDF->Ln();
    $PDF->Ln();
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"SEGUNDA. - OBJETO");
    $PDF->Ln();
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El objeto del presente contrato, y del suministro será los productos y mercancías detalladas en la primer clausula.",0,"J",false);
    $PDF->Ln();
    $PDF->Ln();
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"TERCERA. - PRECIO");
    $PDF->Ln();
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El precio del suministro será de $".$costo." (".$costoletras."). Este se hará en unidades del producto en moneda nacional. Sin embargo, el precio podrá variar en caso de alza de los costos u otro motivo externo, por lo cual se debe brindar aviso previo en un periodo máximo de 30 días naturales.",0,"J",false);
    $PDF->Ln();
    $PDF->multicell(180,4,"Además, a los precios arriba detallados, habrá que sumarles el importe correspondiente al IVA.");
    $PDF->Ln();
    $PDF->Ln();
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"CUARTA. - PAGO");
    $PDF->Ln();
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El suministrado, deberá satisfacer el pago al suministrante los días ".$fpago." de cada mes. En caso de incumplimiento el suministrante podrá interrumpir el envío de la mercancía sin previo aviso.",0,"J",false);
    $PDF->Ln();
    $PDF->Ln();
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"QUINTA. - FORMA DE ENTREGA");
    $PDF->Ln();
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"La entrega de los productos se hará los días ".$fentrega." de cada mes. La entrega se hará vía presencial en la dirección estipulada del suministrado.",0,"J",false);
    $PDF->addPage();
    $PDF->setFont("Arial", 'BU', 11);
    $PDF->multicell(180,4,"SEXTA. - GARANTÍAS");
    $PDF->Ln();
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"El suministrante devolverá al suministrado el dinero en caso de que el producto llegue dañado.",0,"J",false);
    $PDF->Ln();
    $PDF->multicell(180,4,"Así como también el suministrado podrá hacer valida la garantía en caso de pérdida durante el camino.",0,"J",false);
    $PDF->Ln();
    $PDF->Ln();
    $PDF->Ln();
    $PDF->multicell(180,4,"En virtud de lo cual, las partes han celebrado el presente Contrato en la fecha mencionada en el preámbulo del mismo.",0,"J",false);
    $PDF->Ln();
    $PDF->Ln();
    $PDF->Ln();
    $PDF->Ln();
    $PDF->Ln();
    $PDF->Ln();
    $PDF->multicell(0, 10, "_________________________________                _________________________________",0,"C",false);
    $PDF->multicell(0, 10, "                    Nombre y firma del suministrante                              Nombre y firma del suministrado",0,"J",false);
    $PDF->output();
?>