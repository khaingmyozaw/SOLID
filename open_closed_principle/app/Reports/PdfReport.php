<?php
namespace App\Reports;

use App\Contracts\Report;

/**
 * Good habit following OCP
 */
class PdfReport implements Report
{
    public function generate(): string
    {
        return 'Generate pdf report.';
    }
}