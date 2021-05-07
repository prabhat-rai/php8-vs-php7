<?php
## Examples to understand OpCode Optimizations 

# Example 1
	// $a = 0;

	// for ($i = 0; $i < 100; $i++) {
	//     $a += $i;
	// }

	// echo $a;

# Example 2
	// if (strlen('Test') < 2) {
	//     echo "Test";
	// }

# Example 3

	// if (strlen('Test') < strlen('Test Test')) {
	//     echo "Test";
	// }

# Example 4
	// namespace Foo;

	// if (strlen('Test') < strlen('Test Test')) {
	//     echo "Test";
	// }

# Example 5.1
	// namespace Foo;

	// if (\strlen('Test') < \strlen('Test Test')) {
	//     echo "Test";
	// }

# Example 5.2
	// namespace Foo;
	// use function strlen;

	// if (strlen('Test') < strlen('Test Test')) {
	//     echo "Test";
	// }

