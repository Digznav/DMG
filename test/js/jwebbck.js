javascript:var s = document.getElementsByTagName('select'); var cs = s[1]; var l = cs.options.length; var sf = document.createElement('div'); var sfs = sf.style;sfs.position = 'absolute'; sfs.top='0'; sfs.left='0'; sfs.width='200px'; sfs.height='25px';sfs.background='#222'; sfs.border='3px solid #9b2323'; sfs.padding='10px'; var inp = document.createElement('input');sf.appendChild(inp); document.body.appendChild(sf);inp.size='30'; inp.type = 'text'; inp.name='query'; inp.style.width='200px'; inp.focus(); inp.addEventListener('keyup', function(e) { var q = e.target.value; if (q == '' || q == ' ') { return; }for (var i=0; i<l;i++) { if (cs.options[i].text.match(q)) { cs.selectedIndex = i; break; } } }, false);



'use strict';

var elements = document.querySelectorAll('#components > div');

function matchExp(string){
  var expresions = new Array(
	/Form/g,
	/Fragment/g,
	/Content/g,
	/Search/g
  );

  return expresions.findIndex(function(regexp){
	return regexp.test(string);
  });
}

function ContactForm() {
	this.type = 'Contact Form';
	this.uniqueID = false;
	this.parentBlock = false;
	this.className = false;
	this.placement = false;
	this.title = false;
	this.noShowTitle = false;
	this.linkedTo = false;
	this.noPrefill = false;
	this.formHandler = false;
	this.returnURL = false;
	this.displayFormdesc = false;
	this.formdesc = false;
	this.emailSubject = false;
	this.emailText = false;

}

function checkifEmpty(el) {
	var noEmpty = false;
	if (el.type == 'text' && el.value !== '') {
		noEmpty = el.value;
	}
	else if (el.type == 'checkbox' && el.checked) {
		noEmpty = el.checked;
	}

	return noEmpty;
}

function getCF(fragCF){
	var allInputs = fragCF.querySelectorAll('.subblockform input[id]'),
		 allSelect = fragCF.querySelectorAll('.subblockform select'),
		 CFfrag = new ContactForm();
		 // savedata = [];

	// Array.prototype.forEach.call(allInputs, function(fldInput){
	// 	savedata.push(fldInput.value);
		console.log(allSelect);
	// });

	CFfrag.uniqueID = checkifEmpty(allInputs[0]);
	CFfrag.parentBlock = checkifEmpty(allInputs[1]);
	CFfrag.className = checkifEmpty(allInputs[2]);
	CFfrag.placement = allSelect[0].value;
	CFfrag.title = checkifEmpty(allInputs[3]);
	CFfrag.className = checkifEmpty(allInputs[3]);
	CFfrag.noShowTitle = checkifEmpty(allInputs[4]);
	CFfrag.linkedTo = checkifEmpty(allInputs[5]);
	// console.log( CFfrag.placement );
	console.log( CFfrag );
}

// function createBackup() {

// };

Array.prototype.forEach.call(elements, function(fragment){
	var blckhead = fragment.querySelector('.subblockhead .blockgrouptitle a').innerHTML;

	if (matchExp(blckhead) === 0) {
		getCF(fragment);
	}

	if (matchExp(blckhead) === 1) {
		// console.log('Fragment');
	}

	if (matchExp(blckhead) === 2) {
		// console.log('Content');
	}

	if (matchExp(blckhead) === 3) {
		// console.log('Search');
	}
});



// Custom Fragment Options (Developer Only.)
// Contact Form Options (Developer Only)
// Custom Content Options (Developer Only)
// Site Search Options (Developer Only)