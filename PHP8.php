<?
echo "<html><head><title>PHP8 Ex.</title>";

echo 'Current PHP version is : ' . phpversion() . "<br><br>";

# Constructor Property Promotion
    // class Point {
    //     public function __construct(
    //         public int $x = 0,
    //         public int $y = 0,
    //         public int $z = 0,
    //     ) {}
    // }

    // $p = new Point(1,2,3);
    // var_dump($p);
    
    // class TestNull {
    //     public function __construct(public ?string $name = null)
    //     {
    //     }
    // }

    // $a = new TestNull('ss');
    // var_dump($a->name);

# Validation for Abstract Trait Methods
    // trait T {
    //     abstract public function test(int $x);
    // }
     
    // class C {
    //     use T;

    //     // NOT Allowed in PHP 8
    //     public function test(string $x) {}
    // }

# Union Types 2.0
    // class Number {
    //     // # Type mixed can only be used as a standalone type
    //     // # "mixed" essentially  match : 
    //        # null|bool|int|float|string|array|callable|object

    //     // private mixed $number;
    //     private int|float $number;

    //     // public function setNumber(mixed $number): void {
    //     public function setNumber(int|float $number): void {
    //         $this->number = $number;
    //     }

    //     // public function getNumber(): mixed {
    //     public function getNumber(): int|float {
    //         // Return type also enforced
    //         return $this->number;
    //     }
    // }

    // $n = new Number();

    // $n->setNumber(1.2);
    // echo $n->getNumber() . "<br>";
    
    // $n->setNumber(1);
    // echo $n->getNumber() . "<br>";
    
    // $n->setNumber("aa");
    // echo $n->getNumber() . "<br>";

# Incompatible Method Signatures

    // interface I {
    //     public function method(array $a);
    // }

    // // The below code throws fatal error
    // class C1 implements I {
    //  public function method(int $a) {}
    // }

    // // Even this code throws fatal error
    // class C12 {
    //     public function method(array $a) {}
    // }
    // class C2 extends C12 {
    //     public function method(int $a) {}
    // }

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
    // var_dump($object::class); // "stdClass"
     
    // class A {}
    // $a = new A();
    // var_dump($a::class);

    // $object = null;
    // var_dump($object::class); // TypeError

# Named Arguments

    // class CustomerData
    // {
    //     public function __construct(
    //         public string $name,
    //         public string $email='a@a.a',
    //         public int $age = 0,
    //     ) {}
    // }

    // $input = [
    //     'name' => 'test',
    //     'email' => 'test@test.test',
    //     'age' => 12,
    // ];

    // $data = new CustomerData(
    //     name: $input['name'],
    //     age: $input['age'],
    //     // email: $input['email'],
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
    //     public function __construct(public string $name){}
    // }
    
    // $emp = new Emp();
    // $dept = $emp?->getEmployeeDepartment()?->dept?->name;
    // print_r($dept);

# Saner String to Number Comparisons
    // $validValues = ["foo", "bar", "baz"];
    // $value = 0;
    // var_dump(in_array($value, $validValues));

# Match Expression v2
    // $noOfDays = 0;
    // $month = 'JAN';
    // $year = 2012;


    // $noOfDays = match ($month) {
    //     'APR', 'JUN', 'SEP', 'NOV' => 30,

    //     'FEB' => match (true) {
    //                 is_leap_year($year) => 29,
    //                 default => 28,
    //             },

    //     // If match does not have default 
    //     // and the value is not present in any other block 
    //     // it will throw an UnhandledMatchError
    //     default => 31,
    // };

    // function is_leap_year($year)
    // {
    //     return ((($year % 4) == 0) 
    //         && ((($year % 100) != 0) || (($year %400) == 0)));
    // }

    // echo $noOfDays . "<br>";


    // $text = 'Bienvenue chez nous';

    // // If we pass $text in this match it will look for the exact match of the string.
    // $result = match ($text) {
    //     str_contains($text, 'Welcome') || str_contains($text, 'Hello') => 'en',
    //     str_contains($text, 'Bienvenue') || str_contains($text, 'Bonjour') => 'fr',
    //     'Bienvenue chez nous' => 'FINAL'
    // };

    // var_dump($result);

# New Methods
    # str_contains, str_starts_with, str_ends_with
    // $fullString = 'This is my name';
    // $search = 'my';
    // var_dump(str_contains(needle: $search, haystack: $fullString));
    // var_dump(str_starts_with(needle: 'This', haystack: $fullString));
    // var_dump(str_ends_with(needle: 'me', haystack: $fullString));
    

























    # get_debug_type 

        #----------------------------------------------------------------------#
        # Value                           gettype()           get_debug_type() #
        #----------------------------------------------------------------------#
        # 1                               integer             int              #
        #----------------------------------------------------------------------#
        # 0.1                             double              float            #
        #----------------------------------------------------------------------#
        # true                            boolean             bool             #
        #----------------------------------------------------------------------#
        # false                           boolean             bool             #
        #----------------------------------------------------------------------#
        # null                            NULL                null             #
        #----------------------------------------------------------------------#
        # “WordPress”                     string              string           #
        #----------------------------------------------------------------------#
        # [1,2,3]                         array               array            #
        #----------------------------------------------------------------------#
        # A class with name “Foo\Bar”     object              Foo\Bar          #
        #----------------------------------------------------------------------#
        # An anonymous class              object              class@anonymous  #
        #----------------------------------------------------------------------#
