//Kalkulator//
function out(vol) {
    document.querySelector('#volume').value = vol;
    calculator()
}

function out2(vol2) {
    document.querySelector('#volume2').value = vol2;
    calculator()
}


function calculator() {
    var range1 = document.getElementById('range1').value;
    var range2 = document.getElementById('range2').value;
    var vol = document.getElementById('volume').value;
    var vol2 = document.getElementById('volume2').value;
    var Total = ((vol * (7 - vol2)) * 2000);

    Total = Total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    document.getElementById('Total').innerHTML = "Rp " + Total;


}

//Navbar hilang
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 85 || document.documentElement.scrollTop > 85) {
        document.getElementById("#navbarr").classList.replace("md:bg-transparent", "md:bg-white")
        document.getElementById("#navbarr").classList.replace("md:shadow-none", "md:shadow-md")

    } else {
        document.getElementById("#navbarr").classList.replace("md:bg-white", "md:bg-transparent")
        document.getElementById("#navbarr").classList.replace("md:shadow-md", "md:shadow-none")
    }
}

//Hamburger website
let hamburger = document.querySelector('#hamburger')
let navlinks = document.querySelector('#navlinks')

let line = hamburger.querySelector('#line')
let line2 = hamburger.querySelector('#line2')

hamburger.addEventListener('click', function() {
    if (navlinks.classList.contains('hidden')) {
        navlinks.classList.remove('hidden')

    } else {
        navlinks.classList.add('hidden')
    }
})

//Buat ilangin nav kalau ditekan (mobile)

let DropDownHome = document.getElementById("Home")
let DropdownHarga = document.getElementById("Harga")
let DropdownFitur = document.getElementById("Fitur")
let DropdownOrder = document.getElementById("Order")

DropDownHome.addEventListener("click", function() {
    if (navlinks.classList.contains('hidden')) {
        navlinks.classList.remove('hidden')
    } else {
        navlinks.classList.add('hidden')
    }
})

DropdownHarga.addEventListener("click", function() {
    if (navlinks.classList.contains('hidden')) {
        navlinks.classList.remove('hidden')
    } else {
        navlinks.classList.add('hidden')
    }
})

DropdownFitur.addEventListener("click", function() {
    if (navlinks.classList.contains('hidden')) {
        navlinks.classList.remove('hidden')
    } else {
        navlinks.classList.add('hidden')
    }
})

DropdownOrder.addEventListener("click", function() {
    if (navlinks.classList.contains('hidden')) {
        navlinks.classList.remove('hidden')
    } else {
        navlinks.classList.add('hidden')
    }
})