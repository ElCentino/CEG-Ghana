
window.onload = () => {

    const centerText = document.querySelector("#centerText");

    const $animElements = $(".anim-element");
    const $window = $(window);

    const xhr = new XMLHttpRequest();
    xhr.open('GET', './json/centerWords.json', true);

    xhr.onload = () => {

        const centerWords = JSON.parse(xhr.responseText);

        let centerWordsIndex = 1;

        let interval = setInterval(() => {

        if($ && centerWords) {

            if(centerWordsIndex >= centerWords.length) centerWordsIndex = 0;

                $(centerText).fadeOut(() => {
                    $(centerText).fadeIn();
                    $(centerText).html(centerWords[centerWordsIndex++]);
                });
            }
        }, 6000);

    };

    xhr.send();

    function map(source, low, high, min, max) {

        return ((source - low) * (max/high)) + min;
    }
};
