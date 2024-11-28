// Get all li elements with class item-4
const item4ListItems = document.querySelectorAll('.item-4 li');
const item5ListItems = document.querySelectorAll('.item-5 li');


// Add click event listener to each li element
item4ListItems.forEach(li => {
  li.addEventListener('click', () => {
    // Remove selected class from all li elements
    item4ListItems.forEach(otherLi => {
      otherLi.classList.remove('selected');
    });
    // Add selected class to the clicked li element
    li.classList.add('selected');
  });
});
// Add click event listener to each li element under item-5
item5ListItems.forEach(li => {
  li.addEventListener('click', () => {
    // Remove selected class from all li elements under item-5
    item5ListItems.forEach(otherLi => {
      otherLi.classList.remove('selected');
    });
    // Add selected class to the clicked li element
    li.classList.add('selected');
  });
});

