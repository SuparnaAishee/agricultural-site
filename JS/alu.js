const addToCartButtons = document.querySelectorAll(".add-to-cart-btn");
const cartItemsList = document.querySelector(".cart-items");
const totalCostDisplay = document.querySelector(".total");

let totalCost = 0;

addToCartButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const product = button.parentNode;
    const productName = product.querySelector("h2").textContent;
    const productPrice = parseFloat(
      product.querySelector(".price").textContent.slice(1)
    ); // Remove the "$" sign
    const quantity = parseInt(product.querySelector("#quantity").value);

    const cartItem = document.createElement("li");
    const itemTotal = (productPrice * quantity).toFixed(2);
    totalCost += parseFloat(itemTotal);

    cartItem.textContent = `${productName} - $${productPrice.toFixed(
      2
    )} x ${quantity} = $${itemTotal}`;

    cartItemsList.appendChild(cartItem);
    totalCostDisplay.textContent = `Total: $${totalCost.toFixed(2)}`;
  });
});
