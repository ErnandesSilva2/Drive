<?php
define('FPDF_FONTPATH', 'font/');
require('fpdf/fpdf.php');
$pdf=new FPDF('P','cm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$sql="SELECT * FROM pagamento";
$conect = mysql_connect("localhost", "root", "123");
if (!$conect) die ("<h1>Falha na conexão com o banco de dados!</h1>");
$db = mysql_select_db("autoescola");
$exe_sql=mysql_query($sql) or die (mysql_error());
while($resultado=mysql_fetch_array($exe_sql))
{
	$pdf->Cell(5,1,$resultado['descricao'],1,0,'L');
	$pdf->Cell(5,1,$resultado['valor'],1,0,'L');
	$pdf->Cell(5,1,$resultado['datadevencimento'],1,1,'L');
	
}

$pdf->Output();
?>