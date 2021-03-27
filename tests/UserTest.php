<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        #require 'User.php';

        $user = new User;

        $user->first_name = "Teresa";
        $user->surname = "Green";

        $this->assertEquals('Teresa Green', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;

        $this->assertEquals('', $user->getFullName());
    }
    public function testNotificationIsSent()
    {   
        $user =new User;

        $mock_mailler = $this->createMock(Mailler::class);

        $mock_mailler->method('sendMessage')
            ->willReturn(true);

        $user->setMailler(new Mailler);

        $user->email = 'sionarty@gmail.com';

        $this->assertTrue($user->notify("Hello"));

    }

}
