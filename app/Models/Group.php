<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[ApiResource]
#[ApiResource(
    operations: [
        new GetCollection(
            paginationItemsPerPage: 10,
        ),
        new Get(),
        // new Post(),
        // new Patch()
    ],
)]
class Group extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];
}
