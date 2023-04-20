<?php

require('fpdf184/fpdf.php');//fpdf path
include_once('session_connect.php');// my db connection

//Create a new PDF file
$pdf=new FPDF();
$pdf->AddPage();

		$pdf->Image('assets/img/admin_logo.png',10,8,33);
		$pdf->SetFont('times','B',20);
		$pdf->SetXY(50, 10);
		$pdf->Cell(0,30,'Sparta Sport Appparel Sales Report',0,2,'C');
		$pdf->Ln();


		$pdf->SetLeftMargin(10);
//Now show the 3 columns
$pdf->SetFont('times','B',10);
$pdf->Cell(20,5,'Product ID',1);
$pdf->Cell(110,5,'Product Name',1);
$pdf->Cell(23,5,'Product Color',1);
$pdf->Cell(20,5,'Quantity',1);
$pdf->Cell(20,5,'Total',1);

$pdf->Ln();
$detail_res = mysqli_query($connect,"SELECT *,SUM(cart.product_quantity) AS quantity FROM cart 
										JOIN product ON product.product_id = cart.product_id 
										JOIN product_detail ON product_detail.product_detail_id = product.product_detail_id
										JOIN product_color ON product.product_color_id = product_color.product_color_id
										JOIN product_size ON product.product_size_id = product_size.product_size_id
										WHERE cart.payment_status!=0 GROUP BY cart.product_id");

while($table = mysqli_fetch_assoc($detail_res))
{
	$total=$table['product_price']*$table['quantity'];

	$order_id = $table['product_id'];
	$customer = $table['product_name'];
	$product = $table['product_color'];
	$qty = $table['quantity'];
	$subtotal = $total;

	
	$pdf->Cell(20,5,$table['product_id'],1);
	$pdf->Cell(110,5,$table['product_name'],1);
	$pdf->Cell(23,5,$table['product_color'],1);
	$pdf->Cell(20,5,$table['quantity'],1);
	$pdf->Cell(20,5,"RM ".$total,1);

	$pdf->Ln();

}



	  $pdf->SetXY(150,260);
      $pdf->SetFont('Helvetica','I',10);
      $pdf->Cell(0,10,'Page '.$pdf->PageNo(),0,0,'C');

	  
	  $pdf->Output('sales-report.pdf','D');
?>
