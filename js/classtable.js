window.onload=viewTable();

function changeTable() {
	tbody=document.getElementById('classtable');
	inputs=tbody.getElementsByTagName('input');
	fommer_classnames=tbody.getElementsByClassName('fommer_classname');
	for (var i = inputs.length - 1; i >= 0; i--) {
		inputs[i].style.display="inline";
		fommer_classnames[i].style.display="none";
	}
}

function viewTable() {
	tbody=document.getElementById('classtable');
	inputs=tbody.getElementsByTagName('input');
	fommer_classnames=tbody.getElementsByClassName('fommer_classname');
	for (var i = inputs.length - 1; i >= 0; i--) {
		inputs[i].style.display="none";
		fommer_classnames[i].style.display="inline";
	}
}
