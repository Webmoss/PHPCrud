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
    console.log("percentComplete", percentComplete);
    console.log("xEvent", xEvent);
  } else {
    console.log("Unable to compute progress information since the total size is unknown", xEvent);
  }
}
function transferComplete(xEvent) {
  console.log("The transfer is complete.", xEvent);
}
function transferFailed(xEvent) {
  console.log("An error occurred while transferring the file.", xEvent);
}
function transferCanceled(xEvent) {
  console.log("The transfer has been canceled by the user.", xEvent);
}

function createUser (user) {
  console.log("Create User: ", user);
  // xhttp.open("POST", "delete_user.php", true);
  // xhttp.send(); 
}

function editUser (user) {
  console.log("Edit User: ", user);
  // xhttp.open("POST", "edit_user.php", true);
  // xhttp.send(); 
}

function deleteUser (user) {
  console.log("Delete User: ", user);
  // xhttp.open("POST", "delete_user.php", true);
  // xhttp.send(); 
}




// CREATE USER & MODAL FUNCTIONS

// This event is fired just before the modal is open.
$("#createUserModal").on('show.bs.modal', function(){
  alert("Before the modal is open!");

  // TODO: CLEAR ANY FIELDS
  // TODO: LOAD USER INFO INTO FORM FIELDS
  // TODO: HIDE VALIDATION MESSAGES IF NEEDED
});

// This event is fired after the modal is shown.
$("#createUserModal").on('shown.bs.modal', function(){
   alert("After the modal is shown!");

  // Load button event listeners
  var someString = 'Data';
  var createUserButton = window.document.getElementById('create-user-submit');
  createUserButton.addEventListener('click', function (event) {
    event.preventDefault();
    console.log("This:", this);       // Expected Value: 'Data'
    alert("Create User Submitted");  
  }.bind(someString));
});

// This event is fired just before the modal is hidden.
$("#createUserModal").on('hide.bs.modal', function(){
  alert("before the modal is hidden!");
  // TODO: CLEAR FORM FIELDS  
  // TODO: UPDATE TABLE RESULTS
});

// This event is fired after the modal is closed.
$("#createUserModal").on('hidden.bs.modal', function(){
  alert("after the modal is closed!");
  // TODO: CLEAR FORM FIELDS  
});


// EDIT USER & MODAL FUNCTIONS

// This event is fired just before the modal is open.
$("#editUserModal").on('show.bs.modal', function(){
  alert("Before the modal is open!");

  // TODO: CLEAR ANY FIELDS
  // TODO: LOAD USER INFO INTO FORM FIELDS
  // TODO: HIDE VALIDATION MESSAGES IF NEEDED
});

// This event is fired after the modal is shown.
$("#editUserModal").on('shown.bs.modal', function(){
  
  alert("After the modal is shown!");
  // Load button event listeners
  var someString = 'Data';
  var editUserButton = window.document.getElementById('edit-user-submit');
  editUserButton.addEventListener('click', function (event) {
    event.preventDefault();
    console.log("This:", this);       // Expected Value: 'Data'
    alert("Edit User Submitted");  
  }.bind(someString));

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
  // TODO: CLEAR FORM FIELDS  
});


// DELETE USER & MODAL FUNCTIONS

// This event is fired just before the modal is open.
$("#deleteUserModal").on('show.bs.modal', function(){
  alert("Before the Delete modal is open!");
});

// This event is fired after the modal is shown.
$("#deleteUserModal").on('shown.bs.modal', function(){

  alert("After the modal is shown!");

  // Load button event listeners
  var someString = 'Data';
  var deleteUserButton = window.document.getElementById('delete-user-submit');
  deleteUserButton.addEventListener('click', function (event) {
    event.preventDefault();
    console.log("This:", this);       // Expected Value: 'Data'
    alert("Delete User Submitted");  
  }.bind(someString));

});

// This event is fired just before the modal is hidden.
$("#deleteUserModal").on('hide.bs.modal', function(){
  alert("before the modal is hidden!");
});

// This event is fired after the modal is closed.
$("#deleteUserModal").on('hidden.bs.modal', function(){ 
  alert("after the modal is closed!");
  // TODO: CLEAR FORM FIELDS  
});


