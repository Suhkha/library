require('./bootstrap');
const $ = require('jquery')
const parsley = require('parsleyjs')
const dt      = require( 'datatables.net' );
const buttons = require( 'datatables.net-buttons' )
const Swal    = require('sweetalert2')

$(document).ready( function () { 
  $('#table').DataTable();
  $('#validate_form').parsley();
  $('.delete_record').on('click', onClickDeleteRecord);

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
});

