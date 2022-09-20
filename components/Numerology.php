<?php

namespace app\components;

use yii\base\Component;

class Numerology extends Component
{
    private $birthday;
    private $year;
    private $month;
    private $day;
    private $name;
    private $_accountingYear;

    private $_matrix;
    private $_metacycle;
    private $_submetacycle;
    private $_subBaseNumber;
    private $_subCommunicative;
    private $_baseNumber;
    private $_communicative;
    private $_birthdayNumber;

    public function __construct($birthday)
    {
        $this->setBirthday(strtotime($birthday));
    }

    public function getParams()
    {
        return [
            'birthday' => date("d.m.Y", $this->birthday),
            'sign' => $this->sign,
            'age' => $this->age,
            'matrix' => $this->matrix,
            'reflectedMatrix' => $this->ReflectedMatrix,
            'metacycle' => $this->metacycle,
            'submetacycle' => $this->submetacycle,
            'metaprogramm' => $this->metaprogramm,
            'baseNumber' => $this->baseNumber,
            'communicative' => $this->communicative,
            'psychotype' => $this->psychotype,
            'developmentLevel' => $this->developmentLevel,
            'nameNumber' => $this->nameNumber,
        ];
    }

    private function setBirthday($birthday){
        $this->birthday = $birthday;
        $this->year = date("Y", $birthday);
        $this->month = date("m", $birthday);
        $this->day = date("d", $birthday);
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setAccountingYear($accountingYear)
    {
        $this->_accountingYear = $accountingYear;
        return $this;
    }

    public function getAccountingYear()
    {
        if(!$this->_accountingYear){
            $this->_accountingYear = date('Y');
        }
        return $this->_accountingYear;
    }

    public function getSign() {
        $month = $this->month;
        $signs = ["Козерог", "Водолей", "Рыбы", "Овен", "Телец", "Близнецы", "Рак", "Лев", "Девы", "Весы", "Скорпион", "Стрелец"];
        $signsstart = [1=>21, 2=>20, 3=>20, 4=>20, 5=>20, 6=>20, 7=>21, 8=>22, 9=>23, 10=>23, 11=>23, 12=>23];
        return $this->day < $signsstart[$month + 1] ? $signs[$month - 1] : $signs[$month % 12];
    }

    public function getAge()
    {
        $age = date('Y') - date('Y', $this->birthday);
        if (date('md', $this->birthday) > date('md')) {
            $age--;
        }
        return $age;
    }

    public function getMetacycle()
    {
        if(!$this->_metacycle) {
            $this->_metacycle = $this->getNumberSum(date("dmY", $this->birthday));
        }
        return $this->_metacycle;
    }

    public function getSubmetacycle()
    {
        if(!$this->submetacycle) {
            $this->_submetacycle = $this->metacycle - $this->getConst();
        }
        return $this->_submetacycle;
    }

    private function getNumberSum($number)
    {
//        $array = str_split($number);
//        if(count($array) == 1){
//            return $number;
//        }
//        return array_sum($this->getNumberSum($number));
        return array_sum(str_split($number));
    }

    private function getNumberSumFull($number)
    {
        while (strlen($number) > 1){
            $number = array_sum(str_split($number));
        }
        return $number;
    }

    private function getConst()
    {
        if(strlen($this->day) == 2){
            return substr((int)$this->day, 0, 1) * 2;
        }
        return $this->day * 2;
    }

    public function getMetaprogramm()
    {
        $lastYearDigit = substr($this->year, -1);
        $number1 = ($lastYearDigit == 0) ? substr($this->year, -2, 1) : $lastYearDigit;
        $number2 = ($number1 == 0) ? substr($this->year, -3, 1) : $number1;
        $number3 = ($number2 == 0) ? substr($this->year, -4, 1) : $number2;

        $number4 = (strlen($this->day) == 2) ? substr((int)$this->day, 0, 1) : $this->day;
        $number5 = ($number4 > $number3) ? $number3 : $number4;

        return (int)$lastYearDigit - (int)$number5;
    }

    public function getPsychotype()
    {
        $count1 = strlen($this->matrix[1]);
        $count2 = strlen($this->matrix[2]);

        if($count1 > $count2){
            $psychotype = 1;
        } elseif ($count1 < $count2){
            $psychotype = 2;
        } else {
            $psychotype = 3;
        }
        return $psychotype;
    }

    public function getBaseNumber()
    {
        if(!$this->_baseNumber) {
            $baseNumber = $this->getNumberSum($this->metacycle);
            if (strlen($baseNumber) > 1) {
                $this->_subBaseNumber = $this->baseNumber;
                $this->_baseNumber = $this->getNumberSum($this->subBaseNumber);
            } else {
                $this->_baseNumber = $baseNumber;
            }
        }
        return $this->_baseNumber;
    }

    public function getSubBaseNumber()
    {
        if(!$this->_subBaseNumber){
            $this->getBaseNumber();
        }
        return $this->_subBaseNumber;
    }

    public function getCommunicative()
    {
        if(!$this->_communicative) {
            $communicative = $this->getNumberSum($this->submetacycle);
            if (strlen($communicative) > 1) {
                $this->_subCommunicative = $this->communicative;
                $this->_communicative = $this->getNumberSum($this->subCommunicative);
            } else {
                $this->_communicative = $communicative;
            }
        }
        return $this->_communicative;
    }

    public function getSubCommunicative()
    {
        if(!$this->_subCommunicative){
            $this->getCommunicative();
        }
        return $this->_subCommunicative;
    }

    public function getDevelopmentLevel()
    {
        return $this->baseNumber + $this->communicative;
    }

    public function getNameNumber()
    {
        $numbers = '';
        $charters = ['а' => 1, 'и' => 1, 'с' => 1, 'ъ' => 1, 'б' => 2, 'й' => 2, 'т' => 2, 'ы' => 2, 'в' => 3, 'к' => 3, 'у' => 3, 'ь' => 3, 'г' => 4, 'л' => 4, 'ф' => 4, 'э' => 4,
            'д' => 5, 'м' => 5, 'х' => 5, 'ю' => 5, 'е' => 6, 'н' => 6, 'ц' => 6, 'я' => 6, 'ё' => 7, 'о' => 7, 'ч' => 7, 'ж' => 8, 'п' => 8, 'ш' => 8, 'з' => 9, 'р' => 9, 'щ' => 9];
        $chars = mb_str_split(mb_strtolower($this->name));
        foreach($chars as $char){
            $numbers .= $charters[$char];
        }
        return $this->getNumberSumFull($numbers);
    }

    public function getBirthdayNumber()
    {
        if(!$this->_birthdayNumber){
            $this->_birthdayNumber = (((int)$this->day * 100) + (int)$this->month) * $this->year;
        }
        return $this->_birthdayNumber;
    }

    public function getMatrix()
    {
        if(!$this->_matrix) {
            $number = date("dmY", $this->birthday) . $this->metacycle . $this->subBaseNumber . $this->baseNumber . $this->submetacycle . $this->subCommunicative . $this->communicative;
            $matrix = [];
            for ($i = 0; $i < 10; $i++) {
                $count = substr_count($number, $i);
                for ($j = 0; $j < $count; $j++) {
                    $matrix[$i] = $matrix[$i] . $i;
                }
            }
            $this->_matrix = $matrix;
        }
        return $this->_matrix;
    }

    public function getReflectedMatrix()
    {
        $matrix = [];
        for ($i = 0; $i < 10; $i++) {
            $count = substr_count($this->birthdayNumber, $i);
            for ($j = 0; $j < $count; $j++) {
                $matrix[$i] = $matrix[$i] . $i;
            }
        }
        return $matrix;
    }

    public function getLifeForceChartData()
    {
        $labels = [];
        $data = [];
        $numberLength = strlen($this->birthdayNumber);

        $currentYear = (int)$this->year;
        $currentIndex = 0;

        for ($i = 0; $i <= 62; $i++){
            $labels[] = $currentYear;
            $data[] = substr($this->birthdayNumber, $currentIndex, 1);
            $currentYear++;
            $currentIndex++;
            if($currentIndex == $numberLength){
                $currentIndex = 0;
            }
        }
        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }

    public function getAnnualLifeForceChartData()
    {
        $data = [];
        $number = (int)$this->birthdayNumber * 12 * (int)$this->accountingYear;
        $numberLength = strlen($number);
        $currentIndex = 0;

        for ($i = 0; $i < 12; $i++){
            $data[] = substr($number, $currentIndex, 1);
            $currentIndex++;
            if($currentIndex == $numberLength){
                $currentIndex = 0;
            }
        }
        return [
            'labels' => ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
            'data' => $data,
        ];
    }

    public function getFateAndWillChartData()
    {
        $labels = ["0", "12", "24", "36", "48", "60", "72", "84", "96", "108"];
        $fateNumber = $this->birthdayNumber;

        $willDay = str_replace(0,1, $this->day);
        $willMonth = ($this->month < 10) ? ($this->month + 10) : $this->month;
        $willYear = str_replace(0,1, $this->year);
        $willNumber = (($willDay * 100) + $willMonth) * $willYear;

        $data = [];
        $fateLength = strlen($fateNumber);
        $willLength = strlen($willNumber);

        $fateIndex = 0;
        $willIndex = 0;

        for ($i = 0; $i < 10; $i++){
            $data['fate'][] = substr($fateNumber, $fateIndex, 1);
            $fateIndex++;
            if($fateIndex == $fateLength){
                $fateIndex = 0;
            }

            $data['will'][] = substr($willNumber, $willIndex, 1);
            $willIndex++;
            if($willIndex == $willLength){
                $willIndex = 0;
            }
        }
        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }
}