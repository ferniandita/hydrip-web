function updateAuto(id,auto,manual1,manual2,manual3,manual4){
	$.ajax({
		url: "http://localhost/hydrip/APIwebsite/api_update.php",
		method: "post",
		data: {
			id: id,
			auto: auto,
			manual1: manual1,
			manual2: manual2,
			manual3: manual3,
			manual4: manual4
		},
		success: function(data) {
			console.log(data);
		}
	})
}

function updateManual(id,idmanual,statusManual){
	$.ajax({
		url: "http://localhost/hydrip/APIwebsite/api_update.php",
		method: "post",
		data: {
			id: id,
			idmanual: idmanual,
			statusManual: statusManual
		},
		success: function(data) {
			console.log(data);
		}
	})
}

document.getElementById("auto1").addEventListener("click", function(){
	if(this.checked==true){
		updateAuto(1,1,0,0,0,0);
		document.getElementById("manual11").checked=false;
		document.getElementById("manual12").checked=false;
		document.getElementById("manual13").checked=false;
		document.getElementById("manual14").checked=false;
		document.getElementById("manual11").disabled=true;
		document.getElementById("manual12").disabled=true;
		document.getElementById("manual13").disabled=true;
		document.getElementById("manual14").disabled=true;
	} else {
		updateAuto(1,0,0,0,0,0);
		document.getElementById("manual11").checked=false;
		document.getElementById("manual12").checked=false;
		document.getElementById("manual13").checked=false;
		document.getElementById("manual14").checked=false;
		document.getElementById("manual11").disabled=false;
		document.getElementById("manual12").disabled=false;
		document.getElementById("manual13").disabled=false;
		document.getElementById("manual14").disabled=false;
	}
});
document.getElementById("manual11").addEventListener("click",function(){
	if(this.checked==true) {
		updateManual(1,1,1);
	} else {
		updateManual(1,1,0);
	}
});
document.getElementById("manual12").addEventListener("click",function(){
	if(this.checked==true) {
		updateManual(1,2,1);
	} else {
		updateManual(1,2,0);
	}
});
document.getElementById("manual13").addEventListener("click",function(){
	if(this.checked==true) {
		updateManual(1,3,1);
	} else {
		updateManual(1,3,0);
	}
});
document.getElementById("manual14").addEventListener("click",function(){
	if(this.checked==true) {
		updateManual(1,4,1);
	} else {
		updateManual(1,4,0);
	}
});

document.getElementById("auto2").addEventListener("click", function(){
	if(this.checked==true){
		updateAuto(2,1,0,0,0,0);
		document.getElementById("manual21").checked=false;
		document.getElementById("manual22").checked=false;
		document.getElementById("manual23").checked=false;
		document.getElementById("manual24").checked=false;
		document.getElementById("manual21").disabled=true;
		document.getElementById("manual22").disabled=true;
		document.getElementById("manual23").disabled=true;
		document.getElementById("manual24").disabled=true;
	} else {
		updateAuto(2,0,0,0,0,0);
		document.getElementById("manual21").checked=false;
		document.getElementById("manual22").checked=false;
		document.getElementById("manual23").checked=false;
		document.getElementById("manual24").checked=false;
		document.getElementById("manual21").disabled=false;
		document.getElementById("manual22").disabled=false;
		document.getElementById("manual23").disabled=false;
		document.getElementById("manual24").disabled=false;
	}
});
document.getElementById("manual21").addEventListener("click",function(){
	if(this.checked==true) {
		updateManual(2,1,1);
	} else {
		updateManual(2,1,0);
	}
});
document.getElementById("manual22").addEventListener("click",function(){
	if(this.checked==true) {
		updateManual(2,2,1);
	} else {
		updateManual(2,2,0);
	}
});
document.getElementById("manual23").addEventListener("click",function(){
	if(this.checked==true) {
		updateManual(2,3,1);
	} else {
		updateManual(2,3,0);
	}
});
document.getElementById("manual24").addEventListener("click",function(){
	if(this.checked==true) {
		updateManual(2,4,1);
	} else {
		updateManual(2,4,0);
	}
});
document.getElementById("auto3").addEventListener("click", function(){
	if(this.checked==true){
		updateAuto(3,1,0,0,0,0);
		document.getElementById("manual31").checked=false;
		document.getElementById("manual32").checked=false;
		document.getElementById("manual33").checked=false;
		document.getElementById("manual34").checked=false;
		document.getElementById("manual31").disabled=true;
		document.getElementById("manual32").disabled=true;
		document.getElementById("manual33").disabled=true;
		document.getElementById("manual34").disabled=true;
	} else {
		updateAuto(3,0,0,0,0,0);
		document.getElementById("manual31").checked=false;
		document.getElementById("manual32").checked=false;
		document.getElementById("manual33").checked=false;
		document.getElementById("manual34").checked=false;
		document.getElementById("manual31").disabled=false;
		document.getElementById("manual32").disabled=false;
		document.getElementById("manual33").disabled=false;
		document.getElementById("manual34").disabled=false;
	}
});
document.getElementById("manual31").addEventListener("click",function(){
	if(this.checked==true) {
		updateManual(3,1,1);
	} else {
		updateManual(3,1,0);
	}
});
document.getElementById("manual32").addEventListener("click",function(){
	if(this.checked==true) {
		updateManual(3,2,1);
	} else {
		updateManual(3,2,0);
	}
});
document.getElementById("manual33").addEventListener("click",function(){
	if(this.checked==true) {
		updateManual(3,3,1);
	} else {
		updateManual(3,3,0);
	}
});
document.getElementById("manual34").addEventListener("click",function(){
	if(this.checked==true) {
		updateManual(3,4,1);
	} else {
		updateManual(3,4,0);
	}
});