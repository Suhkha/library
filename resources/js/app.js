require('./bootstrap');
const $ = require('jquery')
const parsley = require('parsleyjs')
const dt      = require( 'datatables.net' );
const buttons = require( 'datatables.net-buttons' )

$(document).ready( function () { 
  $('#table').DataTable();
  $('#validate_form').parsley();
});