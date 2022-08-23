<?php

/*
 * Inheritance
 * Association
 * Aggregation
 * Composition
 * */

/*
 * Objects regards this lectures
 * 1- Trainer
 * 2- WebDevelopmentTrainer
 * 3- Book
 * 4- Student
 * 5- TrainingProgram
 * */

/*
 * 1- The WebDevelopmentTrainer is a type of Trainer (inheritance)
 * 2- The WebDevelopmentTrainer uses a book as a reference (Association)
 * 3- The TrainingProgram can have many students (Aggregation)
 * 4- The WebDevelopmentTrainer is responsible of ensuring the success of the training program (Composition)
 * 5- The WebDevelopmentTrainer's salary will be raised if the training rate is good enough (Composition)
 * */

class Trainer
{
    public $name;
    public $salary;
    public $age;
    public $rate;

    public function isGoodTrainer()
    {

    }
}

class WebDevelopmentTrainer extends Trainer
{
    public function isTheTrainerQualified()
    {
        //Some Operation
    }
    public function addBook(Book $book)
    {

    }

    public function paySalary()
    {
        if ($this->rate === true) {
            echo 'You have your salary this month';
        }
    }
}
class Book
{
    public $title;
    public $author;
    public $isbn;

    public function carBeBorrowed()
    {

    }

    public static function isBorrowBy(Trainer $trainer)
    {
        return $trainer->name;
    }
}

class TrainingProgram
{
    public $title;
    public $studentList;
    public $trainer;

    public function showStudentList()
    {
        return $this->studentList;
    }

    public function addStudent(Student $student)
    {
        $this->studentList[] = $student;
    }

    public function isTrainerGood(Trainer $trainer)
    {
        $trainer->rate = true;
    }
}

class Student
{
    public $name;
    public $age;
}