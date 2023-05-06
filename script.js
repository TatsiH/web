function solveQuadraticEquation(a, b, c) {
  var discriminant = b*b - 4*a*c;
  if (discriminant < 0) {
    return "Žiadne korene";
  } else if (discriminant == 0) {
    var x = -b / (2*a);
    return "x = " + x;
  } else {
    var x1 = (-b + Math.sqrt(discriminant)) / (2*a);
    var x2 = (-b - Math.sqrt(discriminant)) / (2*a);
    return "x1 = " + x1 + ", x2 = " + x2;
  }
}

function showResult() {
			var a = Number(document.getElementById("a").value);
			var b = Number(document.getElementById("b").value);
			var c = Number(document.getElementById("c").value);

			var result = solveQuadraticEquation(a, b, c);

			document.getElementById("result").innerHTML = result;
}