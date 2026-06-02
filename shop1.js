// home image automatc
const image = ['url("micap.jpg")', 'url("cloth.jpg")', 'url("product.jpg")'];
const texts = ['ابحث عن توافقك المثالي مع اختيارنا من مستحضرات التجميل والجمال - تسوق اليوم', 'قم بترقية خزانتك بملابس أنيقة - اشتري الملابس', 'تسوق الآن واحصل على شحن مجاني على جميع الطلبات'];
let currentImage = 0;
const imageElement = document.querySelector('.slide');
const textElement = document.querySelector('.txt1');
function changeImage() {
  currentImage = (currentImage + 1) % image.length;
  imageElement.style.backgroundImage = images[currentImage];
  textElement.innerText = texts[currentImage];
}
setInterval(changeImage, 5500);

// home image of < and >
var i = 0, images = ['url("micap.jpg")', 'url("cloth.jpg")', 'url("product.jpg")'];
var textt = ['ابحث عن توافقك المثالي مع اختيارنا من مستحضرات التجميل والجمال - تسوق اليوم', 'قم بترقية خزانتك بملابس أنيقة - اشتري الملابس', 'تسوق الآن واحصل على شحن مجاني على جميع الطلبات'];
function mychange(parm) {
  if (parm === 'next') {
    i++;
    if (i === images.length) {i = images.length-1;}
  }
  else {
    i--;
    if (i < 0) {i = 0;}
  }
  document.querySelector('.slide').style.backgroundImage = images[i];
  document.querySelector('.txt1').innerHTML = textt[i];
}

// add to cart
let products = {};

const addButtons = document.querySelectorAll('.add-cart');

addButtons.forEach((button) => {
button.addEventListener('click', () => {
const name = button.parentElement.querySelector('h2').textContent;
const price = button.parentElement.querySelector('.sale').textContent;
const img = button.parentElement.querySelector('img').getAttribute('src');
const product = {
  name,
  price,
  img,
  inCart: 0 // add a new property to track the number of items in cart
};

addToCart(product);
});
});

function addToCart(product) {
  let cartItems = JSON.parse(localStorage.getItem('productsInCart')) || {};
  
  if (cartItems[product.name]) {
  cartItems[product.name].inCart += 1;
  } else {
  product.inCart = 1;
  cartItems[product.name] = product;
  }
  
  localStorage.setItem('productsInCart', JSON.stringify(cartItems));
  updateCart();
  updateCartCount();
  totalCost(cartItems);
  cartNumbers(product); // add the product argument here
}

function updateCartCount() {
    let cartItems = JSON.parse(localStorage.getItem('productsInCart')) || {};
    
    let totalItems = 0;
    for (let item in cartItems) {
    totalItems += cartItems[item].inCart;
    }
    
    document.querySelector('.bxcart span').textContent = totalItems;
}

// Function to load the number of items in the cart
function onLoadCartNumbers() {
  let productNumbers = localStorage.getItem('cartNumbers');
  
  if (productNumbers) {
  document.querySelector('.bxcart span').textContent = productNumbers;
  }

  let cartItems = JSON.parse(localStorage.getItem('productsInCart')) || {};
  totalCost(cartItems); // update total cost
}

// Function to update the number of items in the cart
function cartNumbers(product) {
  let productNumbers = localStorage.getItem('cartNumbers');
  
  productNumbers = parseInt(productNumbers);
  
  if (productNumbers) {
  localStorage.setItem('cartNumbers', productNumbers + 1);
  document.querySelector('.bxcart span').innerHTML = productNumbers + 1;
  } else {
  localStorage.setItem('cartNumbers', 1);
  document.querySelector('.bxcart span').innerHTML = 1;
  }
  document.querySelector('.bxcart span').textContent = totalItems;

  setItems(product);
}

// Function to add items to the cart
function setItems(product) {
let cartItems = JSON.parse(localStorage.getItem('productsInCart')) || {};

if (cartItems[product.name]) {
cartItems[product.name].inCart += 1;
} else {
product.inCart = 1;
cartItems[product.name] = product;
}

localStorage.setItem('productsInCart', JSON.stringify(cartItems));
}

// Function to calculate the total cost of the items in the cart
function totalCost(cartItems) {
let cartCost = 0;

Object.values(cartItems).map((item) => {
cartCost += item.inCart * parseFloat(item.price);
});

localStorage.setItem('totalCost', cartCost);
updateCart();
}

