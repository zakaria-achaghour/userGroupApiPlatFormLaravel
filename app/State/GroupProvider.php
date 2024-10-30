<?php
namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use App\Models\Group as GroupModel;

final class GroupProvider implements ProviderInterface
{
    public function provide(Operation $operation, array $uriVariables = [], array $context = []): object|array|null
    {
        $book = GroupModel::find($uriVariables['id']);
        return new Group(id: $book->id, title: $book->title);
    }
}