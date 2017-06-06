<?php 
namespace mpdf;
use \mPDF;
use yii;
use app;

$contador=count($dataProvider);

   $total=0;
$html=
'
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
   <style>
        .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(img/dimension.png);
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
   </style>
  </head>
  <body>

 <header class="clearfix">
      <div id="logo">
        
      </div>
      <h1>NIÑO DISTRIBUCIONES</h1>
      <div id="company" class="clearfix">
        <div>NIÑO DISTRIBUCIONES</div>
        <div> KRA 7H # 7-35,<br />Colombia</div>
        <div>(316) 577-4040</div>
        <div><a href="">NINODISTRIBUCIONES@gmail.com</a></div>
      </div>
      <div id="project">
        <div>FACTURA N°: '.$dataProvider[0]['PEDI_ID'].'</div>
        <div><span>FECHA: </span> '.date('Y/ M/ D').'</div>
       
 
        <br>
        <br>
        <div><span></span> INFORMACION DEL CLIENTE</div>
        <div><span>IDENTIFICACION: </span> '.$dataProvider[0]['PERS_IDENTIFICACION'].'</div>
        <div><span>CLIENTE: </span> '.$dataProvider[0]['PERS_NOMBRE'].'</div>
        <div><span>TELEFONO: </span> '.$dataProvider[0]['PERS_TELEFONO'].'</div>


    
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            
            <th class="desc"></th>
            <th class="desc">DESCRIPCION</th>
            <th>PRECIO UNIT</th>
            <th>CANT</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
         
        ';
        //bandera viene por parametro desde el controlador  de clientes
   

           
                foreach ($dataProvider as $dataProvider) 
                {
                     $html.='
                     <tr>
                        <td class=""></td>
                        <td class="desc">'.$dataProvider['PROD_DESCRIPCION'].'</td>
                        <td class="unit">$'.$dataProvider['INVE_PRECIO'].'</td>
                        <td class="qty">'.$dataProvider['DEPE_CANTIDAD'].'</td>
                        <td class="total">$'.($dataProvider['DEPE_CANTIDAD']*$dataProvider['INVE_PRECIO']).'</td>
                    </tr>';

                     $total=$total+($dataProvider['DEPE_CANTIDAD']*$dataProvider['INVE_PRECIO']);
                }
            

$html.='        
         
        
        <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">$' .$total.'</td>
          </tr>
         
          <tr>
            <td colspan="4" class="grand total">TOTAL</td>
            <td class="grand total">$' .$total.'</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>:</div>
        <div class="notice"></div>
      </div>
    </main>


';

//esta es la parte de la extencion mpdf que es la que genera el pdf 
$mpdf=new mPDF('c','A4');
$mpdf->WriteHTML($html);
$mpdf->Output('Reporte_Contratos.pdf','I');
exit;
?>