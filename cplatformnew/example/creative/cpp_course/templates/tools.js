/* tools.js
*	The common utilities for EBM system
*	jQuery needed
*/

// E-mail validation regular expression pattern
var regExpEmail = /^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3}$/;

// Password validation regular expression pattern
var regExpPass = /^[\S\s]{6,12}$/;

// Telephone validation regular expression pattern
var regExpTel = /^[\(]?\d{2,3}[\)-]\d{3,4}[\-]?\d{4}$/;

// Telephone extension validation regular expression pattern
var regExpExt = /^\d*$/;

// Cell phone validation regular expression pattern
var regExpCellphone = /^\d{4}[\-]?\d{3}[\-]?\d{3}$/;

// Date & time validation regular expression pattern
var regExpDateTime = /^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/;

// Date validation regular expression pattern
var regExpDate = /^\d{4}-\d{2}-\d{2}$/;

// Number validation regular expression pattern
var regExpNum = /^\d+$/;

// Hyperlink validation regular expression pattern
var regExpLink = /^http:\/\/\S+[\/]*\S*/;

// SQL Injection filter regular expression pattern
var regExpSql = /\b(exec(ute)?|select|update|insert|delete|drop|create)\b|[;']|(-{2})|(\/\*.*\*\/)/i;

//§PÂ_¬O§_ 5­Ó¼Æ¦r 
var deg = /^\d{5}$/;

// Show pop-up block
/*	PARAMETERS:
*		selector	the coordinate reference, jQuery selector
*		w			block width
*		h			block height
*		contents	the contents showed in the block
*/
function showPopUp(selector, w, h, contents) {
	var offset = $(selector).offset();
	
	var t = offset.top + 20;
	var l = offset.left;
	
	$("#pop_up_block").css( {
		top: (t + "px"),
		left: (l + "px"),
		width: (w + "px"),
		height: (h + "px"),
		display: "block"
	} );
	$("#pop_up_block > div").css( {
		width: ((w - 20) + "px"),
		height: ((h - 20) + "px")
	} );
	$content = $("#pop_up_block").children().children().last();
	$content.css( {
		width: ((w - 20) + "px"),
		height: ((h - 60) + "px")
	} );
	$content.html(contents);
}

// Show pop-up block: advance options
/*	PARAMETERS:
*		selector	the coordinate reference, jQuery selector
*		width		block width
*		height		block height
*		offsetX		the x offset related to selector
*		offsetY		the y offset related to selector
*		contents	the contents showed in the block
*/
function showPopUpAdv(selector, width, height, offsetX, offsetY, contents) {
	var offsetTarget = $(selector).offset();
	
	var top = offsetTarget.top + offsetY;
	var left = offsetTarget.left + offsetX;
	
	$("#pop_up_block").css( {
		top: (top + "px"),
		left: (left + "px"),
		width: (width + "px"),
		height: (height + "px"),
		display: "block"
	} );
	$("#pop_up_block > div").css( {
		width: ((width - 20) + "px"),
		height: ((height - 20) + "px")
	} );
	$content = $("#pop_up_block").children().children().last();
	$content.css( {
		width: ((width - 20) + "px"),
		height: ((height - 60) + "px")
	} );
	$content.html(contents);
}

// Close pop-up block
function closePopUp() {
	$("#pop_up_block").css("display", "none");
}

function showToolHint(t, l, w, h, content) {
	$("#hint_block").html(content);
	$("#hint_block").css( {
		top: t + "px",
		left: l + "px",
		width: w + "px",
		height: h + "px",
		display: "block"
	} );
}

function hideToolHint() {
	$("#hint_block").css("display", "none");
}

// SQL Injection filter
function sqlInjFilter(input) {
	return input.replace(regExpSql, "");
}

// Exam all input with text and textarea field
function examAndReplaceSqlAll() {
	var i;
	var fields = $("input[type='text'],input[type='password'],textarea");
	for ( i = 0; i < fields.length; i++ ) {
		var temp = $(fields[i]).val();
		$(fields[i]).val(sqlInjFilter(temp));
	}
}

// Scroll to the top of the page
function scrollToTop() {
	$("body").animate(
		{
			scrollTop: $("#header").offset().top
		},
		2000
	);
}