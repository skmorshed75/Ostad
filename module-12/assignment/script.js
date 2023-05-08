const calculateBtn = document.getElementById("calculateBtn");
const result = document.getElementById("result");

calculateBtn.addEventListener("click", () => {
  const weight = parseFloat(document.getElementById("weightInput").value);
  const height = parseFloat(document.getElementById("heightInput").value);
  
  const bmi = weight / (height * height);
  
  result.innerText = `Your BMI is ${bmi.toFixed(2)}.`;
});