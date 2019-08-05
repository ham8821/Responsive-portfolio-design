window.transitionToPage = function(href) {
    document.querySelector('body').style.opacity = 0
    setTimeout(function() { 
        window.location.href = href
    }, 500)
}

document.addEventListener('DOMContentLoaded', function(event) {
    document.querySelector('body').style.opacity = 1
})

$( document ).ready(function() {
    $('body').show();
     $('.greetingtitle').animate({'opacity':'1','marginLeft': '0.1in'},1500);
    });

  
$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1','marginTop': '0.1in'},1500);
                    
            }
            
        }); 
    
    });
    
});

// External JS: JS Helper Functions
// External JS: Dynamics JS

var btnOpen = select('.js-open');
var btnClose = select('.js-close');
var modal = select('.js-modal');
var modalChildren = modal.children;

function hideModal() {
  dynamics.animate(modal, {
    opacity: 0,
    translateY: 100
  }, {
    type: dynamics.spring,
    frequency: 50,
    friction: 600,
    duration: 1500
  });
}

function showModal() {
  // Define initial properties
  dynamics.css(modal, {
    opacity: 0,
    scale: .5
  });
  
  // Animate to final properties
  dynamics.animate(modal, {
    opacity: 1,
    scale: 1
  }, {
    type: dynamics.spring,
    frequency: 300,
    friction: 400,
    duration: 1000
  });
}

function showBtn() {
  dynamics.css(btnOpen, {
    opacity: 0
  });
  
  dynamics.animate(btnOpen, {
    opacity: 1
  }, {
    type: dynamics.spring,
    frequency: 300,
    friction: 400,
    duration: 800
  });
}

function showModalChildren() {
  // Animate each child individually
  for(var i=0; i<modalChildren.length; i++) {
    var item = modalChildren[i];
    
    // Define initial properties
    dynamics.css(item, {
      opacity: 0,
      translateY: 30
    });

    // Animate to final properties
    dynamics.animate(item, {
      opacity: 1,
      translateY: 0
    }, {
      type: dynamics.spring,
      frequency: 300,
      friction: 400,
      duration: 1000,
      delay: 100 + i * 40
    });
  } 
}

function toggleClasses() {
  toggleClass(btnOpen, 'is-active');
  toggleClass(modal, 'is-active');
}

// Open nav when clicking sandwich button
btnOpen.addEventListener('click', function(e) {
  toggleClasses();
  showModal();
  showModalChildren();
});

// Open nav when clicking sandwich button
btnClose.addEventListener('click', function(e) {
  hideModal();
  dynamics.setTimeout(toggleClasses, 500);
  dynamics.setTimeout(showBtn, 500);
});