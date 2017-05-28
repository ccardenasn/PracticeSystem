var condicion="";
var day = "";
var block = "";
var tableArr = [];
var mainAction = "";

function mostrar() {
	div = document.getElementById('form_div');
	div.style.display = '';
}

function showControl(control) {
	div = document.getElementById(control);
	div.style.display = '';
}

function hideControl(control) {
	div = document.getElementById(control);
	div.style.display = 'none';
}

function cerrar(){
	div = document.getElementById('form_div');
	div.style.display = 'none';
}

function obtener(){
	$.ajax({
		type: 'POST',
		url: 'Timetable-V2/saveTable.php',
		data: {horario:tableArr,action:mainAction,rut:rut},
        //success: location.href=redirectPage,
	});
}

function loadUpdate(){
	mainAction = "Update";
}

function loadCreate(){
	mainAction = "Create";
}

function loadState(){
	changeState(0,"btn_a_row_a","btn_xa_row_a");
	changeState(1,"btn_b_row_a","btn_xb_row_a");
	changeState(2,"btn_c_row_a","btn_xc_row_a");
	changeState(3,"btn_d_row_a","btn_xd_row_a");
	changeState(4,"btn_e_row_a","btn_xe_row_a");
	changeState(5,"btn_a_row_b","btn_xa_row_b");
	changeState(6,"btn_b_row_b","btn_xb_row_b");
	changeState(7,"btn_c_row_b","btn_xc_row_b");
	changeState(8,"btn_d_row_b","btn_xd_row_b");
	changeState(9,"btn_e_row_b","btn_xe_row_b");
	changeState(10,"btn_a_row_c","btn_xa_row_c");
	changeState(11,"btn_b_row_c","btn_xb_row_c");
	changeState(12,"btn_c_row_c","btn_xc_row_c");
	changeState(13,"btn_d_row_c","btn_xd_row_c");
	changeState(14,"btn_e_row_c","btn_xe_row_c");
	changeState(15,"btn_a_row_d","btn_xa_row_d");
	changeState(16,"btn_b_row_d","btn_xb_row_d");
	changeState(17,"btn_c_row_d","btn_xc_row_d");
	changeState(18,"btn_d_row_d","btn_xd_row_d");
	changeState(19,"btn_e_row_d","btn_xe_row_d");
	changeState(20,"btn_a_row_e","btn_xa_row_e");
	changeState(21,"btn_b_row_e","btn_xb_row_e");
	changeState(22,"btn_c_row_e","btn_xc_row_e");
	changeState(23,"btn_d_row_e","btn_xd_row_e");
	changeState(24,"btn_e_row_e","btn_xe_row_e");
	changeState(25,"btn_a_row_f","btn_xa_row_f");
	changeState(26,"btn_b_row_f","btn_xb_row_f");
	changeState(27,"btn_c_row_f","btn_xc_row_f");
	changeState(28,"btn_d_row_f","btn_xd_row_f");
	changeState(29,"btn_e_row_f","btn_xe_row_f");
}


function changeState(index,buttonAdd,buttonDel){
	var blockSubject = mainTimeTableArr[index];
	if(blockSubject == "Asignar"){
		showButton(buttonAdd);
		hiddenButton(buttonDel);
	}else{
		hiddenButton(buttonAdd);
		showButton(buttonDel);
	}
}

function loadTimeTableIndex(){
	location.href=redirectPage;
}

function loadSuccessUpdatePage(){
	location.href=successPage;
}

function utf8_encode (unicodeString) {
	 if (typeof unicodeString != 'string') throw new TypeError('parameter ‘unicodeString’ is not a string');
    const utf8String = unicodeString.replace(
        /[\u0080-\u07ff]/g,  // U+0080 - U+07FF => 2 bytes 110yyyyy, 10zzzzzz
        function(c) {
            var cc = c.charCodeAt(0);
            return String.fromCharCode(0xc0 | cc>>6, 0x80 | cc&0x3f); }
    ).replace(
        /[\u0800-\uffff]/g,  // U+0800 - U+FFFF => 3 bytes 1110xxxx, 10yyyyyy, 10zzzzzz
        function(c) {
            var cc = c.charCodeAt(0);
            return String.fromCharCode(0xe0 | cc>>12, 0x80 | cc>>6&0x3F, 0x80 | cc&0x3f); }
    );
    return utf8String;

}


function utf8_decode (strData) { // eslint-disable-line camelcase
  //  discuss at: http://locutus.io/php/utf8_decode/
  // original by: Webtoolkit.info (http://www.webtoolkit.info/)
  //    input by: Aman Gupta
  //    input by: Brett Zamir (http://brett-zamir.me)
  // improved by: Kevin van Zonneveld (http://kvz.io)
  // improved by: Norman "zEh" Fuchs
  // bugfixed by: hitwork
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // bugfixed by: Kevin van Zonneveld (http://kvz.io)
  // bugfixed by: kirilloid
  // bugfixed by: w35l3y (http://www.wesley.eti.br)
  //   example 1: utf8_decode('Kevin van Zonneveld')
  //   returns 1: 'Kevin van Zonneveld'

  var tmpArr = []
  var i = 0
  var c1 = 0
  var seqlen = 0

  strData += ''

  while (i < strData.length) {
    c1 = strData.charCodeAt(i) & 0xFF
    seqlen = 0

    // http://en.wikipedia.org/wiki/UTF-8#Codepage_layout
    if (c1 <= 0xBF) {
      c1 = (c1 & 0x7F)
      seqlen = 1
    } else if (c1 <= 0xDF) {
      c1 = (c1 & 0x1F)
      seqlen = 2
    } else if (c1 <= 0xEF) {
      c1 = (c1 & 0x0F)
      seqlen = 3
    } else {
      c1 = (c1 & 0x07)
      seqlen = 4
    }

    for (var ai = 1; ai < seqlen; ++ai) {
      c1 = ((c1 << 0x06) | (strData.charCodeAt(ai + i) & 0x3F))
    }

    if (seqlen === 4) {
      c1 -= 0x10000
      tmpArr.push(String.fromCharCode(0xD800 | ((c1 >> 10) & 0x3FF)))
      tmpArr.push(String.fromCharCode(0xDC00 | (c1 & 0x3FF)))
    } else {
      tmpArr.push(String.fromCharCode(c1))
    }

    i += seqlen
  }

  return tmpArr.join('')
}