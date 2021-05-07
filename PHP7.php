<?
echo "<html><head><title>PHP7 Ex.</title>";
echo 'Current PHP version is : ' . phpversion() . "<br><br>";

# Constructor Property Promotion
    // class Point {
    //     public int $x;
    //     public int $y;
    //     public int $z;

    //     public function __construct(
    //         int $x = 0,
    //         int $y = 0,
    //         int $z = 0
    //     ) {
    //         $this->x = $x;
    //         $this->y = $y;
    //         $this->z = $z;
    //     }
    // }

    // $p = new Point(1,2,3);
    // var_dump($p);

# Validation for Abstract Trait Methods
    // trait T {
    //     abstract public function test(int $x);
    // }
	 
    // class C {
    //     use T;

    //     // Allowed, but shouldn't be due to invalid type.
    //     public function test(string $x) {
    //     	echo $x;
    //     }
    // }

    // $c = new C();
    // $c->test("test");

# Union Types 2.0
    // class Number {
    //  /**
    //   * @var int|float $number
    //   */
    //  private $number;

    //  /**
    //   * @param int|float $number
    //   */
    //  public function setNumber($number) {
    //      $this->number = $number;
    //  }

    //  /**
    //   * @return int|float
    //   */
    //  public function getNumber() {
    //      return $this->number;
    //  }
    // }

    // $n = new Number();
    
 //    $n->setNumber(1.2);
 //    echo $n->getNumber() . "<br>";
    
 //    $n->setNumber(1);
 //    echo $n->getNumber() . "<br>";
    
 //    $n->setNumber("aa");
 //    echo $n->getNumber() . "<br>";

# Incompatible Method Signatures

    // interface I {
    // 	public function method(array $a);
    // }

    // // The below code throws fatal error
    // // class C1 implements I {
    // // 	public function method(int $a) {}
    // // }

    // // Just throws a warning
    // class C12 {
    // 	public function method(array $a) {
    //         print_r($a);
    //     }
    // }
    // class C2 extends C12 {
    // 	public function method(int $a) {
    //         echo $a . "<br>";
    //         parent::method([$a]);
    //     }
    // }

    // (new C2())->method(123);

# Arrays Starting With a Negative Index

    // $a = array_fill(-5, 4, 'A');
    // var_dump($a);

# throw Expression

    // try {
    //     // $callable = fn() => throw new Exception();
    //     // $callable();

    //     // $value is non-nullable.
    //     // $value = $nullableValue ?? throw new InvalidArgumentException();
         
    //     // $value is truthy.
    //     // $falsableValue = false;
    //     // $value = $falsableValue ?: throw new InvalidArgumentException();
    // } catch(Throwable $t) {
    //     echo "Handled";
    // }

# Trailing Comma in Parameter List
    // Check the first example
    //

# Allow ::class syntax on objects
    // $object = new stdClass;
    // var_dump($object::class); // Fatal Error
     
    // class A {}
    // $a = new A();
    // var_dump($a::class); // Fatal Error

    // $object = null;
    // var_dump($object::class); // Fatal Error

# Named Arguments

    // class CustomerData
    // {
    //     public function __construct(
    //         string $name,
    //         string $email,
    //         string $age
    //     ) {
    //         $this->name = $name;
    //         $this->email = $email;
    //         $this->age = $age;
    //     }
    // }

    // $input = [
    // 	'name' => 'test',
    // 	'email' => 'test@test.test',
    // 	'age' => "12",
    // ];

    // $data = new CustomerData(
    //     $input['name'],
    //     $input['age'],
    //     $input['email']
    // );

    // var_dump($data);

# Nullsafe Operator
    // class Emp{
    //     public $dept;

    //     public function getEmployeeDepartment() {
    //         // $this->dept = new Dept('HR');
    //         // return $this;
    //     }
    // }

    // class Dept {
    //     public $name;
    //     public function __construct($name){
    //         $this->name = $name;
    //     }
    // }
    
    // $emp = new Emp();
    // $dept = $emp->getEmployeeDepartment()->dept->name;
    // print_r($dept);

# Saner String to Number Comparisons
    // $validValues = ["foo", "bar", "baz"];
    // $value = 0;
    // var_dump(in_array($value, $validValues));

# Match Expression v2
    // $noOfDays = 0;
    // $month = 'FEB';
    // $year = 2011;
    // switch ($month) {
    //     case 'APR':
    //     case 'JUN':
    //     case 'SEP':
    //     case 'NOV':
    //         $noOfDays = 30;
    //         break;
    //     case 'FEB':
    //         switch ($year) {
    //             case is_leap_year($year):
    //                 $noOfDays = 29;
    //                 break;
                
    //             default:
    //                 $noOfDays = 28;
    //                 break;
    //         }
    //         break;
    //     default : 
    //         $noOfDays = 31;
    // }
     
    // echo $noOfDays . "<br>";

    // function is_leap_year($year)
    // {
    //     return ((($year % 4) == 0) 
    //         && ((($year % 100) != 0) || (($year %400) == 0)));
    // }

# New Methods
    # str_contains, str_starts_with, str_ends_with
    // $fullString = 'This is my name';
    // $search = 'my';
    // $pos = strpos($fullString, $search);

    // if ($pos !== false) {
    //     echo "The string has been found";
    // } else {
    //     echo "String not found";
    // }

    // // var_dump(str_contains($fullString, $search));
    // // var_dump(str_starts_with($fullString, 'This'));
    // // var_dump(str_ends_with($fullString, 'me'));
