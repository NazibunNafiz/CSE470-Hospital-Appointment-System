<?php

class UserTest extends \PHPUnit\Framework\TestCase
{

public function testThatWeCanGetTheFirstName()
{
$user = new \App\Models\User;

$user->setFirstName('Elon');

$this->assertEquals($user->getFirstName(), 'Elon');
}


public function testThatWeCanGetTheLastName()
{
$user = new \App\Models\User;

$user->setLastName('Mask');

$this->assertEquals($user->getLastName(), 'Mask');
}

public function testFullNameIsReturned()
{
$user = new \App\Models\User;

$user->setFirstName('Elon');

$user->setLastName('Mask');

$this->assertEquals($user->getFullName(), 'Elon Mask');
}

public function testFirstAndLastNameAreTrimmed()
{
$user = new \App\Models\User;

$user->setFirstName('Elon     ');

$user->setLastName('     Mask');

$this->assertEquals($user->getFirstName(), 'Elon');

$this->assertEquals($user->getLastName(), 'Mask');
}

public function testRoomNumber()
{
$user = new \App\Models\User;

$user->setRoomNumber('11');

$this->assertEquals($user->getRoomNumber(), '11');
}

public function testGender()
{
$user = new \App\Models\User;

$user->setGender('male');

$this->assertEquals($user->getGender(), 'male');
}

public function testPatientAge()
{
$user = new \App\Models\User;

$user->setPatientAge(69);

$this->assertEquals($user->getPatientAge(), 69);


}


public function testEmailAddressCanBeSet()
{
$user = new \App\Models\User;

$user->setEmail('elon@codecourse.com');

$this->assertEquals($user->getEmail(), 'elon@codecourse.com');
}

public function testEmailVariablesContainCorrectValues()
{
$user = new \App\Models\User;

$user->setFirstName('Elon');

$user->setLastName('Mask');

$user->setEmail('elon@codecourse.com');

$emailVariables = $user->getEmailVariables();

$this->assertArrayHasKey('full_name', $emailVariables);
$this->assertArrayHasKey('email', $emailVariables);

$this->assertEquals($emailVariables['full_name'], 'Elon Mask');
$this->assertEquals($emailVariables['email'], 'elon@codecourse.com');
}

public function testDoctorID()
{
$user = new \App\Models\User;

$user->setDoctorID(007);

$this->assertEquals($user->getDoctorID(), 007);


}

public function testDoctorSpeciality()
{
$user = new \App\Models\User;

$user->setDoctorSpeciality('Neurosurgeon');

$this->assertEquals($user->getDoctorSpeciality(), 'Neurosurgeon');
}




public function testAppointmentDate()
{
$user = new \App\Models\User;

$user->setAppointmentDate('12/06/2021');

$this->assertEquals($user->getAppointmentDate(), '12/06/2021');
    }

public function testPatientBirthDate()
{
$user = new \App\Models\User;

$user->setPatientBirthDate('20/06/1952');

$this->assertEquals($user->getPatientBirthDate(), '20/06/1952');
    }
}  