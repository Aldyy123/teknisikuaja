<?php

namespace App\Filament\Resources\BlogsResource\Pages;

use App\Filament\Resources\BlogsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Str;

class CreateBlogs extends CreateRecord
{
    protected static string $resource = BlogsResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($data['title']);;
        return $data;
    }
}
