$(document).ready( function () { 
  $('#table').DataTable();
  $('#validate_form').parsley();
  $('.delete_record').on('click', onClickDeleteRecord);
  $('.update_record').on('click', onClickUpdateStatus);

  function onClickDeleteRecord() {
    const urlDelete = this.getAttribute('delete-data');
    
    Swal.fire({
      title: "<span class='text-3xl'>Do you want delete this record?</span>",
      text: "It will be removed from the database. Changes cannot be undone.",
      icon: 'error',
      showCancelButton: true,
      confirmButtonColor: '#c53030',
      cancelButtonText: 'Cancel',
      confirmButtonText: 'DELETE'
    }).then((result) => {
      if (result.value) {
        location.href = urlDelete;
      }
    });
  }

  function onClickUpdateStatus() {
    const urlUpdateStatus = this.getAttribute('update-data');
    
    Swal.fire({
      title: "<span class='text-3xl'>Do you want update this status?</span>",
      text: "The book to update will be available again to be requested.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#22543d',
      cancelButtonText: 'Cancel',
      confirmButtonText: 'AVAILABLE'
    }).then((result) => {
      if (result.value) {
        location.href = urlUpdateStatus;
      }
    });
  }
});