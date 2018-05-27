$(document).ready(function () {

    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'json/ministries.json', true);

    xhr.onload = function() {

        let data = JSON.parse(this.responseText);

        let startingKey = "CBS";

        let article = data.filter(function(text) {
            return startingKey.toLowerCase() == text.bracket.toLowerCase();
        });

        $(".ministries-header").html(article[0].title);
        $(".ministries-body").html(article[0].contents);
    }

    xhr.send();

    $(".ministries-side-nav ul li").on('click', function(e) {

        var dataBracket = $(this).attr("data-bracket");

        e.preventDefault();

        xhr = new XMLHttpRequest();
        xhr.open('GET', 'json/ministries.json', true);

        xhr.onprogress = function() {

        };

        xhr.onload = function() {

            let data = JSON.parse(this.responseText);

            let article = data.filter(function(text) {
                return dataBracket.toLowerCase() == text.bracket.toLowerCase();
            });

            $(".ministries-section").fadeOut(function() {
                $(this).fadeIn();
                $(".ministries-header").html(article[0].title);
                $(".ministries-body").html(article[0].contents);
            });
            
        };

        xhr.send();
    });
});