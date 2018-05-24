$(document).ready(function () {

    $("#min").on({
        mouseenter: function () {
            $("#ministiedd").show();
            $("#bookshopdb").hide();

            $("#ministiedd").mouseleave(function () {
                $(this).hide();
            });
        }
    });

    $("#mins").on({
        mouseenter: function () {
            $("#bookshopdb").show();
            $("#ministiedd").hide();

            $("#bookshopdb").mouseleave(function () {
                $(this).hide();
            });
        }
    });


    var maxTextLength = 15;
    var specialDets = document.getElementsByClassName("specialDet");

    for (var i = 0; i < specialDets.length; i++) {

        var specText = specialDets[i].innerHTML;
        var subSpec = specText.substring(0, maxTextLength);

        if (specText.length > maxTextLength) {
            specialDets[i].innerHTML = subSpec;
        }
    }



    var xhr = new XMLHttpRequest();
    xhr.open("post", "json/headers.json", true);

    xhr.send();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = this.responseText;
            data = JSON.parse(data);

            var ministries = data.type.ministries;
            var bookshoplocations = data.type.bookshopLocations;
            var challengeBookshops = ministries[0]["challengeBookshops"];
            var cinemaToday = ministries[0]["cinemaToday"];
            var mobileBookshops = ministries[0]["mobileBookshops"];
            var localFollowUp = ministries[0]["localFollowUp"];
            var prisonMinistry = ministries[0]["prisonMinistry"];
            var prisonChaplain = ministries[0]["prisonChaplain"];
            var youngSearchersLeague = ministries[0]["youngSearchersLeague"];
            var mailBoxClub = ministries[0]["mailBoxClub"];
            var conferences = ministries[0]["conferences"];
            var counselingServices = ministries[0]["counselingServices"];

            $(".close").click(function () {
                $(".popupclass").css('display', 'none');

            });
            ///bookshop Locations

            $("#extra").click(function () {
                $(".popupclass").css('display', 'block');

                xhr = new XMLHttpRequest();
                xhr.open("post", "json/headers.json", true);

                xhr.onprogress = function () {
                    $("#popuptitle").html("Loading....");
                    $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
                };

                xhr.onload = function () {

                    var response = JSON.parse(xhr.responseText);

                    $("#pagecontent").html(response.type.bookshopLocations[0].accra.contents);
                    $("#popuptitle").html(response.type.bookshopLocations[0].accra.title);
                };

                xhr.send();
            });
            $("#Tema").click(function () {

                $(".popupclass").css('display', 'block');

                xhr = new XMLHttpRequest();
                xhr.open("post", "json/headers.json", true);

                xhr.onprogress = function () {
                    $("#popuptitle").html("Loading....");
                    $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
                };

                xhr.onload = function () {

                    var response = JSON.parse(xhr.responseText);

                    $("#pagecontent").html(response.type.bookshopLocations[0].tema.contents);
                    $("#popuptitle").html(response.type.bookshopLocations[0].tema.title);
                };

                xhr.send();

            });
            $("#Abetifi").click(function () {
                $(".popupclass").css('display', 'block');

                xhr = new XMLHttpRequest();
                xhr.open("post", "json/headers.json", true);

                xhr.onprogress = function () {
                    $("#popuptitle").html("Loading....");
                    $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
                };

                xhr.onload = function () {

                    var response = JSON.parse(xhr.responseText);

                    $("#pagecontent").html(response.type.bookshopLocations[0].abetifi.contents);
                    $("#popuptitle").html(response.type.bookshopLocations[0].abetifi.title);
                };

                xhr.send();
            });
            $("#kumasi").click(function () {
                $(".popupclass").css('display', 'block');

                xhr = new XMLHttpRequest();
                xhr.open("post", "json/headers.json", true);

                xhr.onprogress = function () {
                    $("#popuptitle").html("Loading....");
                    $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
                };

                xhr.onload = function () {

                    var response = JSON.parse(xhr.responseText);

                    $("#pagecontent").html(response.type.bookshopLocations[0].kumasi.contents);
                    $("#popuptitle").html(response.type.bookshopLocations[0].kumasi.title);
                };

                xhr.send();
            });

            $("#sunyani").click(function () {
                $(".popupclass").css('display', 'block');

                xhr = new XMLHttpRequest();
                xhr.open("post", "json/headers.json", true);

                xhr.onprogress = function () {
                    $("#popuptitle").html("Loading....");
                    $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
                };

                xhr.onload = function () {

                    var response = JSON.parse(xhr.responseText);

                    $("#pagecontent").html(response.type.bookshopLocations[0].sunyani.contents);
                    $("#popuptitle").html(response.type.bookshopLocations[0].sunyani.title);
                };

                xhr.send();

            });
            $("#capeCoast").click(function () {

                $(".popupclass").css('display', 'block');

                xhr = new XMLHttpRequest();
                xhr.open("post", "json/headers.json", true);

                xhr.onprogress = function () {
                    $("#popuptitle").html("Loading....");
                    $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
                };

                xhr.onload = function () {

                    var response = JSON.parse(xhr.responseText);

                    $("#pagecontent").html(response.type.bookshopLocations[0].capeCoast.contents);
                    $("#popuptitle").html(response.type.bookshopLocations[0].capeCoast.title);
                };

                xhr.send();
            });
            $("#Tamale").click(function () {
                $(".popupclass").css('display', 'block');

                xhr = new XMLHttpRequest();
                xhr.open("post", "json/headers.json", true);

                xhr.onprogress = function () {
                    $("#popuptitle").html("Loading....");
                    $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
                };

                xhr.onload = function () {

                    var response = JSON.parse(xhr.responseText);

                    $("#pagecontent").html(response.type.bookshopLocations[0].tamale.contents);
                    $("#popuptitle").html(response.type.bookshopLocations[0].tamale.title);
                };

                xhr.send();

            });


            //ministries
            $("#extras").click(function () {
                $(".popupclass").css('display', 'block');
                $("#popuptitle").html(challengeBookshops["title"]);
                $("#pagecontent").html(challengeBookshops['contents']);
                $("#popupimage").css('display', 'block');


            });
            $("#cinematoday").click(function () {
                $(".popupclass").css('display', 'block');
                $("#popuptitle").html(cinemaToday["title"]);
                $("#pagecontent").html(cinemaToday['contents']);

            });
            $("#mobilebookshops").click(function () {
                $(".popupclass").css('display', 'block');
                $("#popuptitle").html(mobileBookshops["title"]);
                $("#pagecontent").html(mobileBookshops['contents']);

            });
            $("#localfollowup").click(function () {
                $(".popupclass").css('display', 'block');
                $("#popuptitle").html(localFollowUp["title"]);
                $("#pagecontent").html(localFollowUp['contents']);

            });
            $("#prisonministry").click(function () {
                $(".popupclass").css('display', 'block');
                $("#popuptitle").html(prisonMinistry["title"]);
                $("#pagecontent").html(prisonMinistry['contents']);

            });
            $("#prisonchaplain").click(function () {
                $(".popupclass").css('display', 'block');
                $("#popuptitle").html(prisonChaplain["title"]);
                $("#pagecontent").html(prisonChaplain['contents']);

            });
            $("#youngsearchersleague").click(function () {
                $(".popupclass").css('display', 'block');
                $("#popuptitle").html(youngSearchersLeague["title"]);
                $("#pagecontent").html(youngSearchersLeague['contents']);

            });
            $("#mailboxclub").click(function () {
                $(".popupclass").css('display', 'block');
                $("#popuptitle").html(mailBoxClub["title"]);
                $("#pagecontent").html(mailBoxClub['contents']);

            });
            $("#conferences").click(function () {
                $(".popupclass").css('display', 'block');
                $("#popuptitle").html(conferences["title"]);
                $("#pagecontent").html(conferences['contents']);

            });
            $("#counselingservices").click(function () {
                $(".popupclass").css('display', 'block');
                $("#popuptitle").html(counselingServices["title"]);
                $("#pagecontent").html(counselingServices['contents']);

            });
        }
    }

});