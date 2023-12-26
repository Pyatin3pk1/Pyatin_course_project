<?php
require_once('../html2pdf-master/html2pdf.class.php');
ob_start();
function printResult ($result_set) {
while (($row = $result_set->fetch_assoc()) != false){
    global $age;
    echo '<table style="width: 100%; text-align: left; border=1">
    <tr>
    <td style="width: 40%; text-align: left">'
    .$row[atribut].
    '</td><td style="width: 10%; text-align: left">'
    .$row[a1].
    '</td>
    </tr>
    </table>';
  }
}
$mysqli = new mysqli ("localhost", "root", "", "MakeAppointment");
$mysqli->query("SET NAMES 'utf8'");
// Вывод значений
$result_set = $mysqli->query("SELECT * FROM Employee ");
printResult ($result_set);
$mysqli->close ();

$content = ob_get_clean();
// Конвертируем в PDF
try
{
$html2pdf = new HTML2PDF('P', 'A4', 'fr');
$html2pdf->setDefaultFont('freesans');
$html2pdf->pdf->SetDisplayMode('real');
$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
$html2pdf->Output('base.pdf');
}
catch(HTML2PDF_exception $e) {
    echo $e;
    exit;
}
?>  