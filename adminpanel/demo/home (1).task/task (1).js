function performOperation() {
    const operand1 = parseFloat(prompt("Enter the first operand:"));
    const operand2 = parseFloat(prompt("Enter the second operand:"));
    const operator = prompt("Enter the operator (+, -, *, /, %):");
  
    if (operator === "-" && operand2 > operand1) {
      alert("Cannot subtract a larger number from a smaller one. Please try again.");
      return;
    }
    let result;
    switch (operator) {
      case "+":
        result = operand1 + operand2;
        break;
      case "-":
        result = operand1 - operand2;
        break;
      case "*":
        result = operand1 * operand2;
        break;
      case "/":
        if (operand2 === 0) {
          alert("Cannot divide by zero.");
          return;
        }
        result = operand1 / operand2;
        break;
      case "%":
        if (operand2 === 0) {
          alert("Cannot calculate modulus by zero.");
          return;
        }
        result = operand1 % operand2;
        break;
      default:
        alert("Invalid operator.");
        return;
    }
    document.write(`<h1>The result is ${result}</h1>`);
  }
  performOperation();