// Function to decrement the quantity of an item
function decrementItem(productName) {
  let cartItems = JSON.parse(localStorage.getItem('productsInCart')) || {};

  if (cartItems[productName].inCart > 1) {
    cartItems[productName].inCart -= 1;
    localStorage.setItem('productsInCart', JSON.stringify(cartItems));
    updateCart();
    updateCartCount();
    const productNumbers = localStorage.getItem('cartNumbers');
    localStorage.setItem('cartNumbers', parseInt(productNumbers) - 1);
    totalCost(cartItems); // update total cost
  }
}

// Function to increment the quantity of an item
function incrementItem(productName) {
  let cartItems = JSON.parse(localStorage.getItem('productsInCart')) || {};

  if (cartItems[productName]) {
    cartItems[productName].inCart += 1;
    localStorage.setItem('productsInCart', JSON.stringify(cartItems));
    updateCartCount();
    updateCart();
    const productNumbers = localStorage.getItem('cartNumbers');
    localStorage.setItem('cartNumbers', parseInt(productNumbers) + 1);
    totalCost(cartItems); // update total cost
  }
}

// Function to remove an item from the cart
function removeItem(productName) {
  let cartItems = JSON.parse(localStorage.getItem('productsInCart')) || {};

  if (cartItems[productName]) {
      let productNumbers = localStorage.getItem('cartNumbers');
      let cartCost = localStorage.getItem('totalCost');
      productNumbers = parseInt(productNumbers);
      cartCost = parseInt(cartCost);
      productNumbers -= cartItems[productName].inCart;
      cartCost -= cartItems[productName].inCart * parseInt(cartItems[productName].price);
      delete cartItems[productName];
      localStorage.setItem('cartNumbers', productNumbers);
      localStorage.setItem('totalCost', cartCost);
      localStorage.setItem('productsInCart', JSON.stringify(cartItems));
      updateCart();
      updateCartCount();
      totalCost(cartItems); // update total cost
  }
}



function updateCart() {
  let productContainer = document.querySelector(".product-container");
  let cartCost = localStorage.getItem("totalCost");
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);

  if (cartItems && productContainer) {
    productContainer.innerHTML = ""; // Clear the existing HTML code

    Object.values(cartItems).map((value) => {
      productContainer.innerHTML += `
        <div id="product-item" class="product-item">
          <div class="product">
            <p onclick="removeItem('${value.tag}')" class="remove-item">&times;</p>
            <img src="${value.img}" alt="">
            <span id="pname" name="name">${value.name}</span>
          </div>
          <div dir="ltr" class="price" id="price" name="price">${value.price}</div>
          <div class="quantity">
          <p onclick="decrementItem('${value.name}')" class="decrement-item">-</p>
          <span id="total-cost" made="quantity">${value.inCart}</span>
          <p onclick="incrementItem('${value.name}')" class="increment-item">+</p>          
          </div>
          <div dir="ltr" class="total">${value.inCart * parseInt(value.price)} Dhs</div>
        </div>
      `;
    });
    productContainer.innerHTML += `
      <div class="basketTotalContainer">
        <h4 class="basketTotal-title">إجمالي سعر السلة</h4>
        <h4 dir="ltr" class="basket-tottal">${cartCost}.00 Dhs</h4>
      </div>
    `;
    // Add event listeners to remove and increment/decrement buttons
    let removeButtons = document.querySelectorAll('.remove-item');
    let decrementButtons = document.querySelectorAll('.decrement-item');
    let incrementButtons = document.querySelectorAll('.increment-item');

    removeButtons.forEach((button) => {
      button.addEventListener('click', () => {
        removeItem(button.parentElement.querySelector('span').textContent);
      });
    });

    decrementButtons.forEach((button) => {
      button.addEventListener('click', () => {
        decrementItem(button.parentElement.querySelector('span').textContent);
      });
    });

    incrementButtons.forEach((button) => {
      button.addEventListener('click', () => {
        incrementItem(button.parentElement.querySelector('span').textContent);
      });
    });
  }
  if (!cartItems || Object.keys(cartItems).length === 0) {
    productContainer.innerHTML = '<div dir="rtl" style="text-align: center; font-size: 24px; color: #333; background-color: #f7f7f7; padding: 20px; border: 1px solid #ccc; border-radius: 5px;">عربة التسوق فارغة<br><br>تصفّح فئاتنا، ابتكر صفقاتك!</div>';
    return;
  }
}

onLoadCartNumbers();
updateCart();

