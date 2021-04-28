"use strict"


function f1(){
	let data= document.getElementById('name').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Null Submission ';		
	}
	else if(data.length <3){
		document.getElementById('head').innerHTML = 'Length is too Short';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('head').innerHTML = 'error';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '.' || data == '-'){
		document.getElementById('head').innerHTML = data;
     }
    
    else{
		document.getElementById('head').innerHTML = 'error';
	}
	

}
function f11(){
	let data= document.getElementById('des').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Null Submission ';		
	}
	else if(data.length <3){
		document.getElementById('head').innerHTML = 'Length is too Short';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('head').innerHTML = 'error';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '.' || data == '-'){
		document.getElementById('head').innerHTML = data;
     }
    
    else{
		document.getElementById('head').innerHTML = 'error';
	}
	

}


function f2(){
	let data= document.getElementById('email').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Null Submission ';		
	}
	else if(data.length <3 ){
		document.getElementById('head').innerHTML = 'Invalid Email';	
	}
	else if( data.includes("@gmail.com")){
		document.getElementById('head').innerHTML = data;
     }
      else{
		document.getElementById('head').innerHTML = 'Invalide Email!';
	}

}

function f3(){

 let m = document.getElementById('m');
 let f = document.getElementById('f');
 let o = document.getElementById('o');

     if(m.checked ==true ){
		document.getElementById('head').innerHTML = m.value;		
	}
    else if(f.checked ==true){
		document.getElementById('head').innerHTML = f.value;		
	}
	
     else{
		document.getElementById('head').innerHTML = o.value;
	}

}

function f4(){

 let data= document.getElementById('dob').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Null Submission ';		
	}
	
      else{
		document.getElementById('head').innerHTML = data;
	}

}


function f5(){

 let s = document.getElementById('s');
 let h= document.getElementById('h');
 let b = document.getElementById('b');


 if (s.checked==true) {
 	document.getElementById('6').innerHTML = s.value;		
 }
 if(h.checked==true){
 	document.getElementById('7').innerHTML = h.value;
 }
 if(b.checked==true){
 	document.getElementById('8').innerHTML = b.value;
 }
 else{
 	return false;
 }

}

function f6(){

let data= document.getElementById('id').value;

if (data == '' ) {
	document.getElementById('head').innerHTML ='UserId cannot be empty';
}
else if( data.length == 10){
		document.getElementById('head').innerHTML = data;
     }

else {
	document.getElementById('head').innerHTML = 'Invalid ID !';
}
}

function f7(){
	let data= document.getElementById('pass').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Null Submission';		
	}
	else if(data.length != 5){
		document.getElementById('head').innerHTML = 'Length is too Short';	
	}

	else if(data >='A' && data <='Z' || data>='a' && data <='z' || data == '.' || data == '-'){
		document.getElementById('head').innerHTML = 'Valid';
     }
    
    else{
		document.getElementById('head').innerHTML = 'error';
	}
	

}

function f8(){

	let data= document.getElementById('tel').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Null Submission ';		
	}
	else if( data.includes("01") && data.length == 11){
		document.getElementById('head').innerHTML = data;
     }
    
    else{
		document.getElementById('head').innerHTML = 'Invalid Telephone Number!';
	}
	

}

function f9(){

	let data= document.getElementById('address').value;

	if(data == ''){
		document.getElementById('head').innerHTML = 'Null Submission ';		
	}
	else if(data.length <5){
		document.getElementById('head').innerHTML = 'Length is too Short';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('head').innerHTML = 'error';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '.' || data == '-'){
		document.getElementById('head').innerHTML = data;
     }
    
    else{
		document.getElementById('head').innerHTML = 'error';
	}
	

}

function f10(){

 let m = document.getElementById('m');
 let n = document.getElementById('n');

     if(m.checked ==true ){
		document.getElementById('head').innerHTML = m.value;		
	}
    else{
		document.getElementById('head').innerHTML = n.value;		
	}
	
}