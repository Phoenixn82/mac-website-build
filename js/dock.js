let icons = document.querySelectorAll(".ico");
let length = icons.length;

icons.forEach((item, index) => {
  item.addEventListener("mouseover", (e) => {
    focus(e.target, index);
  });
  item.addEventListener("mouseleave", (e) => {
    icons.forEach((item) => {
      item.style.transform = "scale(1)  translateY(0px)";
    });
  });
});

const focus = (elem, index) => {
  let previous = index - 1;
  let previous1 = index - 2;
  let next = index + 1;
  let next2 = index + 2;

  if (previous == -1) {
    console.log("first element");
    elem.style.transform = "scale(1.5)  translateY(-10px)";
  } else if (next == icons.length) {
    elem.style.transform = "scale(1.5)  translateY(-10px)";
    console.log("last element");
  } else {
    elem.style.transform = "scale(1.5)  translateY(-10px)";
    icons[previous].style.transform = "scale(1.2) translateY(-6px)";
    icons[previous1].style.transform = "scale(1.1)";
    icons[next].style.transform = "scale(1.2) translateY(-6px)";
    icons[next2].style.transform = "scale(1.1)";
  }
};


function toggleDiv(divId) {
  var div = document.getElementById(divId);
  
  // If the clicked div is already visible, hide it
  if (!div.classList.contains('hidden')) {
    div.classList.add('hidden');
    return; // Exit the function early
  }

  var contentDivs = document.getElementsByClassName('content');
  
  // Hide all content divs
  for (var i = 0; i < contentDivs.length; i++) {
    contentDivs[i].classList.add('hidden');
  }
  
  // Remove hidden class from the clicked div
  div.classList.remove('hidden');
  
  // Position the clicked div in the middle of the screen
  div.style.position = 'fixed';
  div.style.top = '50%';
  div.style.left = '50%';
  div.style.transform = 'translate(-50%, -50%)';
}
