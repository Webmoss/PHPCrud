// alert("Cusomt JS loaded!");

// EDIT USER MODAL FUNCTIONS
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



// DELETE USER MODAL FUNCTIONS
// This event is fired just before the modal is open.
$("#editUserModal").on('show.bs.modal', function(){
  alert("Before the modal is open!");
});

// This event is fired after the modal is shown.
$("#editUserModal").on('shown.bs.modal', function(){
   alert("After the modal is shown!");
});

// This event is fired just before the modal is hidden.
$("#editUserModal").on('hide.bs.modal', function(){
  alert("before the modal is hidden!");
});

// This event is fired after the modal is closed.
$("#editUserModal").on('hidden.bs.modal', function(){
    alert("after the modal is closed!");
});
