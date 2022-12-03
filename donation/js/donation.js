const tenDoll = document.getElementById('10d');
const tfDoll = document.getElementById('25d');
const ftDoll = document.getElementById('50d');
const huDoll = document.getElementById('100d');
const cusHoll = document.getElementById('customDon');

var moneyDonate = document.getElementById('amount').value;


var arr = [tenDoll, tfDoll, ftDoll, huDoll];


arr.forEach(item => {
  item.addEventListener('click', () => {
    changeValue(item);
  })

})


const changeValue = (props) => {
  document.getElementById("amount").value = props.getAttribute('data-value');
  cusHoll.removeAttribute('required');
  cusHoll.classList.add("bg-slate-200", "text-[#14B8A6]");
  cusHoll.classList.remove("bg-[#14B8A6]", "text-white");

  for (var i = 0; i <= arr.length; i++) {
    if (arr[i].id != props.id) {
      arr[i].classList.remove("bg-[#14B8A6]", "text-white", "font-bold");
      arr[i].classList.add('text-[#14B8A6]')
    }
    else {
      props.classList.remove('text-[#14B8A6]')
      props.classList.add("bg-[#14B8A6]", "text-white", "font-bold");
    }
  }
}

const changeValueCustom = () => {
  for (var i = 0; i <= arr.length; i++) {
    arr[i].classList.remove("bg-[#14B8A6]","text-white", "font-bold");
    arr[i].classList.add("text-[#14B8A6]");
    cusHoll.classList.remove("bg-slate-200", "text-[#14B8A6]");
    cusHoll.classList.add("bg-[#14B8A6]", "text-white");
  }
}

cusHoll.addEventListener('click', () => {
  changeValueCustom();
});

function changeDonation() {
  document.getElementById("amount").value = cusHoll.value;
  cusHoll.setAttribute("required", "");
}




