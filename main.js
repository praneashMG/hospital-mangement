//TODO index.html

let title = document.getElementById("title");
let img = document.getElementById("img");

function btnclick1() {
    title.innerHTML = "DORMITORY";
    img.src = "imgs/services/service-one.jpg";
}

function btnclick2() {
    title.innerHTML = "ORTHOPEDIC";
    img.src = "imgs/services/service-two.jpg";
}

function btnclick3() {
    title.innerHTML = "SONOGRAM";
    img.src = "imgs/services/service-three.jpg";
}

function btnclick4() {
    title.innerHTML = "X-RAY";
    img.src = "imgs/services/service-four.jpg";
}

function btnclick5() {
    title.innerHTML = "DIAGNOSTIC";
    img.src = "imgs/services/service-five.jpg";
}


// TODO Team.html

let img1 = document.getElementById("teamimg1");
let img2 = document.getElementById("teamimg2");
let img3 = document.getElementById("teamimg3");
let h41 = document.getElementById("teamh41");
let h42 = document.getElementById("teamh42");
let h43 = document.getElementById("teamh43");
let h61 = document.getElementById("teamh61");
let h62 = document.getElementById("teamh62");
let h63 = document.getElementById("teamh63");

const teambtn1 = () => {
    h41.innerHTML = "Dr. Emely Robert";
    h61.innerHTML = "Bone Specialist";
    img1.src = "../imgs/team/doctor-1.jpg";

    h42.innerHTML = "Dr. Rag Jhon";
    h62.innerHTML = "Eye Specialist";
    img2.src = "../imgs/team/doctor-2.jpg";

    h43.innerHTML = "Dr. Tent Richardson";
    h63.innerHTML = "Skin Specialist";
    img3.src = "../imgs/team/doctor-3.jpg";
}

const teambtn2 = () => {
    h41.innerHTML = "Dr. Sheiring Ton";
    h61.innerHTML = "Manager";
    img1.src = "../imgs/team/event-1.jpg";

    h42.innerHTML = "Dr. Rig Richard";
    h62.innerHTML = "Sr. Manager";
    img2.src = "../imgs/team/event-2.jpg";

    h43.innerHTML = "Dr. Tom Moddy";
    h63.innerHTML = "President";
    img3.src = "../imgs/team/event-3.jpg";
}

const teambtn3 = () => {
    h41.innerHTML = "Dr. Maria Robert";
    h61.innerHTML = "X-RAY";
    img1.src = "../imgs/team/doctor-lab-1.jpg";

    h42.innerHTML = "Dr. John Kelly";
    h62.innerHTML = "ultrasound therapy";
    img2.src = "../imgs/team/doctor-lab-2.jpg";

    h43.innerHTML = "Dr. Simran Toe";
    h63.innerHTML = "bone therapy";
    img3.src = "../imgs/team/doctor-lab-3.jpg";
}

const teambtn4 = () => {
    h41.innerHTML = "Dr. Rag Jhon";
    h61.innerHTML = "Eye Specialist";
    img1.src = "../imgs/team/doctor-2.jpg";

    h42.innerHTML = "Dr. Sheiring Ton";
    h62.innerHTML = "Manager";
    img2.src = "../imgs/team/event-1.jpg";

    h43.innerHTML = "Dr. John Kelly";
    h63.innerHTML = "ultrasound therapy";
    img3.src = "../imgs/team/doctor-lab-2.jpg";
}