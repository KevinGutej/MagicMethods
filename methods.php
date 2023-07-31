<?php

class User {
    private Group $group;
    private string $firstName = "";
    private string $lastName = "";
    private DateTime $dateOfBirth;
    private DateTime $dateOfReg;

    public function __construct(Group $group, string $firstName, string $lastName, DateTime $dateOfBirth)
    {
        $dateTime = new DateTime();

        $this->group = $group;
        $this->dateOfReg = $dateTime;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function __toString() :string
    {
         return $this->firstName . " " . $this->lastName . " " . $dateOfBirth->format("d/m/Y");//NEXT LESSON HERE!
    }
}

class Group {
    public string $name = "";
    public int $numberOfMembers = 0;

    public function __construct(string $name, int $numberOfMembers)
    {
        $this->name = $name;
        $this->numberOfMembers = $numberOfMembers;
    }
}



$moderators = new Group("Mods", 4);
$dateOfBirth = new DateTime("02/05/1997");
echo $dateOfBirth->format("d/m/Y");
$user1 = new User($moderators, "kevin" , "Adamik", $dateOfBirth);
//echo $user1;