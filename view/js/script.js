
const form = document.querySelector('form');
form.addEventListener('submit' , validate);

function validate(event){
	const firstname = document.getElementById('firstname');
	const lastname = document.getElementById('lastname');
	const codemali = document.getElementById('codemali');
	const phone = document.getElementById('phone');
	const addres = document.getElementById('addres');
	const error1 = document.getElementById('error1');
	const error2 = document.getElementById('error2');
	const error3 = document.getElementById('error3');
	const error4 = document.getElementById('error4');
	const error5 = document.getElementById('error5');
	error1.textContent = '';
	error2.textContent = '';
	error3.textContent = '';
	error4.textContent = '';
	error5.textContent = '';
	if(firstname.value.length < 3 || firstname.value.length > 15){
		error1.textContent = 'لطفا نام خود را وارد کنید';
		event.preventDefault();
	}
	if(lastname.value.length < 3 || lastname.value.length > 20){
		error2.textContent ='لطفا نام خانوادگی خود را وارد کنید';
		event.preventDefault();
	}
  if(codemali.value.length < 10 || codemali.value.length > 10){
		error3.textContent = 'لطفا کد ملی خود را وارد کنید';
		event.preventDefault();
	}
	if(phone.value.length < 3 || phone.value.length > 20){
		error4.textContent ='لطفا شماره تلفن خود را وارد کنید';
		event.preventDefault();
	}
  if(addres.value.length < 3 || addres.value.length > 15){
		error5.textContent = 'لطفا آدرس خود را وارد کنید';
		event.preventDefault();
	}
}