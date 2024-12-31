// Retrieve all tile elements
const portfolioItems = document.querySelectorAll(".portfolio-item-wrapper");

portfolioItems.forEach((portfolioItem) => {

    // Each tile should darken when hovered over
    portfolioItem.addEventListener("mouseover", () => {
        portfolioItem.childNodes[1].classList.add("img-darken");
    });

    // Each tile should return to normal state when not hovered over 
    portfolioItem.addEventListener("mouseout", () => {
        portfolioItem.childNodes[1].classList.remove("img-darken");
    });
});