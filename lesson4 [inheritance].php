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
    private $name;
    private $age;
    private $level;
    private $score;
    private $subjects = array(
        'Arabic' => 0,
        'English' => 0,
        'Math' => 0,
        'Science' => 0,
    );

    protected $minScore = 150;
    public $maxScore = 300;

    public static $teacher = 'Ahmed Mohamed Ali';

    const MIN_AGE = 20;
    const MAX_AGE = 30;

    public function __construct($name, $age) //=>magic function
    {
        $this->setName($name);
        $this->setAge($age);
    }

    public function setName($name)
    {
        $name = strtolower($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $name = ucwords($name);
        $name = substr($name, 0, 20);
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    private function setAge($age)
    {
        $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
        $age = abs($age);
        if ($age < self::MIN_AGE || $age > self::MAX_AGE){
            throw new Exception('Sorry age must be between 12 and 20');
        }else{
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSubject()
    {
        return $this->subjects;
    }
    public function getMinScore()
    {
        return $this->minScore;
    }
    public function getMaxScore()
    {
        return $this->maxScore;
    }

    public function setSubjectScore($subjectName, $value)
    {
        if (array_key_exists($subjectName, $this->subjects)){
            $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
            $value = abs($value);
            if ($value > 50) {
                throw new Exception('Sorry the maximum score for this subject is 50');
            } else {
                $this->subjects[$subjectName] = $value;
            }
        } else{
            throw new Exception('Sorry we don\'nt have a subject of name '. $subjectName);
        }
    }

    public function getSubjectScore($subjectName)
    {
        if (array_key_exists($subjectName, $this->subjects)){
            return $this->subjects[$subjectName];
        } else{
            throw new Exception('Sorry we don\'nt have a subject of name '. $subjectName);
        }
    }


}

class Grade1Student extends Student
{
    private $activity;
    const MIN_AGE = 21;
    const MAX_AGE = 31;
    public function __construct($name, $age)
    {
        parent::__construct($name, $age);
        $this->minScore = 180;
        $this->maxScore = 330;
        $this->subjects['Computer'] = 0;
    }
    public function setStudentActive()
    {
        $this->activity = 'Active';
    }
    public function setStudentAsNonActive()
    {
        $this->activity = 'Not Active';
    }
}

$aya = new Grade1Student('Aya Hosny', 24);
echo $aya->getName() . ' techer\'s name is ' . Student::$teacher;
echo '<pre>';
$aya->setSubjectScore('Arabic', 50);
//var_dump($aya);
echo $aya->getAge();
echo $aya->getSubjectScore('Arabic');
//echo $aya->getMinScore();
//echo $aya->getMaxScore();
print_r($aya->getSubject());