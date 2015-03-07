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