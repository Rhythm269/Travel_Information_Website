const form = document.querySelector('form');

const phoneInput = form.querySelector('input[name="phone"]');

phoneInput.addEventListener("input", () => {
  const phoneNumber = phoneInput.value;
  const charactersLeft = 10 - phoneNumber.length;

  document.getElementById("charLeft").innerHTML = (charactersLeft + " characters left");
});


form.addEventListener('submit', (event) => {
  // Prevent the form from submitting
  event.preventDefault();

  // Get the values from the form
  const name = form.querySelector('input[name="name"]').value;
  const age = form.querySelector('input[name="age"]').value;
  const email = form.querySelector('input[name="email"]').value;
  const phone = form.querySelector('input[name="phone"]').value;

  function isNameValid(name) {
  return name.match(/^[a-zA-Z ]+$/) !== null; 
  // name: This is a variable containing a string (presumably the name input by the user).
  // .match(): This is a JavaScript method used to search for a specified pattern (in this case, a regular expression pattern) within a string. It returns an array of matches if found, or null if no match is found.
  // /^[a-zA-Z]+$/: This is a regular expression pattern enclosed in forward slashes. Let's break it down further:
  // ^: Anchors the match at the beginning of the string.
  // [a-zA-Z ]: Defines a character set that includes all uppercase and lowercase letters of the alphabet (from A to Z) and space.
  // +: Matches one or more occurrences of the preceding pattern (i.e., one or more letters).
  // $: Anchors the match at the end of the string.
  }

  function isPhoneNumberValid(phoneNumber) {
  const regex = /^\d{10}$/; //The following regular expression can be used to check if a phone number contains only numbers and has a length of 10
  //The `\d` character matches any digit from 0 to 9. The `{10}` quantifier matches the preceding character 10 times. 
  return regex.test(phoneNumber);
  }

  // Check if the values are of the correct type
  if (name.trim() === '') { //the `trim()` method removes the whitespace from the beginning and end of the name string
    // The !== operator is used in JavaScript to check if two operands are not equal in value or type. It is different from the
    //  != operator, which only checks if the operands are not equal in value.
    alert('Name must be a non-empty string');
    return;
  }

  if (!isNameValid(name)) { 
    
    alert('Enter a valid name with no numbers and special characters');
    return;
  }

  // Parse the age as an integer and check if it's a positive number
  const parsedAge = parseInt(age);

  if (parseInt == '') {
    alert('Age must be a non-empty string');
    return;
  }

  if (isNaN(parsedAge) || parsedAge <= 0) {
    // The parseInt() function attempts to convert the age string into a number, and the isNaN() function checks to see if the 
    // result is a valid number. If the result of the parseInt() function is NaN (not a number), or if the number is less than 
    // or equal to 0, then the code will return false. Otherwise, the code will return true.
    alert('Age must be a positive number');
    return;
  }

  
  if (email.trim() === '') {
    alert('Email must be a non-empty string');
    return;
  }


  if (!email.includes('@')) {
    alert('Email must be a valid email address');
    return;
  }

  if (phone == '') { 
    // The !== operator is used in JavaScript to check if two operands are not equal in value or type. It is different from the
    //  != operator, which only checks if the operands are not equal in value.
    alert('Phone must be a non-empty string');
    return;
  }

  if(!isPhoneNumberValid(phone)){
    alert("Please enter your phone number correctly");
  }

console.log('Before form.submit()');
console.log('name:', name);
console.log('age:', age);
console.log('email:', email);
console.log('phone:', phone);

  // Submit the form
  form.submit();
});
