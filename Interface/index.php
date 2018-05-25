<?php
interface school{
    public function mySchool();
}
interface college{
    public function myCollege();
}
interface versity{
    public function myVersity();
}

class Teacher implements school, college , versity{
    public function __construct()
    {
        $this->mySchool();
        $this->myCollege();
        $this->myVersity();
    }

    public function mySchool()
    {
        // TODO: Implement mySchool() method.
        echo "School name is : A<br>";
    }
    public function myCollege()
    {
        // TODO: Implement myCollege() method.
        echo "College name is : B<br>";
    }
    public function myVersity()
    {
        // TODO: Implement myVersity() method.
        echo "Versity name is : C<br>";
    }
}
$teacher = new Teacher();
?>