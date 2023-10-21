document.addEventListener("DOMContentLoaded", function() {
    const checkboxes = document.querySelectorAll('input[name="checkout[]"]');
    const totalAmountElement = document.getElementById('total-amount');
    const checkoutButton = document.getElementById('checkout-button');
    const deleteButtons = document.querySelectorAll(".delete-product-btn");

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateTotal);
    });

    deleteButtons.forEach(deleteButton => {
        deleteButton.addEventListener("click", handleDelete);
    });

    function updateTotal() {
        let total = 0;

        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                const itemTotal = parseFloat(checkbox.value);
                total += itemTotal;
            }
        });

        totalAmountElement.textContent = formatCurrency(total);
        checkoutButton.disabled = total === 0;
    }

    function formatCurrency(amount) {
        return amount.toLocaleString('en-US', {
            style: 'currency',
            currency: 'USD',
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });
    }

    function handleDelete() {
        const productID = this.getAttribute("data-productid");
        const productElement = document.querySelector(`#product_${productID}`);

        if (productElement) {
            productElement.style.transition = "opacity 0.3s ease-in-out";
            productElement.style.opacity = 0;

            // Assuming you have removed the product from the cart data here
            // Add logic here to remove the product from the cart data (e.g., update session data)

            setTimeout(() => {
                productElement.remove();

                // Perform an AJAX request to remove the product from the cart data
                fetch("include/remove_product.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                    body: `productID=${productID}`,
                })
                .then((response) => {
                    if (response.status === 200) {
                        location.reload();
                    } else {
                        // Handle errors
                        console.error("Error removing the product from the cart data.");
                    }
                })
                .catch((error) => {
                    console.error("An error occurred:", error);
                });
            }, 300);
        }
    }
});