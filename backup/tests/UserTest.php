<?php
#test class
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnFullName()
    {
        require '/Users/Maneerat/Desktop/PHPUnitCourse/codes/User.php';

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


    public function testHasFirstName()
    {
        $user = new User;

        $user->first_name = "Teresa";

        $this->assertEquals('Teresa', $user->first_name);
    }
    #กรณีชื่อไม่ขึ้นต้นด้วย test สามารถเพิ่ม comment ไว้ก่อน function ได้
    /** 
     * @test
     */
    public function user_Has_Surname()
    {
        $user = new User;

        $user->surname = "Green";

        $this->assertEquals('Green',$user->surname);
    }
}
