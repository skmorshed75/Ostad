<!-- 
MODULE - 12
Submitted by : Sheikh Mohammed Morshed

ASSIGNMENT :
------------
Question : Build a BMI Calculator using JavaScript and deploy it to Netlify

Part 1: Building the BMI Calculator

Create an HTML file with a form containing two input fields with IDs of "weightInput" and "heightInput", and a button with an ID of "calculateBtn".
Using JavaScript, write a function that calculates the Body Mass Index (BMI) of a person when the "calculateBtn" is clicked.
The BMI formula is: BMI = weight (kg) / (height (m) * height (m)).
Display the BMI result on the web page.

Part 2: Styling the BMI Calculator 
Use CSS to style the form and the result.
Add a background image to the form.
Add custom fonts using Google Fonts.

Part 3: Deploying to Netlify
Deploy your site to Netlify.

What You should submit :
1.  You should submit github repository link
2. You should add a text file named note.txt in your repository
3. In the note.txt file, please add your deployed link of your website


SOLUTION :
----------
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment on Module 12</title>
</head>
<body>
<form>
  <label for="weightInput">Weight (kg):</label>
  <input type="number" id="weightInput">
  
  <label for="heightInput">Height (m):</label>
  <input type="number" id="heightInput">
  
  <button type="button" id="calculateBtn">Calculate BMI</button>
  
  <p id="result"></p>
</form>

<script>
  const calculateBtn = document.getElementById("calculateBtn");
  const result = document.getElementById("result");

  calculateBtn.addEventListener("click", () => {
    const weight = parseFloat(document.getElementById("weightInput").value);
    const height = parseFloat(document.getElementById("heightInput").value);
    
    const bmi = weight / (height * height);
    
    result.innerText = `Your BMI is ${bmi.toFixed(2)}.`;
  });
</script>
</body>
</html>
