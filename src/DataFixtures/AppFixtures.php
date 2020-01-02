<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User ("SuperAdmin");
        $user->setPassword($this->encoder->encodePassword($user, "bosslady"));
        $user->setRoles(array("ROLE_SuperAdmin"));
        $user->setIsactive(true);
        $user->setUsername("bosslady");
        $user->setNomComplet("faballa");
        $manager->persist($user);
        
        $manager->flush();
    }
}
