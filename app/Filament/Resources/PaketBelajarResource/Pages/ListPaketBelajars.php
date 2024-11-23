<?php

namespace App\Filament\Resources\PaketBelajarResource\Pages;

use App\Filament\Resources\PaketBelajarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPaketBelajars extends ListRecords
{
    protected static string $resource = PaketBelajarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
