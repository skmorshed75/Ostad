//MODULE 12, LIVE TEST
//Sheikh Mohammed Morshed
/*
Question
Write a JavaScript function that selects an element with an id of "myList" and adds a new list item with the text "Apples" to the end of the list
 
*/

function addListItem() {
  // Get the unordered list element with an id of "myList"
  const myList = document.getElementById("myList");

  // Create a new list item element
  const newListItem = document.createElement("li");

  // Set the text of the new list item to "Apples"
  newListItem.innerText = "Apples";

  // Add the new list item to the end of the unordered list
  myList.appendChild(newListItem);
}

console.log("Mango, ammmsdfsdfsdsdf");