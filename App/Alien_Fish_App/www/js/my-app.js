// Initialize app
var myApp = new Framework7({pushState:true, swipePanel: 'left'});
var fishData = null;

// If we need to use custom DOM library, let's save it to $$ variable:
var $$ = Dom7;

// Add view
var mainView = myApp.addView('.view-main', {
    // Because we want to use dynamic navbar, we need to enable it for this view:
    dynamicNavbar: true
});

function FishList(data) {

    // this line finds the update template.
    // the [0] makes sure this is not a Framework7 object.
    var template = $$('.template.fish-list')[0];


    // we're going to loop through all the updates
    // index will be a number, from 0 until the end
    for (var index in data) {

        // clone the DIV so that we can add it to the page.
        var update = template.cloneNode(true);

        // put the single post in a variable
        var post = data[index];

        // find each element you want to change, and replace its HTML contents
        // user ID instead of name (use joins in PHP)
        $$(update).attr('href', 'fish_page.html?id=' + post['id']);
        $$(update).find('.name').html(post['fsh_FishName']);
        $$(update).find('.fimg').attr('src', post['fishimg']);

        //$$(update).find('.info').html(post['fsh_ScientificName']);

        // the update content
        //$$(update).find('.post-description').html(post['fsh_Origin']);

        // finally, pin this div to the bottom of the page content
        $$('.page-content').append(update);
    }

    // once the loop is done, hide the template div.
    $$(template).hide();
}

// This function will load the timeline contents.
function LoadFishList() {

    if (fishData != null) {
        FishList(fishData);
        return;
    }

    // here, we do everything we need
    $$.getJSON(
        // first, specify the URL you want to load.
        // The update page. END WITH A COMMA
        'http://alienfish.dev/update.php',

        // next, tell Javascript what will happen if everything goes well.
        // END WITH A COMMA after the close bracket
        function(data) {

            fishData = data;
            FishList(data);

        },

        // tell Javascript what should happen if something goes wrong
        function(xhr, status) {

            // a simple alert giving us the root of the problem
            alert('Could not load page:' + status);
        }
    );
}

function GetFishFromList(id) {

    if (fishData == null) {
        alert("Fish data could not be loaded.");
        return;
    }

    for (var i in fishData) {
        if (fishData[i]['id'] == id) {
            return fishData[i];
        }
    }

    alert("Fish data could not be loaded.");

}

function LoadFish(id) {

    var template = $$('.template.fish')[0];
    var fish = GetFishFromList(id);
    $$(template).find('.fishimg').attr('src', fish['fishimg']);
    $$(template).find('.fname').html(fish['fsh_FishName']);
    $$(template).find('.sname').html(fish['fsh_ScientificName']);
    $$(template).find('.origin').html(fish['fsh_Origin']);
    $$(template).find('.info').html(fish['fish_description']);





}

// Handle Cordova Device Ready Event
$$(document).on('deviceready', function() {
    console.log("Device is ready!");


});

myApp.onPageInit('send_report', function() {
    $$('#open-camera').click(function(){
        navigator.camera.getPicture(
            function(imageURI){
                $$('#camera-image').attr('src', imageURI);
            },
            function(message){
                alert("Failed because:" + message );
            },
            {
                sourceType: Camera.PictureSourceType.CAMERA
            }
        );
    });

    $$('#open-gallery').click(function(){
        navigator.camera.getPicture(
            function(imageURI){
                $$('#camera-image').attr('src', imageURI);
            },
            function(message){
                alert("Failed because:" + message );
            },
            {
                sourceType: Camera.PictureSourceType.PHOTOLIBRARY
            }
        );
    });
});

myApp.onPageInit('fish_species', function() {
    // load the timeline first, so every command is added to each post.
    LoadFishList();


});


myApp.onPageInit('fish_page', function(page) {
    //paramater
    LoadFish(page.query.id);
    //loadfish(id);
    //http://alienfish.dev/fish.php?id=1

});

myApp.onPageInit('order_poster', function() {

    // when the user presses send on the ajax form, we'll send the information
    $$('form.ajax-submit').on('form:success', function(e) {

        // always try a JSON command.
        try {
            // put the server data into a variable
            var data = JSON.parse(e.detail.data);

            // if the data exists, and it's an object
            if (data && typeof data === "object") {

                // store the form data
                myApp.formStoreData('details', data);

                // redirect the user to the timeline
                mainView.router.loadPage({
                    url: '.order_poster.html',
                    reload: true
                });
            }
        } catch (error) {
            // if an error was caught, show the error.
            alert("A problem was encountered:\n" + e.detail.data);
        }
    });
});

myApp.onPageInit('send_report', function() {

    // when the user presses send on the ajax form, we'll send the information
    $$('form.ajax-submit').on('form:success', function(e) {

        // always try a JSON command.
        try {
            // put the server data into a variable
            var data = JSON.parse(e.detail.data);

            // if the data exists, and it's an object
            if (data && typeof data === "object") {

                // store the form data
                myApp.formStoreData('details', data);

                // redirect the user to the timeline
                mainView.router.loadPage({
                    url: '.send_report.html',
                    reload: true
                });
            }
        } catch (error) {
            // if an error was caught, show the error.
            alert("A problem was encountered:\n" + e.detail.data);
        }
    });
});




// Now we need to run the code that will be executed only for About page.
/*
// Option 1. Using page callback for page (for "about" page in this case) (recommended way):
myApp.onPageInit('about', function (page) {
    // Do something here for "about" page

})

// Option 2. Using one 'pageInit' event handler for all pages:
$$(document).on('pageInit', function (e) {
    // Get page data from event data
    var page = e.detail.page;

    if (page.name === 'about') {
        // Following code will be executed for page with data-page attribute equal to "about"
        myApp.alert('Here comes About page');
    }
})

// Option 2. Using live 'pageInit' event handlers for each page
$$(document).on('pageInit', '.page[data-page="about"]', function (e) {
    // Following code will be executed for page with data-page attribute equal to "about"
    myApp.alert('Here comes About page');
    */
