$(document).ready(function(){
 

 var ul = document.getElementById("ul");

  var li = ul.getElementsByClassName("li");

  for (var i = 0; i < li.length; i++) {

    li[i].addEventListener("click", function(e){

      e.preventDefault();

      var current = document.getElementsByClassName("active");

      current[0].className = current[0].className.replace(" active", "");

      this.className += " active";

      $("#icon").css('color', 'black!important');
       
    });
  }





$(".li").click(function(){

 
 
 function _(el){
     return document.getElementById(el);
}
 

  function ajax_call(php_file, el, data){
   // _(el).innerHTML = "loading";
    var hr = new XMLHttpRequest();

    hr.open('GET', php_file, true);
     hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    hr.onreadystatechange = function(){

        if (hr.readyState == 4 && hr.status == 200) {
          // _(el).innerHTML = hr.responseText;
          $(".body_content").html(hr.responseText);
          return hr.responseText;
         
        }
    }
    hr.send(data);
    
}


 
   var content = $(this).attr("id");
    
    switch (content){
        case 'dashboarad':
        
        break;
        case 'visitors':
        ajax_call("apps/visitors.php", "emailsss", null);
       
        break;
        case 'emails':
        
        break;
        case 'address':
        ajax_call("apps/address.php", "emailsss", null);
    
        break;
        case 'sales':
        
        break;
        case 'users':
         ajax_call("apps/emails.php", "emailsss", null);
           
;        break;
        case 'books':
        console.log("this is Visitors");
        break;

    }

   
});



var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["january", "Feb", "march", "april", "may", "june"],
        datasets: [{
            label: 'Visitors',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});


var ctx = document.getElementById("dsChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ["january", "Feb", "march", "april", "may", "june"],
        datasets: [{
            label: 'Sales',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

var ctx = document.getElementById("csChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'scatter',
    data: {
        labels: ["january", "Feb", "march", "april", "may", "june"],
        datasets: [{
            label: 'Income',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

var ctx = document.getElementById("theChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["january", "Feb", "march", "april", "may", "june"],
        datasets: [{
            label: 'total user',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
});