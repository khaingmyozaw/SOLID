<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Cache;

class CachedUserRepository implements UserRepositoryInterface
{
    protected $repository;

    public function __construct(EloquentUserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function findById(int $id): ?User
    {
        return Cache::remember("user_{$id}", 3600, function () use ($id) {
            return $this->repository->findById($id);
        });
    }

    public function findByEmail(string $email): ?User
    {
        return Cache::remember("user_email_{$email}", 3600, function() use ($email) {
            return $this->repository->findByEmail($email);
        });
    }
}