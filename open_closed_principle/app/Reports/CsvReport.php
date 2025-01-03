<?php

namespace App\Reports;

use App\Contracts\Report;

/**
 * Good habit following OCP
 */
class CsvReport implements Report
{
    public function generate(): string
    {
        return 'Generate csv report.';
    }
}