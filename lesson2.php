<?php
/*
 * Constructor  & Destructor
 * Access Modifiers
 * Inheritance
 *
 * */

//Class Context
/*
 * Access Modifier
 * access modifier like $ahmed-> name [access of name]
 * Public ان الخاصية او الدالة يمكن استدعاؤها داخل سياق عمل الكلاس او حارج الكلاس مياشرة من اي كائن من هذا النوع
 * Private ان الخاصية او الدالة لا يمكن اطلاقا استدعاؤها حارج ميثاق عمل الكلاس
 * Protected ان الخاصية او الدالة لا يمكن  استدعاؤها حارج الكلاس ولكن يمكن  استدعاؤها داخل اي الكلاس ابن لهذا النوع
 * */
// setters and getters
class Student
{
    public $name;
    public $age;
    public $level;
    public $score;
    public $subject = array(
        'Arabic' => 0,
        'English' => 0,
        'Math' => 0,
        'Science' => 0,
    );

    public $minScore = 150;
    public $maxScore = 300;

    public function __construct($name, $age) //=>magic function
    {
        $this->name = $name;
        if ($age > 20) {
            $this->age = $age;
        } else {
            throw new Exception('Sorry the student\'s age must be greater than 20');
        }
        $this->welcomeStudent();
    }

    public function welcomeStudent()
    {
        echo 'Welcome to our class ' . $this->name;
    }

    public function setLevel($level)
    {
        // make sure that is an integer
        $level = abs(filter_var($level, FILTER_SANITIZE_NUMBER_INT));
        if ($level <  1 || $level > 12)
        {
           throw new Exception('Sorry level must be between 1 and 12');
        } else {
            $this -> level = $level;
        }

    }
    public function getLevel()
    {
        return $this->level;
    }

    public function setName($name)
    {
        $name = $this->filterName($name);
        $this->name = $name;
    }

    private function filterName($name)
    {
        return ucwords(substr($name, 0, 12));
    }


}

/*Instead of :
$magd = new Student();               $aya = new Student();
$magd->name = 'Magd';                $aya->name = 'Aya';
$magd->age = 25;                     $aya->age = 24;
*/

$magd = new Student('Magd', 25);
echo '<pre>';
$magd -> setLevel(-5);
echo '<pre>';
$magd -> welcomeStudent();
echo '<pre>';
$aya = new Student('Aya Hosni', 24);
echo '<pre>';
echo $aya->name;

/*
 * Scope Vs Context
 * Context => content many properties and methods
 * */