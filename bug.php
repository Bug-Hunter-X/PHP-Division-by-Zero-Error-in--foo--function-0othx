function foo(a, b) {
  if (a === null || b === null) {
    return null; // Correct: Handles null values
  }

  // Bug: Potential division by zero if b is zero
  return a / b; 
}