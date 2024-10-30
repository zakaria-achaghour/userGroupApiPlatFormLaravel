<?php

namespace App\Models;

use ApiPlatform\Laravel\Eloquent\Filter\OrderFilter;
use ApiPlatform\Laravel\Eloquent\Filter\PartialSearchFilter;
use Illuminate\Database\Eloquent\Model;
use ApiPlatform\Metadata\ApiResource;

use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\QueryParameter;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[ApiResource(
    paginationItemsPerPage: 20,
    paginationEnabled: true,
)]
#[QueryParameter(key: 'title', filter: PartialSearchFilter::class)]
#[QueryParameter(key: 'sort[:property]', filter: OrderFilter::class)]
class Group extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];
}
