let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'TAPSILOG',
        image: '1.PNG',
        price: 60
    },
    {
        id: 2,
        name: 'SIOSILOG',
        image: '2.PNG',
        price: 50
    },
    {
        id: 3,
        name: 'HOTSILOG',
        image: '3.PNG',
        price: 70
    },
    {
        id: 4,
        name: 'COMBOSILOG',
        image: '4.PNG',
        price: 75
    },
    {
        id: 5,
        name: 'CORNDOG',
        image: '5.PNG',
        price: 25
    },
    {
        id: 6,
        name: 'FRENCH FRIES',
        image: '6.PNG',
        price: 20
    },
    {
        id: 7,
        name: 'KWEK-KWEK',
        image: '7.PNG',
        price: 15
    },
    {
        id: 8,
        name: 'TEMPURA',
        image: '8.PNG',
        price: 10
    },
    {
        id: 9,
        name: 'FISHBALLS',
        image: '9.PNG',
        price: 10   
    },
    {
        id: 10,
        name: 'BUNDLE 1',
        image: '10.PNG',
        price: 130
    },
    {
        id: 11,
        name: 'BUNDLE 2',
        image: '11.PNG',
        price: 135
    },
    {
        id: 12,
        name: 'BUNDLE 3',
        image: '12.PNG',
        price: 135
    },
    {
        id: 13,
        name: 'ICED CARAMEL',
        image: '13.PNG',
        price: 39
    },
    {
        id: 14,
        name: 'ICED CHOCO LATTE',
        image: '14.PNG',
        price: 39
    },
    {
        id: 15,
        name: 'ICED MOCHA',
        image: '15.PNG',
        price: 39
    },
    {
        id: 16,
        name: 'CUPCAKE 1',
        image: '16.PNG',
        price: 10
    },
    {
        id: 17,
        name: 'CUPCAKE 2',
        image: '17.PNG',
        price: 10
    },
    {
        id: 18,
        name: 'BANANA CUPCAKE',
        image: '18.PNG',
        price: 10
    },

];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}