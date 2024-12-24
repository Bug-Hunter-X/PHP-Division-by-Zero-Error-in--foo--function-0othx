function foo(a, b) {
  if (a === null || b === null) {
    return null; // Handle null values
  }

  if (b === 0) {
    return INF; // Or handle it as appropriate for your application, perhaps throw an exception
  }

  return a / b; 
}