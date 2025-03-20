// Function to add a new input field beside the existing ones
function addInputField() {
    // Get the container holding the input fields
    const container = document.getElementById("dynamicInputs");
  
    // Create a new div to wrap the new input and the delete button
    const newDiv = document.createElement("div");
    newDiv.classList.add("input-group", "mb-2");
  
    // Create the new input element
    const newInput = document.createElement("input");
    newInput.type = "text";
    newInput.name = "certificate[]";
    newInput.classList.add("form-control");
  
    // Add spacing after the input
    const space = document.createTextNode(" \u00A0 "); // Adds non-breaking spaces
  
    // Create the delete button (FontAwesome icon)
    const deleteIcon = document.createElement("i");
    deleteIcon.classList.add("fa-solid", "fa-xmark");
    deleteIcon.style.cursor = "pointer";
    deleteIcon.onclick = function () {
        container.removeChild(newDiv); // Remove the parent div
    };
  
    // Append elements to the new div
    newDiv.appendChild(newInput);
    newDiv.appendChild(space);
    newDiv.appendChild(deleteIcon);
  
    // Append the new div to the container
    container.appendChild(newDiv);
  }
  