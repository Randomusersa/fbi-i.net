"use strict";
const lagger = function() {
    for (let i = 0; i <= 1000000000; i++) {
        console.log(`${i} is hello`);
    }
};

document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".btn.lagger").addEventListener("click", lagger);
});
