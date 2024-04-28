const containerWrapper = document.querySelector('.container-wrapper');
const draggableItems = document.querySelectorAll('.item-1, .item-2, .item-3');

let isDragging = false;
let offset = { x: 0, y: 0 };

draggableItems.forEach(item => {
  item.addEventListener('mousedown', startDragging);
});

document.addEventListener('mousemove', dragContainerWrapper);
document.addEventListener('mouseup', stopDragging);

function startDragging(e) {
  isDragging = true;
  offset.x = e.clientX - containerWrapper.offsetLeft;
  offset.y = e.clientY - containerWrapper.offsetTop;
}

function dragContainerWrapper(e) {
  if (isDragging) {
    const x = e.clientX - offset.x;
    const y = e.clientY - offset.y;
    containerWrapper.style.left = `${x}px`;
    containerWrapper.style.top = `${y}px`;
  }
}

function stopDragging() {
  isDragging = false;
}

