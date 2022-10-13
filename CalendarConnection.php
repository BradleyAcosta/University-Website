
<?php

class Calendar extends DateTime {

protected $year;
protected $monthNumber;
protected $weekDays = [
    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
];

protected $weeks = [];

public function getWeekDays(){
    return $this->weekDays;
}

public function setWeekDays($weekDays){
    $this->weekDays = $weekDays;
}

public function getYear()
{
    return $this->year;
}

public function setYear( $year )

{
    $this->year = $year;
}


public function getMonthNumber(){
    return $this->monthNumber;
}

public function setMonth( $monthNumber){

    $this->monthNumber = $monthNumber;
}

public function getWeeks() {
    return $this->weeks;
}

public function setWeeks( $weeks ) {
    $this->weeks = $weeks;
}

public function create(){
    $date = $this->setDate($this->getYear(),$this->getMonthNumber(), 1);
    $daysInMonth = $date->format('t');
    $DayMonthStarts = $date->format('N');

    $days = array_fill(0, ($DayMonthStarts - 1),'');

    for ($x = 1; $x <= $daysInMonth; $x++){
    $days[] = $x;
     }

     $this->weeks = array_chunk($days, 7);
  }
}

?>