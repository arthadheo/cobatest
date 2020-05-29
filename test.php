<?php 

public class Company {

    public string $name;

    public function setCompanyName ($name){
        $this->name = $name;

        echo $name;
    }

    public function setDepartementName($nameDept) {
        $this->nameDept = $nameDept;

        echo $nameDept;
    }

    public function setEmployeeName($nameEmployee) {
        $this->nameEmployee = $nameEmployee;

        echo $nameEmployee;
    }

    public function getCompanyname(){
        return $this->name;
    }

    public function getDepartementName(){
        return $this->nameDept;
    }

    public function setEmployeetitle($title) {
        $this->title = $title;

        echo $title;
    }

    public function setEmployeeSalary($salary) {
        $this->salary = $salary;

        echo $salary;
    }

    public function getEmployeetitle(){
        return $this->title;
    }

    public function getEmployeeProfile(){
        return $this->nameEmployee;
        return $this->title;
        return $this->salary;
    }

    public function getEmployeeMothlySalary($day) {
        return $this->salary * 30;
    }
}

?>