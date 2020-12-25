$(document).ready(function () {
    // Add smooth scrolling to page-body
    $(".back-to-top").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});

function validateData() {
    var flag1 = checkName(document.getElementById("name"), document.getElementById("validateName"))
    var flag2 = checkEmail(document.getElementById("email"), document.getElementById("validateEmail"))
    var flag3 = checkSubject(document.getElementById("subject"), document.getElementById("validateSubject"))
    var flag4 = checkMsg(document.getElementById("message"), document.getElementById("validateMessage"));
    if (flag1 && flag2 && flag3 && flag4) {
        var load = document.getElementById("message-box");
        load.style.display = "block";
        return false;
    }
    return false;
}


function checkName(name, validate) {
    if (name.value.length < 4) {
        name.style.border = "2px solid red";
        name.classList.add("animate__shakeX");
        validate.innerHTML = name.getAttribute("data-msg");
        validate.style.display = "block"
        return false;
    }
    else {
        name.style.border = "1px solid lightgrey";
        name.classList.remove("animate__shakeX");
        validate.style.display = "none"
        return true;
    }
}

function checkEmail(email, validate) {
    var reg = /[^@]+@[^@]+.[^@]+/;
    if (!email.value.match(reg)) {
        email.style.border = "2px solid red";
        email.classList.add("animate__shakeX");
        validate.innerHTML = email.getAttribute("data-msg");
        validate.style.display = "block"
        return false;
    }
    else {
        email.style.border = "1px solid lightgrey";
        email.classList.remove("animate__shakeX");
        validate.style.display = "none"
        return true;
    }
}

function checkSubject(subject, validate) {
    if (subject.value.length < 8) {
        subject.style.border = "2px solid red";
        subject.classList.add("animate__shakeX");
        validate.innerHTML = subject.getAttribute("data-msg");
        validate.style.display = "block"
        return false;
    }
    else {
        subject.style.border = "1px solid lightgrey";
        subject.classList.remove("animate__shakeX");
        validate.style.display = "none"
        return true;
    }
}

function checkMsg(msg, validate) {
    if (msg.value == "") {
        msg.style.border = "2px solid red";
        msg.classList.add("animate__shakeX");
        validate.innerHTML = msg.getAttribute("data-msg");
        validate.style.display = "block"
        return false;
    }
    else {
        msg.style.border = "1px solid lightgrey";
        msg.classList.remove("animate__shakeX");
        validate.style.display = "none"
        return true;
    }
}

/*Type writter effect*/
var TxtType = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function () {
        that.tick();
    }, delta);
};

window.onload = function () {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};


// Preloader
$(window).on('load', function () {
    if ($('#preloader').length) {
        $('#preloader').delay(100).fadeOut('slow', function () {
            $(this).remove();
        });
    }

    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });

});



