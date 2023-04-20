<script>
$("#btnaccorionOne").on("click", function() {
    var element1 = document.getElementById("seemoreOne");
    var element2 = document.getElementById("seemoreTwo");
    var element3 = document.getElementById("seemoreThree");
    var element4 = document.getElementById("seemoreFour");

    if (element1.style.display == "none") {
        element1.style.display = "grid";
    } else {
        element1.style.display = "none";
        element2.style.display = "grid";
        element3.style.display = "grid";
        element4.style.display = "grid";
    }
});
$("#btnaccorionTwo").on("click", function() {
    var element1 = document.getElementById("seemoreOne");
    var element2 = document.getElementById("seemoreTwo");
    var element3 = document.getElementById("seemoreThree");
    var element4 = document.getElementById("seemoreFour");

    if (element2.style.display == "none") {
        element2.style.display = "grid";
    } else {
        element2.style.display = "none";
        element1.style.display = "grid";
        element3.style.display = "grid";
        element4.style.display = "grid";
    }
});
$("#btnaccorionThree").on("click", function() {
    var element1 = document.getElementById("seemoreOne");
    var element2 = document.getElementById("seemoreTwo");
    var element3 = document.getElementById("seemoreThree");
    var element4 = document.getElementById("seemoreFour");

    if (element3.style.display == "none") {
        element3.style.display = "grid";
    } else {
        element3.style.display = "none";
        element2.style.display = "grid";
        element1.style.display = "grid";
        element4.style.display = "grid";
    }
});
$("#btnaccorionFour").on("click", function() {
    var element1 = document.getElementById("seemoreOne");
    var element2 = document.getElementById("seemoreTwo");
    var element3 = document.getElementById("seemoreThree");
    var element4 = document.getElementById("seemoreFour");

    if (element4.style.display == "none") {
        element4.style.display = "grid";
    } else {
        element4.style.display = "none";
        element2.style.display = "grid";
        element3.style.display = "grid";
        element1.style.display = "grid";
    }
});


$("#email").on("change", function() {
    var email = $("#email").val();
    $.ajax({
        url: "<?= base_url() ?>link/check_email?email=" + email,
        success: function(response) {
            var data = JSON.parse(response);
            if (data.type == 'show') {
                $('#question_div').removeClass("bg-disable");
                $("#question").removeAttr("disabled");
            }
            if (data.type == 'hide') {
                $('#question_div').addClass("bg-disable");
                $("#question").attr("disabled", "disabled");
            }
        },
        error: function(response) {
            alert(response);
        }
    })
});


$(document).ready(function() {
    window.setTimeout(function() {
        $("#success-alert").fadeTo(1000, 0).slideUp(1000, function() {
            $(this).remove();
        });
    }, 5000);
});

$(document).ready(function() {
    window.setTimeout(function() {
        $("#danger-alert").fadeTo(1000, 0).slideUp(1000, function() {
            $(this).remove();
        });
    }, 5000);
});

function validate() {
    $("#btnconfirm").attr("disabled", true);
    $("#form_submit").submit();
}


function readreff() {
    var readcurrency = $("#currency").val();

    $.ajax({
        url: "<?= base_url() ?>link/get_reff/" + readcurrency,
        success: function(response) {
            var data = JSON.parse(response);
            $("#tu").html(data.referral_topup_pct + "%" + " + " + data.referral_topup_fxd)
            $("#wtwr").html(data.referral_receive_pct + "%" + " + " + data.referral_receive_fxd)
            $("#wtws").html(data.referral_send_pct + "%" + " + " + data.referral_send_fxd)
            $("#wtb").html(data.referral_bank_pct + "%" + " + " + data.referral_bank_fxd)
        },
        error: function(response) {
            alert(response);
        }
    })
}

$("#currency").on("change", function() {
    readreff();
})
</script>