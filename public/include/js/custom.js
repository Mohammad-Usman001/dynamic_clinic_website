var $ = jQuery.noConflict();

jQuery(document).ready(function($) {


    /*==========================*/
    /* sliders */
    /*==========================*/
    if ($('._hero_slider').length > 0) {
        jQuery('._hero_slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            fade: true,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 500,
            infinite: true,
            centerMode: false,
            responsive: [{
                breakpoint: 767,
                settings: {
                    arrows: false,
                }
            }]

        });
    }

    /*==========================*/



    /*==========================*/
    /* sliders */
    /*==========================*/
    if ($('.testimonial__slider').length > 0) {
        jQuery('.testimonial__slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            fade: false,
            infinite: true,
            centerPadding: '300px',
            centerMode: true,
            responsive: [{
                breakpoint: 767,
                settings: {
                    arrows: false,
                    dots: true,

                    centerPadding: '0px',
                }
            }]

        });
    }

    /*==========================*/

    /*==========================*/
    /* Mobile Slider */
    /*==========================*/
    if ($('.mobile-slider').length > 0) {
        jQuery('.mobile-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            infinite: true,
            centerMode: false,
            responsive: [{
                    breakpoint: 5000,
                    settings: "unslick"
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        adaptiveHeight: false
                    }
                }
            ]
        });
    }


    /*==========================*/
    /* Scroll on animate */
    /*==========================*/
    function onScrollInit(items, trigger) {
        items.each(function() {
            var osElement = $(this),
                osAnimationClass = osElement.attr('data-os-animation'),
                osAnimationDelay = osElement.attr('data-os-animation-delay');
            osElement.css({
                '-webkit-animation-delay': osAnimationDelay,
                '-moz-animation-delay': osAnimationDelay,
                'animation-delay': osAnimationDelay
            });
            var osTrigger = (trigger) ? trigger : osElement;
            osTrigger.waypoint(function() {
                osElement.addClass('animated').addClass(osAnimationClass);
            }, {
                triggerOnce: true,
                offset: '95%',
            });
            // osElement.removeClass('fadeInUp');
        });
    }
    onScrollInit($('.os-animation'));
    onScrollInit($('.staggered-animation'), $('.staggered-animation-container'));


    /*==========================*/
    /* Header fix */
    /*==========================*/
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $("body").addClass("fixed");
    } else {
        $("body").removeClass("fixed");
    }


});


$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $("body").addClass("fixed");
    } else {
        $("body").removeClass("fixed");
    }
});




document.addEventListener("DOMContentLoaded", function() {
    const metricRadio = document.getElementById("metric");
    const imperialRadio = document.getElementById("imperial");
    const metricInputs = document.getElementById("metric-inputs");
    const imperialInputs = document.getElementById("imperial-inputs");
    const calculateButtonMetric = document.getElementById("calculate-bmi");
    const calculateButtonImperial = document.getElementById("calculate-bmi-imperial");
    const bmiResult = document.getElementById("bmi-result");
    const bmiSvg = document.getElementById("bmi-svg");

    metricRadio.addEventListener("change", function() {
        if (metricRadio.checked) {
            metricInputs.style.display = "flex";
            imperialInputs.style.display = "none";
        }
    });

    imperialRadio.addEventListener("change", function() {
        if (imperialRadio.checked) {
            metricInputs.style.display = "none";
            imperialInputs.style.display = "flex";
        }
    });

    function getCategoryLabel(bmi) {
        if (bmi < 18.5) return "Underweight";
        if (bmi < 24.9) return "Normal weight";
        if (bmi < 29.9) return "Overweight";
        return "Obesity";
    }

    function displayBmiGraph(bmi) {
        const categories = [
            { label: "Underweight", color: "#ADD8E6", range: [0, 18.5] },
            { label: "Normal weight", color: "#90EE90", range: [18.5, 24.9] },
            { label: "Overweight", color: "#FFD700", range: [25, 29.9] },
            { label: "Obesity", color: "#FF6347", range: [30, 100] }
        ];

        const width = 500;
        const height = 20;
        let xOffset = 0;

        bmiSvg.innerHTML = '';
        categories.forEach(category => {
            const categoryWidth = (category.range[1] - category.range[0]) * (width / 40); // assuming BMI scale from 0 to 40
            const rect = document.createElementNS("http://www.w3.org/2000/svg", "rect");
            rect.setAttribute("x", xOffset);
            rect.setAttribute("y", 0);
            rect.setAttribute("width", categoryWidth);
            rect.setAttribute("height", height);
            rect.setAttribute("fill", category.color);
            bmiSvg.appendChild(rect);
            xOffset += categoryWidth;
        });

        const line = document.createElementNS("http://www.w3.org/2000/svg", "line");
        line.setAttribute("x1", bmi * (width / 40));
        line.setAttribute("y1", 0);
        line.setAttribute("x2", bmi * (width / 40));
        line.setAttribute("y2", height);
        line.setAttribute("stroke", "black");
        line.setAttribute("stroke-width", 2);
        bmiSvg.appendChild(line);

        const text = document.createElementNS("http://www.w3.org/2000/svg", "text");
        text.setAttribute("x", bmi * (width / 40));
        text.setAttribute("y", height + 15);
        text.setAttribute("font-size", "12");
        text.setAttribute("text-anchor", "middle");
        text.textContent = `BMI: ${bmi.toFixed(2)} (${getCategoryLabel(bmi)})`;
        bmiSvg.appendChild(text);
    }

    calculateButtonMetric.addEventListener("click", function() {
        const height = parseFloat(document.getElementById("height").value);
        const weight = parseFloat(document.getElementById("weight").value);

        if (isNaN(height) || isNaN(weight)) {
            bmiResult.style.display = "none";
            alert("Please enter valid numbers for height and weight.");
            return;
        }

        const bmi = weight / ((height / 100) ** 2);
        bmiResult.style.display = "block";
        displayBmiGraph(bmi);
    });

    calculateButtonImperial.addEventListener("click", function() {
        const heightFeet = parseFloat(document.getElementById("height-feet").value);
        const heightInches = parseFloat(document.getElementById("height-inches").value);
        const weight = parseFloat(document.getElementById("weight-lbs").value);

        if (isNaN(heightFeet) || isNaN(heightInches) || isNaN(weight)) {
            bmiResult.style.display = "none";
            alert("Please enter valid numbers for height and weight.");
            return;
        }

        const height = (heightFeet * 12) + heightInches;
        const bmi = (weight / (height ** 2)) * 703;
        bmiResult.style.display = "block";
        displayBmiGraph(bmi);
    });
});



  function toggleMenu() {
  var menu = document.querySelector('.dashboard-left');
  var closeBtn = document.querySelector('.menu_icon_box');
  menu.classList.toggle('active'); // Toggle the "active" class on the menu element
  closeBtn.classList.toggle('active');
}
