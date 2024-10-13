<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\ReportController;
use App\Models\Payment;
use Illuminate\Support\Facades\App;
use PDF;

class ReportController extends Controller

{
    public function report1($id)
    {
        $payment = Payment::find($id);
        // $pdf =App('dompdf.wrapper');
        $pdf = App::make('dompdf.wrapper');

        $print = "<div style='margin:20px;padding:20px;'>";
        $print .= "<h1 style='text-center'> Payment Receipt </h1>";
        $print .= "<hr/>";
        $print .= "<p style='text-center'> Receipt No : <b>" . $id . "</b> </p>";
        $print .= "<p>Date :<b>" . $payment->paid_date . "</b> </p>";
        $print .= "<p>Enrollment No : <b>" . $payment->enrollment->enroll_no . "</b> </p>";
        $print .= "<p> student Name : <b> " . $payment->enrollment->student->name . "</b> </p>";
        $print .= "<hr/>";
        // table creation 
        $print .= "<table style='width:100%'>";

        $print .= "<tr>
<td>Batch</td>
<td>Amount</td>
</tr>";
        $print .= "<tr>
<td> <h3>" . $payment->enrollment->batch->name . "</h3> </td>
<td> <h3>" . $payment->amount . "</h3> </td>

</tr>";
        $print .= "</table>";
        $print .= "</tr>";

        $print .= "<hr/>";
        $print .= "<span> Print Date : <b>" . date('Y-m-d') . "</b> </span>";
        $print .= "</div>";
        // $pdf = PDF::loadView('pdf.document', $print);
        // return $pdf->download('document.pdf');
        $invPDF = $pdf->loadHTML($print);
return $pdf->stream('invoice.pdf');

    }
}
