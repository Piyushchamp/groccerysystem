let bagItems;
onload()
function onload() {
    let bagItemsStr = localStorage.getItem('bagItems');
    bagItems = bagItemsStr ? JSON.parse(bagItemsStr) : [];
    displayItemOnHomePage();
    displayBagIcon();
}
function addToBag(itemId) {
    bagItems.push(itemId);
    localStorage.setItem('bagItems', JSON.stringify(bagItems));
    displayBagIcon();
}
function displayBagIcon() {
    let bagItemCountElement = document.querySelector('.bag-item-count');
    if (bagItems.length > 0) {
        bagItemCountElement.style.visibility = 'visible';
        bagItemCountElement.innerText = bagItems.length;
    }
    else {
        bagItemCountElement.style.visibility = 'hidden';
    }
}


function displayItemOnHomePage() {
    let ItemsContainerElement = document.querySelector('.items_container');
    if(!ItemsContainerElement){
        return;
    }
    let innerHTML = '';
    items.forEach(item => {
        innerHTML += `
    <div class="item_container">
    <img class="item_image" src="${item.image}" alt="Item Image">
    <div class="rating">${item.rating.stars} ⭐| ${item.rating.count}</div>
    <div class="company_name">${item.company}</div>
    <div class="item_name">${item.item_name}</div>
    <div class="price">
        <span class="current_price">Rs ${item.current_price}</span>
        <span class="original_price">Rs ${item.original_price}</span>
        <span class="discount"> (${item.discount_percentage}% OFF)</span>
    </div>
    <button class="btn-add-bag" onclick="addToBag(items.id)">ADD TO BAG</button>
    </div>`
    });
    ItemsContainerElement.innerHTML = innerHTML;
}