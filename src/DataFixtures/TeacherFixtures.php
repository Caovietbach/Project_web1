<?php

namespace App\DataFixtures;

use App\Entity\Teacher;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TeacherFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 10; $i++){
            $teacher = new Teacher;
            $teacher->setName("teacher $i");
            $teacher->setEmail("xxxxxxxxxxxx@gmail.com");
            $teacher->setImage("http://www.differencebetween.info/sites/default/files/images/4/author.jpg");
            $manager->persist($teacher);
        }

        $manager->flush();
    }
}