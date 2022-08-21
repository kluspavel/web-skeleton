<?php declare(strict_types = 1);

namespace App\Model\Repository;

use App\Model\Entity\User;

class UserRepository extends Repository
{
	public function findOneById(int $id): ?User
	{
		return $this->findOneBy(['id' => $id]);
	}

	public function findOneByEmail(string $email): ?User
	{
		return $this->findOneBy(['email' => $email]);
	}

	public function findOneByUserName(string $username): ?User
	{
		return $this->findOneBy(['username' => $username]);
	}
}