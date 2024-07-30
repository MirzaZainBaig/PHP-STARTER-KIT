<?php
class AgeCategory {
    private $age;

    public function __construct($age) {
        $this->age = $age;
    }

    public function displayAgeCategory() {
        if ($this->age < 13) {
            echo "You are a child.";
        } elseif ($this->age >= 13 && $this->age < 20) {
            echo "You are a teenager.";
        } elseif ($this->age >= 20 && $this->age < 30) {
            echo "You are in your twenties.";
        } else {
            echo "You are 30 or older.";
        }
    }
}

class DayOfWeek {
    private $day;

    public function __construct($day) {
        $this->day = $day;
    }

    public function displayDayOfWeek() {
        switch ($this->day) {
            case "1":
                echo "Today is Monday.";
                break;
            case "2":
                echo "Today is Tuesday.";
                break;
            case "3":
                echo "Today is Wednesday.";
                break;
            case "4":
                echo "Today is Thursday.";
                break;
            case "5":
                echo "Today is Friday.";
                break;
            case "6":
                echo "Today is Saturday.";
                break;
            case "7":
                echo "Today is Sunday.";
                break;
            default:
                echo "Invalid day.";
                break;
        }
    }
}

// Instantiate the classes and call their methods
$ageCategory = new AgeCategory(20);
$ageCategory->displayAgeCategory();

echo "<br>";

$dayOfWeek = new DayOfWeek('3');
$dayOfWeek->displayDayOfWeek();
?>
