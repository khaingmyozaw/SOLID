<?php

namespace App\Services;

use App\Contracts\Report;

class ReportGenerator
{
    public function generateReport(Report $report): string
    {
        return $report->generate();
    }
}

/**
 * Now we can call ReportGenerator by injection of report type what we wanna.
 * 
 * Example
 * 
 *  echo $reportGenerator->generateReport(new PdfReport);
 *  echo $reportGenerator->generateReport(new CsvReport);
 *  echo $reportGenerator->generateReport(new XmlReport);
 * 
 * Check ReportController for more realization
 */