<?php

/**
 * The bad habit of writing style that is not following Open/Closed Principle
 */
interface Report
{
    public function generate();
}

// PDF Reporter
class PdfReport implements Report
{
    public function generate()
    {
        return 'Generate pdf report.';
    }
}

// CSV Reporter
class CsvReport implements Report
{
    public function generate()
    {
        return 'Generate csv report.';
    }
}

// Report generator
class ReportGenerator {
    public function generateReport(Report $report) 
    {
        return $report->generate();
    }
}
