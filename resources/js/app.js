require('./bootstrap');
const $ = require('jquery')
const parsley = require('parsleyjs')
const dt      = require( 'datatables.net' );
const buttons = require( 'datatables.net-buttons' )
require( 'datatables.net-responsive' );
require( 'datatables.net-responsive-dt')
const Swal    = require('sweetalert2')

$(document).ready( function () { 
  $('#table').DataTable({
    responsive: true
  });
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
      confirmButtonText: 'SET AVAILABLE'
    }).then((result) => {
      if (result.value) {
        location.href = urlUpdateStatus;
      }
    });
  }
});


