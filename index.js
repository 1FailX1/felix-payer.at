const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
});


const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

// Bottom-To-Top

const observer_bottom_to_top = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show-bottom-to-top');
        }
    });
});


const hiddenElements_bottom_to_top = document.querySelectorAll('.hidden-bottom-to-top');
hiddenElements_bottom_to_top.forEach((el) => observer_bottom_to_top.observe(el));

// Top-To-Bottom

const observer_top_to_bottom = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show-top-to-bottom');
        }
    });
});


const hiddenElements_top_to_bottom = document.querySelectorAll('.hidden-top-to-bottom');
hiddenElements_top_to_bottom.forEach((el) => observer_top_to_bottom.observe(el));

// Left-To-Right

const observer_left_to_right = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show-left-to-right');
        }
    });
});


const hiddenElements_left_to_right = document.querySelectorAll('.hidden-left-to-right');
hiddenElements_left_to_right.forEach((el) => observer_left_to_right.observe(el));

// Right-To-Left

const observer_right_to_left = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show-right-to-left');
        }
    });
});


const hiddenElements_right_to_left = document.querySelectorAll('.hidden-right-to-left');
hiddenElements_right_to_left.forEach((el) => observer_right_to_left.observe(el));