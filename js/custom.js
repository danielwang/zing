$(document).ready(function(){
	$('#switch').click(function(){
		$(this).toggleClass('flip');
        $('#flipBoard').toggleClass('flip');
    });

    initUser();
    toggleView();
});

/*  Store user type in local storage */
function initUser() {

    var defaultUser = "manager";
    // if local storage supported, stores display preferrence
    if (window.localStorage) {
        var who = localStorage.getItem("user");
        if (who != null) {
            $('body').addClass(who+'-view');
        } else {
            setUserType(defaultUser);
        }

        $('#user-setting li a').each(function () {
            $(this).click(function() {
                var who = this.getAttribute('data-attr');
                setUserType(who);
            });
        });
    }
}

function setUserType(user) {
    $('body')[0].className = user+"-view";
    localStorage.setItem("user", user); // store the value in local browser
}

// pin views in app
function toggleView(){
     $('#toggle-view').change(function(){
        if(this.checked)
        {
            console.log('1');
        }
        else
        {
             console.log('2');
        }
    });
}