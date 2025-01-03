<?php

namespace App\Reports;

use App\Contracts\Report;

/**
 * Good habit following OCP
 */
class XmlReport implements Report
{
    public function generate(): string
    {
        return 'Generate xml report';
    }
}