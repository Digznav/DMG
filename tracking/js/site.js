'use strict';

jQuery(document).ready(function() {

	jQuery.getJSON( '/conversion.json', function(data) {
		var items = [];

		jQuery.each( data, function( key, val ) {
			var columnstype = val.column;
			switch(columnstype) {
				case '1':
					columnstype = 'one column';
					break;
				case '2':
					columnstype = 'two columns';
					break;
				case '3':
					columnstype = 'three columns';
					break;
				default:
				columnstype = 'undefined columns';
			}

			var listclass = columnstype.replace(' ', '-'),
				status = (val.status) ? 'cnv-done' : 'cnv-progress';


			items.push('<li class="' + key + ' ' + listclass + ' ' + status + '"><span><strong>Ticket:</strong> <a href="https://crm.justia.com/case/' + val.ticket + '" target="_blank">' + val.ticket + '</a></span><span><strong>Client:</strong> <a href="' + val.url + '" target="_blank">' + val.client + '</a></span><span><strong>URL:</strong> <a href="' + val.url + '" target="_blank">' + val.url + '</a></span><span><strong>Designer:</strong> ' + val.designer + '</span><span class=columns_type><strong>Columns:</strong> ' + columnstype + '</span><span class="tempname"><strong>Template:</strong> <a href="http://' + val.template + '.justia.net/" target="_blank">' + val.template + '</a></span></li>');
		});

		jQuery('.wrapper').html( items.join('') );

	});
});