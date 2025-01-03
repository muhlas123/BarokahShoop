<?php

namespace App\Filament\Resources\KeranjangBelanjaResource\Pages;

use App\Filament\Resources\KeranjangBelanjaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKeranjangBelanjas extends ListRecords
{
    protected static string $resource = KeranjangBelanjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
