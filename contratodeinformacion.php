<?php
    require("fpdf/fpdf.php");//librería para generar documento PDF (info fpdf.org)
    $nombre_empresa=htmlspecialchars($_POST['nombre_empresa']);
    $nombre_emp_a=htmlspecialchars($_POST['nombre_empresa']);
    $nombre_empresa_b=htmlspecialchars($_POST['nombre_empresa_b']);
    $nombre_del_rep=$_POST['nombre_del_rep'];
    $nombre_del_rep_b=$_POST['nombre_del_rep_b'];
    
    $direccion_empresa_calle=$_POST['direccion_empresa_calle'];
    $direccion_empresa_num=$_POST['direccion_empresa_num'];
    $direccion_empresa_col=$_POST['direccion_empresa_col'];
    $direccion_empresa_ciud=$_POST['direccion_empresa_ciud'];
    $direccion_empresa_cp=$_POST['direccion_empresa_cp'];

    $direccion_empresa_calle_b=$_POST['direccion_empresa_calle_b'];
    $direccion_empresa_num_b=$_POST['direccion_empresa_num_b'];
    $direccion_empresa_col_b=$_POST['direccion_empresa_col_b'];
    $direccion_empresa_ciud_b=$_POST['direccion_empresa_ciud_b'];
    $direccion_empresa_cp_b=$_POST['direccion_empresa_cp_b'];



    $fecha_firm_cont=$_POST['fecha_firm_cont'];
    $fecha_ini_cont=$_POST['fecha_ini_cont'];
    $fecha_fin_cont=$_POST['fecha_fin_cont'];

    $fec_pago=$_POST['fec_pago'];
    $costo=$_POST['costo'];
   
    




    

    $PDF = new FPDF();//Crea el objeto de tipo FPDF
    $PDF->addPage();//Añade una página al documento

    $PDF->setFont("Arial", 'B', 18);//Define la fuente como Arial 18 en "negritas"
    $PDF->multicell(0, 10, "Contrato de Informacion",0,"C",false);//Añade texto centrado

    $PDF->setFont("Arial", '', 11);//Fuente Arial 11, tipo de texto normal, sin formato adicional
    $txt="CONTRATO DE CONFIDENCIALIDAD QUE CELEBRAN POR UNA PARTE" .$nombre_empresa. "REPRESENTADA POR" .$nombre_del_rep. " Y POR LA OTRA PARTE" .$nombre_del_rep_b. "AL TENOR DE LAS DECLARACIONES Y CLAUSULAS SIGUIENTES:";
    $PDF->multicell(180,4,$txt);//Opción 1 para escribir, concatenar todo en una variable y sólo mandar imprimir la variable



    $PDF->setFont("Arial", 'BU', 11);//Fuente Arial 11 negritas y subrayado
    $PDF->multicell(0, 10, "Declaraciones",0,"C",false);





    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Declara la empresa $nombre_del_rep por conducto de su representante");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Que es una sociedad mercantil debidamente constituida, otorgada ante $nombre_del_rep");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"$nombre_emp_a, vecino de $direccion_empresa_calle $direccion_empresa_num $direccion_empresa_col $direccion_empresa_ciud $direccion_empresa_cp  con el representante $nombre_del_rep en
    representación de la mencionada empresa.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Que es su voluntad obligarse en los términos de éste contrato.");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Declara el Comprador, por medio de: ");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"$nombre_empresa_b, vecino de $direccion_empresa_calle $direccion_empresa_num $direccion_empresa_col $direccion_empresa_ciud $direccion_empresa_cp con el representante $nombre_del_rep_b  en
    representación de la mencionada empresa.");


    $PDF->setFont("Arial", 'BU', 11);//Fuente Arial 11 negritas y subrayado
    $PDF->multicell(0, 10, "Clausulas",0,"C",false);



    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"PRIMERA");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," Las partes se obligan a no divulgar a terceras partes, la “Información Confidencial”, que
    reciban de la otra, y a darle a dicha información el mismo tratamiento que le darían a la información
    confidencial de su propiedad.
    
    Para efectos del presente convenio “Información Confidencial” comprende toda la información divulgada
    por cualesquiera de las partes ya sea en forma oral, visual, escrita, grabada en medios magnéticos o en
    cualquier otra forma tangible y que se encuentre claramente marcada como tal al ser entregada a la parte
    receptora. ");




    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"SEGUNDA");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," La parte receptora se obliga a mantener de manera confidencial la “Información
    Confidencial” que reciba de la parte divulgante y a no darla a una tercera parte diferente de sus abogados
    y asesores que tengan la necesidad de conocer dicha información para los propósitos autorizados en la
    Cláusula Sexta de éste convenio, y quienes deberán estar de acuerdo en mantener de manera confidencial
    dicha información. ");



    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"TERCERA");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"La parte receptora se obliga a no divulgar la “Información Confidencial” a terceros, sin el
    previo consentimiento por escrito de la parte divulgante. ");



    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"CUARTA");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," La parte receptora se obliga a tomar las precauciones necesarias y apropiadas para mantener
    como confidencial la “Información Confidencial” propiedad de la otra parte, incluyendo, mas no
    limitando, el informar a sus empleados que la manejen, que dicha información es confidencial y que no
    deberá ser divulgada a terceras partes.");


    
    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"QUINTA");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," La parte receptora esta de acuerdo en que la “Información Confidencial” que reciba de la otra
    parte es y seguirá siendo propiedad de ésta última, a usar dicha información únicamente de la manera y
    para los propósitos autorizados en la Cláusula Sexta de este contrato y que este instrumento no otorga, de
    manera expresa o implícita, derecho intelectual o de propiedad alguno, incluyendo, mas no limitando,
    Licencias de uso respecto de la “Información Confidencial");


    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"SEXTA");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," La parte receptora se obliga a utilizar la “Información Confidencial” de cualquiera de las otras
    partes, únicamente para la compra de una de ellas de la empresa y/o marcas relativas a servicios y
    productos objeto del contrato.");



    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"SEPTIMA");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," Las partes convienen que en caso que la parte receptora incumpla parcial o totalmente con
    las obligaciones a su cargo derivadas del presente contrato, la parte receptora será responsable de los
    daños y perjuicios que dicho incumplimiento llegase a ocasionar a la parte divulgante.");



    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"OCTAVA");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," La vigencia del presente convenio será indefinida y permanecerá vigente mientras exista
    relación comercial entre ambas partes.");


    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"NOVENA");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Dentro de los 7 días hábiles siguientes a la fecha de terminación del presente convenio o, en
    su caso, de su prórroga, toda la “Información Confidencial” transmitida de manera escrita, grabada en un
    medio magnético o de otra forma tangible, a la parte receptora por la divulgante, deberá ser devuelta a la
    parte divulgante o, en su caso, destruida en presencia de un representante autorizado de la parte
    divulgante, a elección de la parte divulgante.
    
    En caso de que la parte receptora no cumpla con la devolución o la destrucción en presencia de un
    representante autorizado de la parte divulgante dentro del plazo establecido en la presente Cláusula, la
    parte receptora, se hará acreedora a la Pena Convencional establecida en la Cláusula Séptima del presente
    Contrato. ");



    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DECIMA");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4," Las obligaciones establecidas en éste convenio para la parte receptora, respecto a
    la confidencialidad, de la “Información Confidencial” y al uso de la misma, prevalecerán a la
    terminación de este instrumento, por un periodo de por lo menos 2 (dos) años a partir de dicha
    terminación.  ");



    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DECIMO PRIMERA");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Este convenio constituye el acuerdo total entre las partes respecto a dicha
    información confidencial y substituye a cualquier otro entendimiento previo, oral o escrito, que haya
    existido entre las partes. ");




    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DECIMO SEGUNDA");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Ninguna de las partes podrá ceder sus derechos y obligaciones derivados del
    presente Contrato ");


    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DECIMO TERCERA");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Este convenio solamente podrá ser modificado mediante consentimiento de las
    partes, otorgado por escrito.");




    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"DECIMO CUARTA");

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Para la interpretación y cumplimiento del presente contrato, las partes se someten a
    la jurisdicción de las leyes, renunciando desde ahora a cualquier otro fuero que
    pudiera corresponderles por razón de sus domicilios presentes o futuros o por cualquier otra causa,
    señalando desde este momento como sus domicilios legales los siguientes:");


    $PDF->setFont("Arial", 'B', 11);
    $PDF->multicell(180,4,"Empresa A");
    $PDF->multicell(180,4,"Calle $direccion_empresa_calle $direccion_empresa_num");
    $PDF->multicell(180,4,"Colonia $direccion_empresa_col");
    $PDF->multicell(180,4,"Codigo Postal $direccion_empresa_cp");
    $PDF->multicell(180,4,"Ciudad $direccion_empresa_ciud");
    $PDF->multicell(180,4,"Representate legal $nombre_del_rep");
    


    $PDF->setFont("Arial", 'B', 11);
    $PDF->multicell(180,4,"Empresa B    ");
    $PDF->multicell(180,4,"Calle $direccion_empresa_calle_b");
    $PDF->multicell(180,4,"Colonia $direccion_empresa_col_b");
    $PDF->multicell(180,4,"Codigo Postal $direccion_empresa_cp_b");
    $PDF->multicell(180,4,"Ciudad $direccion_empresa_ciud_b");
    $PDF->multicell(180,4,"Representate legal $nombre_del_rep_b");


    $PDF->setFont("Arial", 'B', 11);
    $PDF->multicell(180,4,"Fecha de inicio de contrato $fecha_ini_cont");
    $PDF->multicell(180,4,"Fecha de vencimiento $fecha_fin_cont");
    $PDF->multicell(180,4,"Costo: $costo");
    $PDF->multicell(180,4,"Fecha de vencimiento: $fec_pago");
                    

    $PDF->setFont("Arial", '', 11);
    $PDF->multicell(180,4,"Enteradas las partes del contenido y alcance del presente contrato, lo firman a fecha $fecha_firm_cont");
   
    $PDF->output();
?>
