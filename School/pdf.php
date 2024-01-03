<?php
if(!empty($_POST['submit'])){
    $ID = RAND(1000,2000);
    // $ID = $_SESSION['ID'];
    $Name = $_SESSION['Name'];
    $Father_Name = $_SESSION['Father_Name'];
    $Mother_Name = $_SESSION['Mother_Name'];
    $Contact = $_SESSION['Contact'];
    $Address = $_SESSION['Address'];
    $Class = $_SESSION['Class'];

    $V25 = "USCMS";
 

    require("fpdf/fpdf.php");

    $pdf = new FPDF();


    $pdf -> AddPage();

    $pdf -> SetFont("Arial","B",20);
    // $pdf -> Cell(Weight,Height,"Text to show",Border value(1=yes,0=no),New Line(0 =no,1=yes),'Alignment(L,R,C)');
    $pdf -> Cell(0,10,"Application Form",0,1,'C');
    $pdf -> Cell(0,10," ",0,1,'C');//New Line Gap

    $pdf -> Cell(0,10,"Applicant Details",1,1,'C');

    $pdf -> SetFont("Arial","B",14);
    //Informantion Table
    $pdf -> Cell(50,10,"Application ID",1,0,'C');
    $pdf -> Cell(0,10,$ID,1,1,'C');

    $pdf -> Cell(50,10,"Name",1,0,'C');
    $pdf -> Cell(0,10, $Name,1,1,'C');

    $pdf -> Cell(50,10,"Father Name",1,0,'C');
    $pdf -> Cell(0,10,$Father_Name,1,1,'C');

    $pdf -> Cell(50,10,"Mother Name",1,0,'C');
    $pdf -> Cell(0,10,$Mother_Name,1,1,'C');

    $pdf -> Cell(50,10,"Contact",1,0,'C');
    $pdf -> Cell(0,10,$Contact,1,1,'C');

    $pdf -> Cell(50,10,"Address",1,0,'C');
    $pdf -> Cell(0,10,$Address,1,1,'C');

    $pdf -> Cell(50,10,"Class",1,0,'C');
    $pdf -> Cell(0,10,$Class,1,1,'C');


    $file  = $ID .time().'.pdf';

    $pdf -> output($file,'D'); 

} else{
    require("fpdf/fpdf.php");

    $pdf = new FPDF();


    $pdf -> AddPage();

    $pdf -> SetFont("Arial","B",20);
    // $pdf -> Cell(Weight,Height,"Text to show",Border value(1=yes,0=no),New Line(0 =no,1=yes),'Alignment(L,R,C)');
    $pdf -> Cell(0,10,"Error",0,1,'C');
}

?>