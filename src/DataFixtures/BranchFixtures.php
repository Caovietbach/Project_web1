<?php

namespace App\DataFixtures;

use App\Entity\Branch;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BranchFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 10; $i++){
            $branch = new Branch;
            $branch->setName("Branch $1");
            $manager->persist($branch);
        }

        $manager->flush();
    }
}
