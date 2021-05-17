<?php

namespace App\Models;

class User
{
public $first_name;
public $last_name;
public $email;
public $gender;
public $patientage;
public $chamber;
public $doctor_ID;
public $doctor_speciality;
public $birthDate;
public $appointment;

public function setFirstName($firstName)
{
$this->first_name = trim($firstName);

}

public function getFirstName()
{
return $this->first_name;
}


public function setLastName($lastName)
{
$this->last_name = trim($lastName);

}

public function getLastName()
{
return $this->last_name;
}

public function getFullName()
{
return $this->first_name . ' ' . $this->last_name;
}

public function setRoomNumber($chamber_)
{
$this->chamber = $chamber_;

}

public function getRoomNumber()
{
return $this->chamber;
}


public function setGender($gender_)
{
$this->gender = $gender_;

}

public function getGender()
{
return $this->gender;
}

public function setPatientAge($patientage_)
{
$this->patientage = $patientage_;
}

public function getPatientAge()
{
return $this->patientage;
}

public function setEmail($email)
{
$this->email = $email;
}

public function getEmail()
{
return $this->email;
}


public function getEmailVariables()
{
return [
'full_name' => $this->getFullName(),
'email' => $this->getEmail(),
];
}

public function setDoctorID($doctor_ID_)
{
$this->doctor_ID = $doctor_ID_;
}

public function getDoctorID()
{
return $this->doctor_ID;
}

public function setDoctorSpeciality($doctor_speciality_)
{
$this->doctor_speciality = $doctor_speciality_;

}

public function getDoctorSpeciality()
{
return $this->doctor_speciality;
}

public function setAppointment($appDate)
    {
        $this->appDate = $appDate;
    }

    public function getAppointment()
    {
        return $this->appDate;
    }

public function setPatientBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function getPatientBirthDate()
    {
        return $this->birthDate;
    }

public function setAppointmentDate($appointment)
    {
        $this->appointment = $appointment;
    }

    public function getAppointmentDate()
    {
        return $this->appointment;
    }    

}
