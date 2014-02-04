/* ENR Table Changing JS
 * Nolan Gildersleve 4 Feb 2014
 */

jQuery(document).ready(function() {
	jQuery("tr:even").addClass("oddTrRow");
});

/*$( "table td:nth-child(n+3)" ).append( "<span> - JQuery Works</span>" );*/
$( "table td:nth-child(n+4)" ).remove();
