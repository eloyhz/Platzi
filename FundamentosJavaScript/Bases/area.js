let base = 5
let height = 7

// función para calcular el área de un triángulo usando una arrow function
const triangleArea = (base, height) => base * height / 2

console.log(`El área de un triángulo de base
  ${base} y altura ${height} es: ${triangleArea(base, height)}`);

// calcular el área de un círculo usando una arrow function con cuerpo

let radius = 10

const circleArea = (radius) => {
  return Math.PI * radius * radius
}

console.log(`El área de un círculo con radio ${radius} es: ${circleArea(radius)}`);

// calcular el área de cun rectangulo usando una función asignada a una variable

let rectangleArea = function (base, height)  {
  return base * height
}

console.log(`El área de un rectángulo con base ${base} y altura ${height}
es: ${rectangleArea(base, height)}`);
