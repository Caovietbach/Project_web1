<?php

namespace App\DataFixtures;

use App\Entity\Student;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StudentFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 10; $i++){
            $student = new Student;
            $student->setName("Student $i");
            $student->setDob(\DateTime::createFromFormat('Y-m-d', '2002-06-01'));
            $student->setEmail("xxxxxxxxxxxx@gmail.com");
            $student->setImage("http://www.differencebetween.info/sites/default/files/images/4/author.jpg");
            $manager->persist($student);
        }

        $manager->flush();
    }
}
