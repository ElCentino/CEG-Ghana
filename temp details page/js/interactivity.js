
window.onload = () => {

    const bookImage = document.querySelector(".book-display");
    const viewElement = document.querySelector(".book-display-view");
    const detailDisplay = document.querySelector(".preview");
    const bookImageInfo = document.querySelector(".book-display-info");

    let bookWidth = bookImage.offsetWidth;
    let bookHeight = bookImage.offsetHeight;
   

    $(detailDisplay).hover(() => {
        $(bookImageInfo).show();
    }, () => {
        $(bookImageInfo).hide();
    });
};