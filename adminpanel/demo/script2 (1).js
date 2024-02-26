var operand1 = parseFloat(prompt("first operand:"));
var operand2 = parseFloat(prompt("second operand:"));
var subtractionResult = operand1 - operand2;
if (operand1&&operand2) {
    if (operand1<operand2) {alert("incorrect data")
} else {document.write(("<h2>Subtraction</h2>"))
document.write("<p>You provided two operands with values " + operand1 + " and " + operand2 + ".<br>");
document.write("The subtraction of them is: " + subtractionResult + "<br><br>");
}
    
} else {alert("all feilds are required")
    
}