function searchProducts() {
  // Get the search input and products
  var input = document.getElementById("search-field");
  var products = document.getElementsByClassName("produ");
  
  // Get the filter text
  var filter = input.value.toUpperCase();

  // Get the container element for the product list
  var productList = document.createElement("ul");
  productList.setAttribute("id", "product-list");
  productList.style.listStyleType = "none";
  productList.style.padding = "0";
  
  // Iterate over the products and create list items for each one
  for (var i = 0; i < products.length; i++) {
    var name = products[i].getElementsByTagName("h2")[0];
    var textValue = name.textContent || name.innerText;
    
    // If the product matches the filter, create a list item for it
    if (textValue.toUpperCase().indexOf(filter) > -1) {
      var listItem = document.createElement("li");
      listItem.innerText = textValue;
      productList.appendChild(listItem);
      
      products[i].style.display = "";
      window.location.href = "#productt";
    } else {
      products[i].style.display = "none";
    }
  }
  
  // Get the container element for the search results and append the product list to it
  var searchResults = document.getElementById("search-results");
  searchResults.innerHTML = "";
  searchResults.appendChild(productList);
}


// jib products from JSON
function getCartItems() {
  let cartItems = JSON.parse(localStorage.getItem('productsInCart')) || {};
  let cartProducts = [];

  for (let item in cartItems) {
    const product = {
      name: cartItems[item].name,
      price: cartItems[item].price,
      img: cartItems[item].img,
      inCart: cartItems[item].inCart
    }
    cartProducts.push(product);
  }

  return cartProducts;
}

// Add event listener to submit button
document.getElementById('submit-form').addEventListener('click', function(e) {
  e.preventDefault();
  if (validateForm()) {
    sendForm();
  }
});

// Add event listener to "older products" button
function emptyproducts() {
  localStorage.removeItem('productsInCart');
  localStorage.setItem('productsInCart', JSON.stringify({}));
  localStorage.setItem('totalCost', 0); // Set totalCost to zero
  localStorage.setItem('cartNumbers', 0); // set cartNumbers to 0
  location.replace('thankyou.php'); // Redirect to thankyou.php after emptying the cart
}



// Function to validate form data
function validateForm() {
  let name = document.getElementById('name');
  let email = document.getElementById('email');
  let telephone = document.getElementById('telephone');
  let city = document.getElementById('city');

  if (name.value == '') {
    name.style.borderColor = 'red';
    return false;
  } else {
    name.style.borderColor = 'green';
  }

  if (email.value == '') {
    email.style.borderColor = 'red';
    return false;
  } else {
    email.style.borderColor = 'green';
  }

  if (telephone.value == '') {
    telephone.style.borderColor = 'red';
    return false;
  } else {
    telephone.style.borderColor = 'green';
  }

  if (city.value == '') {
    city.style.borderColor = 'red';
    return false;
  } else {
    city.style.borderColor = 'green';
  }

  let cartItems = getCartItems();
  if (cartItems.length === 0) {
    alert('لا توجد منتجات في سلة التسوق الخاصة بك. يرجى إضافة بعض المنتجات إلى سلة التسوق قبل تقديم الطلب.');
    return false;
  }

  return true;
}

// Add event listener to input fields to make the border green when the user starts typing
document.getElementById('name').addEventListener('input', function() {
  this.style.borderColor = 'green';
});
document.getElementById('email').addEventListener('input', function() {
  this.style.borderColor = 'green';
});
document.getElementById('telephone').addEventListener('input', function() {
  this.style.borderColor = 'green';
});
document.getElementById('city').addEventListener('input', function() {
  this.style.borderColor = 'green';
});

// Function to send form data and cart items to PHP script
function sendForm() {
  let name = document.getElementById('name').value;
  let email = document.getElementById('email').value;
  let telephone = document.getElementById('telephone').value;
  let city = document.getElementById('city').value;
  let items = JSON.stringify(getCartItems());

  if (!validateForm()) {
    return;
  }

  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'orderp.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };
  xhr.send('name=' + name + '&email=' + email + '&telephone=' + telephone + '&city=' + city + '&items=' + items);
  emptyproducts();
}

// confirm older
var formShown = false;
var buyButton = document.getElementById("buy-now-button");
var form = document.getElementById("customer-info-form");

buyButton.addEventListener("click", function() {
    formShown = !formShown;
    form.style.display = formShown ? "block" : "none";
    buyButton.innerHTML = formShown ? "تأكيد لاحق" : "تأكيد الطلب";
});

/* navbar
let navbar = document.querySelector('.navul');
let menuIcon = document.querySelector('#menu-icon');

menuIcon.onclick = () => {
  navbar.classList.toggle('active');
}
*/
