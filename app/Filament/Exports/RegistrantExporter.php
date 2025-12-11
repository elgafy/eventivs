<?php

namespace App\Filament\Exports;

use App\Models\Registrant;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class RegistrantExporter extends Exporter
{
    protected static ?string $model = Registrant::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('first_name'),
            ExportColumn::make('last_name'),
            ExportColumn::make('workplace'),
            ExportColumn::make('speciality'),
            ExportColumn::make('email'),
            ExportColumn::make('mobile'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your registrant export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
