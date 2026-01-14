const navToggle = document.querySelector(".nav-toggle") 
const navMenu = document.querySelector(".nav-menu") 

navToggle.addEventListener("click", () => {  
    navMenu.classList.toggle("nav-menu_visible")
})  

/*ORDERS DASHBOARD*/ 
const Orders = [
    {
        productName: 'JavaScript Tutorial',
        productNumber: '85743',
        paymentStatus: 'Due',
        status: 'Pending'
    },
    {
        productName: 'CSS Full Course',
        productNumber: '97245',
        paymentStatus: 'Refunded',
        status: 'Declined'
    },
    {
        productName: 'Flex-Box Tutorial',
        productNumber: '36452',
        paymentStatus: 'Paid',
        status: 'Active'
    },
]  


// Goupbutton 

const upwardButton = document.querySelector('.goupbutton');

window.addEventListener('scroll', () => {
  if (window.scrollY <= 0) {
    upwardButton.classList.add('hidden');
  } else {
    upwardButton.classList.remove('hidden');
  }
});
