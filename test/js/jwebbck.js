"use strict";
var elements = document.querySelectorAll("#components > div");

// function matchExp(string){
// 	console.log(string);

// 	var myRegExps = ["/\[Ff]orm\W/", "/\[Ff]ragment\W/", "/\[Cc]ontent\W/"];

// 	for (var i = 0; i < Things.length; i++) {
// 		Things[i]
// 	};

// 	myRegExps.forEach(function(reg, idx) {
// 		if (string.match(reg)) { return idx; }
// 		else { console.log("error"); }
// 	});
// };

// fourcol


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

function getCF(fragCF){
		console.log(fragCF);

};

// function createBackup() {

// };

// console.log("el matchExp regresa ", matchExp("Custom Fragment Options (Developer Only.)"));

Array.prototype.forEach.call(elements, function(fragment){
	var blckhead = fragment.querySelector(".subblockhead .blockgrouptitle a").innerHTML;

	if (matchExp(blckhead) === 0) {

		getCF(fragment);
	}

	if (matchExp(blckhead) === 1) {
		console.log("Fragment");
	}

	if (matchExp(blckhead) === 2) {
		console.log("Content");
	}

	if (matchExp(blckhead) === 3) {
		console.log("Search");
	}
});



// Custom Fragment Options (Developer Only.)
// Contact Form Options (Developer Only)
// Custom Content Options (Developer Only)
// Site Search Options (Developer Only)