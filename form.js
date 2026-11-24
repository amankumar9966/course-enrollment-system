// Welcome Message

const fname = document.getElementById("firstname");

fname.addEventListener("input", function () {

    document.getElementById("welcomeMsg").innerText =
        "Welcome " + fname.value;

});

// auto Capitalize

fname.addEventListener("input", function(){

    let value = fname.value;

    if(value.length > 0){

        fname.value =
        value.charAt(0).toUpperCase() +
        value.slice(1);

    }

});



// Phone Validation

const phone = document.getElementById("phone");

const phoneError =
    document.getElementById("phoneError");

phone.addEventListener("input", function () {

    if (phone.value.length > 10) {

        phone.value =
            phone.value.slice(0, 10);

    }

    if (phone.value.length < 10) {

        phoneError.innerText =
            "Phone number must be 10 digits";

        phoneError.style.color = "red";

    }
    else {

        phoneError.innerText =
            "✓ Valid phone number";

        phoneError.style.color = "green";

    }

});


// Address Character Counter

const address =
    document.getElementById("address");

const counter =
    document.getElementById("counter");

address.addEventListener("input", function () {

    counter.innerText =
        address.value.length + " / 200";

});


// Form Submit

// document
//     .getElementById("enrollmentForm")
//     .addEventListener("submit", function (e) {

//         e.preventDefault();

//         alert("Enrollment Submitted Successfully!");

//     });