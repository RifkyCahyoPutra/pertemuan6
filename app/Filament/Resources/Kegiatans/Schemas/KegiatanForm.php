<?php

namespace App\Filament\Resources\Kegiatans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KegiatanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                DatePicker::make('tanggal')
                    ->required(),
                TextInput::make('ringkasan'),
                Textarea::make('isi')
                    ->columnSpanFull(),
                TextInput::make('foto'),
            ]);
    }
}
