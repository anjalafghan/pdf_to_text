<!DOCTYPE html>
<html>
<body>
    <?php
include('class.pdf2text.php');
$pdf2Text = new PDF2Text();
$pdf2Text->setFilename('');
$pdf2Text->decodePDF();
echo $pdf2Text->output();
    ?>
</body>
</html>
