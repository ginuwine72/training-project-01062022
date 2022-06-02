

var minDate, maxDate;
 
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date( data[4] );
 
        if (
            ( min === null && max === null ) ||
            ( min === null && date <= max ) ||
            ( min <= date   && max === null ) ||
            ( min <= date   && date <= max )
        ) {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
    minDate = new DateTime($('#min'), {
        format: 'yy-mm-dd'
    });
    maxDate = new DateTime($('#max'), {
        format: 'yy-mm-dd'
    });
 
    var table = $('#dataTable_employee').DataTable();
 
    $('#min, #max').on('change', function () {
        table.draw();
    });
});