<?php
//Corrected version
function addNumbers(int $num1, int $num2): int {
  return $num1 + $num2;
}

//Input validation
function validatedAdd($num1, $num2) {
  if (is_numeric($num1) && is_numeric($num2)) {
    return addNumbers((int)$num1, (int)$num2);
  } else {
    return "Invalid input. Please provide numbers.";
  }
}

//Example usage
echo validatedAdd(10, 5); // Output: 15
echo validatedAdd(10, "abc"); // Output: Invalid input. Please provide numbers.
echo validatedAdd(10, "5"); // Output: 15
?>