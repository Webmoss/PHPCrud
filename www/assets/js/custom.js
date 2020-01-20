// alert("Custom JS loaded!");

// Test for modern browsers or 
if (window.XMLHttpRequest) {
  var xhttp = new XMLHttpRequest();
} else {
  // For old IE browsers
  var xhttp = new ActiveXObject("Microsoft.XMLHTTP");
} 

// Add event Listeners for Progress , Load, Error and Abort
xhttp.addEventListener("progress", updateProgress);
xhttp.addEventListener("load", transferComplete);
xhttp.addEventListener("error", transferFailed);
xhttp.addEventListener("abort", transferCanceled);

// Progress on transfers from the server to the client (downloads)
function updateProgress (xEvent) {
  if (xEvent.lengthComputable) {
    var percentComplete = xEvent.loaded / xEvent.total * 100;
    // ...
  } else {
    // Unable to compute progress information since the total size is unknown
  }
}
function transferComplete(xEvent) {
  console.log("The transfer is complete.");
}
function transferFailed(xEvent) {
  console.log("An error occurred while transferring the file.");
}
function transferCanceled(xEvent) {
  console.log("The transfer has been canceled by the user.");
}


$("#edit-user-submit").on('click', function(event){
  event.preventDefault();
  alert("Edit User Submitted");  
});



// EDIT USER MODAL FUNCTIONS
// This event is fired just before the modal is open.
$("#editUserModal").on('show.bs.modal', function(){
  alert("Before the modal is open!");

  

  // TODO: CLEAR ANY FIELDS
  // TODO: LOAD USER INFO INTO FORM FIELDS
  // TODO: HIDE VALIDATION MESSAGES IF NEEDED
  
  // Add event listener to the Edit Button, uses id which is unique
  var x = document.getElementById("edit-user-submit");
  // For all modern browsers, except IE 8 and earlier
  if (x.addEventListener) {                    
    x.addEventListener("click", editUser);
  } else if (x.attachEvent) {               // For IE 8 and earlier versions
    x.attachEvent("onclick", editUser);
  }
  
});




// This event is fired after the modal is shown.
$("#editUserModal").on('shown.bs.modal', function(){
   alert("After the modal is shown!");
});

// This event is fired just before the modal is hidden.
$("#editUserModal").on('hide.bs.modal', function(){
  alert("before the modal is hidden!");
  // TODO: CLEAR FORM FIELDS  
  // TODO: UPDATE TABLE RESULTS
});

// This event is fired after the modal is closed.
$("#editUserModal").on('hidden.bs.modal', function(){
  
  alert("after the modal is closed!");
  // Remove my Event Listeners
  var x = document.getElementById("edit-user-submit");
  // For all modern browsers, except IE 8 and earlier
  if (x.addEventListener) {                    
    x.removeEventListener("click", editUser);
  } else if (x.attachEvent) {                  // For IE 8 and earlier versions
    x.attachEvent("onclick", editUser);
  }

  // TODO: CLEAR FORM FIELDS  
});


function editUser (user) {
  console.log("Edit User: ", user);
  // xhttp.open("POST", "edit_user.php", true);

  // ...
}



// DELETE USER MODAL FUNCTIONS

// This event is fired just before the modal is open.
$("#deleteUserModal").on('show.bs.modal', function(){
  alert("Before the Delete modal is open!");

  // Add event listener to the form, uses id which is unique
  var x = document.getElementById("delete-user-submit");
  // For all modern browsers, except IE 8 and earlier
  if (x.addEventListener) {                    
    x.addEventListener("click", deleteUser);
  } else if (x.attachEvent) {     // For IE 8 and earlier versions
    x.attachEvent("onclick", deleteUser);
  }
});

// This event is fired after the modal is shown.
// $("#deleteUserModal").on('shown.bs.modal', function(){
//    alert("After the modal is shown!");
// });

// This event is fired just before the modal is hidden.
// $("#deleteUserModal").on('hide.bs.modal', function(){
//   alert("before the modal is hidden!");
// });

// This event is fired after the modal is closed.
$("#deleteUserModal").on('hidden.bs.modal', function(){
    
  alert("after the modal is closed!");
  
  // Remove my Event Listeners
  var x = document.getElementById("delete-user-submit");
  // For all modern browsers, except IE 8 and earlier
  if (x.removeEventListener) {                    
    x.removeEventListener("click", deleteUser);
  }

  // TODO: CLEAR FORM FIELDS  
});


function deleteUser (user) {
  console.log("Delete User: ", user);
  // xhttp.open("POST", "delete_user.php", true);

  // ...
}
