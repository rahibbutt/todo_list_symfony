<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Todos;
//use Symfony\Component\Validator\Constraints\DateTime;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $todos = new Todos();
        $todos -> setTask("Make breakfast");
        $todos->setDuedate(\DateTime::createFromFormat('d-m-Y', '12-05-2025'));

        $todos -> setStatus("Completed");

        $manager->persist($todos);

        $todos = new Todos();
        $todos -> setTask("Do some groceries");
        $todos->setDuedate(\DateTime::createFromFormat('d-m-Y', '12-05-2025'));

        $todos -> setStatus("In progress");
        
        $manager->persist($todos);

        $manager->flush();
    }
}
