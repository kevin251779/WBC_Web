let openShopping = document.querySelector(".shopping");
let closeShopping = document.querySelector(".closeShopping");
let list = document.querySelector(".list");
let listCard = document.querySelector(".listCard");
let body = document.querySelector("body");
let total = document.querySelector(".total");
let quantity = document.querySelector(".quantity");

openShopping.addEventListener("click", () => {
  body.classList.add("active");
});
closeShopping.addEventListener("click", () => {
  body.classList.remove("active");
});

let products = [
  {
    id: 1,
    name: "世界棒球經典賽-口袋毛巾-中華隊-白",
    image: "johnstons-of-elgin-0BA-leV0Fmc-unsplash.jpg",
    image2: "mathias-reding-ODbg2UdFiko-unsplash.jpg",
    price: 799,
  },
  {
    id: 2,
    name: "世界棒球經典賽-口袋毛巾-中華隊-藍",
    image: "cap_mediamodifier-pwZfe4B4ME0-unsplash (1).jpg",
    image2: "mediamodifier-JskqEILt-ds-unsplash.jpg",
    price: 799,
  },
  {
    id: 3,
    name: "棒球帽-940 WBC2023xNEW ERA 中華台北",
    image: "chris-briggs-FobzAZJGM9M-unsplash.jpg",
    image2: "lesly-juarez-gNYQxI5ufII-unsplash.jpg",
    price: 1480,
  },
  {
    id: 4,
    name: "世界棒球經典賽-搖頭公仔",
    image: "mediamodifier-JskqEILt-ds-unsplash.jpg",
    image2: "cap_mediamodifier-pwZfe4B4ME0-unsplash (1).jpg",
    price: 1680,
  },
  {
    id: 5,
    name: "世界棒球經典賽-圓筒包-中華隊",
    image: "mathias-reding-ODbg2UdFiko-unsplash.jpg",
    image2: "johnstons-of-elgin-0BA-leV0Fmc-unsplash.jpg",
    price: 990,
  },
  {
    id: 6,
    name: "世界棒球經典賽-抱枕-圓形-中華隊",
    image: "cap_mediamodifier-pwZfe4B4ME0-unsplash (1).jpg",
    image2: "mediamodifier-JskqEILt-ds-unsplash.jpg",
    price: 699,
  },
  {
    id: 7,
    name: "世界棒球經典賽-抱枕-棒球款-中華隊",
    image: "lesly-juarez-gNYQxI5ufII-unsplash.jpg",
    image2: "chris-briggs-FobzAZJGM9M-unsplash.jpg",
    price: 699,
  },
  {
    id: 8,
    name: "世界棒球經典賽-大學T-中華隊-藍",
    image: "mediamodifier-JskqEILt-ds-unsplash.jpg",
    image2: "cap_mediamodifier-pwZfe4B4ME0-unsplash (1).jpg",
    price: 1680,
  },
  {
    id: 9,
    name: "世界棒球經典賽-大學T-中華隊-白",
    image: "johnstons-of-elgin-0BA-leV0Fmc-unsplash.jpg",
    image2: "mathias-reding-ODbg2UdFiko-unsplash.jpg",
    price: 1680,
  },
  {
    id: 10,
    name: "世界棒球經典賽-短袖T-shirt-中華隊-背號款-藍",
    image: "mediamodifier-JskqEILt-ds-unsplash.jpg",
    image2: "cap_mediamodifier-pwZfe4B4ME0-unsplash (1).jpg",
    price: 1090,
  },
  {
    id: 11,
    name: "世界棒球經典賽-短袖T-shirt-中華隊-揮棒款-白",
    image: "chris-briggs-FobzAZJGM9M-unsplash.jpg",
    image2: "lesly-juarez-gNYQxI5ufII-unsplash.jpg",
    price: 990,
  },
  {
    id: 12,
    name: "世界棒球經典賽-單肩包-中華隊",
    image: "cap_mediamodifier-pwZfe4B4ME0-unsplash (1).jpg",
    image2: "mediamodifier-JskqEILt-ds-unsplash.jpg",
    price: 890,
  },
  {
    id: 13,
    name: "世界棒球經典賽-飲料提袋-中華隊-藍",
    image: "mathias-reding-ODbg2UdFiko-unsplash.jpg",
    image2: "johnstons-of-elgin-0BA-leV0Fmc-unsplash.jpg",
    price: 250,
  },
  {
    id: 14,
    name: "世界棒球經典賽-短袖POLO衫-中華隊-白",
    image: "cap_mediamodifier-pwZfe4B4ME0-unsplash (1).jpg",
    image2: "mediamodifier-JskqEILt-ds-unsplash.jpg",
    price: 1390,
  },
  {
    id: 15,
    name: "世界棒球經典賽-證件卡套-中華隊",
    image: "mediamodifier-JskqEILt-ds-unsplash.jpg",
    image2: "cap_mediamodifier-pwZfe4B4ME0-unsplash (1).jpg",
    price: 390,
  },
  {
    id: 16,
    name: "世界棒球經典賽-浴巾-中華隊-藍",
    image: "johnstons-of-elgin-0BA-leV0Fmc-unsplash.jpg",
    image2: "mathias-reding-ODbg2UdFiko-unsplash.jpg",
    price: 1190,
  },
];
let listCards = [];
function initApp() {
  products.forEach((value, key) => {
    let newDiv = document.createElement("div");
    newDiv.classList.add("item");
    newDiv.innerHTML = `
            <img src="./picture/${value.image}">
            <img src="./picture/${value.image2}"class="rear-img"/>
            <div class="title">${value.name}</div>
            <div class="price">NT ${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">
            <img src="./picture/cart.png" alt="cart Image">
            </button>`;
    list.appendChild(newDiv);
  });
}
initApp();
function addToCard(key) {
  if (listCards[key] == null) {
    // copy product form list to list card
    listCards[key] = JSON.parse(JSON.stringify(products[key]));
    listCards[key].quantity = 1;
  }
  reloadCard();
}
function reloadCard() {
  listCard.innerHTML = "";
  let count = 0;
  let totalPrice = 0;
  listCards.forEach((value, key) => {
    totalPrice = totalPrice + value.price;
    count = count + value.quantity;
    if (value != null) {
      let newDiv = document.createElement("li");
      newDiv.innerHTML = `
                <div><img src="./picture/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${
        value.quantity - 1
      })">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${
        value.quantity + 1
      })">+</button>
                </div>`;
      listCard.appendChild(newDiv);
    }
  });
  total.innerText = totalPrice.toLocaleString();
  quantity.innerText = count;
}
function changeQuantity(key, quantity) {
  if (quantity == 0) {
    delete listCards[key];
  } else {
    listCards[key].quantity = quantity;
    listCards[key].price = quantity * products[key].price;
  }
  reloadCard();
}
