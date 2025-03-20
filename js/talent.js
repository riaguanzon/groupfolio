// Function to add a new input field beside the existing ones
function addInputField() {
  // Get the container holding the input fields
  var container = document.getElementById("dynamicInputs");

  // Create a new div to wrap the new input and the delete button
  var newDiv = document.createElement("div");
  newDiv.classList.add("input-group", "mb-2");

  // Create the new input element
  var newInput = document.createElement("input");
  newInput.type = "text"; // Set the input type to text
  newInput.name = "talent[]"; // Ensure the name is an array
  newInput.classList.add("form-control"); // Add the form-control class for consistent styling

  // Create the delete button (FontAwesome icon)
  var deleteIcon = document.createElement("i");
  deleteIcon.classList.add("fa-solid", "fa-xmark", "delete-icon");
  deleteIcon.style.cursor = "pointer"; // Add pointer cursor for better UX
  deleteIcon.onclick = function () {
    newDiv.remove(); // Directly remove the newly created input group div
  };

  // Add margin between the input and the delete icon
  newInput.style.marginRight = "10px"; // Adjust the right margin as needed

  // Append the new input and delete button to the new div
  newDiv.appendChild(newInput);
  newDiv.appendChild(deleteIcon);

  // Append the new div to the container
  container.appendChild(newDiv);
}
