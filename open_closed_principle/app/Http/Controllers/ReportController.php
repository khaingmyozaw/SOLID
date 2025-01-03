<?php

namespace App\Http\Controllers;

use App\Reports\CsvReport;
use App\Reports\PdfReport;
use App\Reports\XmlReport;
use App\Services\ReportGenerator as ServicesReportGenerator;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function generate(Request $request)
    {
        $type = $request->input('type'); // Getting the type what the client wanna generate

        $reportGenerator = new ServicesReportGenerator();
        $report = null;

        switch ($type) {
            case $type == 'pdf':
                $report = new PdfReport();
                break;
            case $type == 'csv':
                $report = new CsvReport();
                break;
            case $type == 'xml':
                $report = new XmlReport();
                break;
            default:
                return response()->json(['error' => 'Invalid report type.'], 400);
        }

        // Injection according to the type that the client requests.
        return response()->json(['message' => $reportGenerator->generateReport($report)], 200);
    }
}
