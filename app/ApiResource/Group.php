<?php
namespace App\ApiResource;

use ApiPlatform\Metadata\Get;
use App\State\GroupProvider;

#[Get(uriTemplate: '/group_custom/{id}', provider: GroupProvider::class)]
class Group
{
    public string $id;
    public string $title;
}