// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTableX').DataTable({
  	//something something here
    dom: 'Bfrtip',
    buttons: [
        'excel', 'pdf', 'print'
    ]
  });
});


