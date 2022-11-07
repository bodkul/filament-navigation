<?php

namespace Bodkul\FilamentNavigation\Filament\Resources\NavigationResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Bodkul\FilamentNavigation\Filament\Resources\NavigationResource;

class EditNavigation extends EditRecord
{
    protected static string $resource = NavigationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
