function changeAtiveTab(event,tabID){
  let element = event.target;
  while(element.nodeName !== "A"){
    element = element.parentNode;
  }
  ulElement = element.parentNode.parentNode;
  aElements = ulElement.querySelectorAll("li > a");
  tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
  for(let i = 0 ; i < aElements.length; i++){
    aElements[i].classList.remove("text-white");
    aElements[i].classList.remove("bg-green-500");
    aElements[i].classList.add("text-blue-500");
    aElements[i].classList.add("bg-white");
    tabContents[i].classList.add("hidden");
    tabContents[i].classList.remove("block");
  }
  element.classList.remove("text-blue-500");
  element.classList.remove("bg-white");
  element.classList.add("text-white");
  element.classList.add("bg-green-500");
  document.getElementById(tabID).classList.remove("hidden");
  document.getElementById(tabID).classList.add("block");
}