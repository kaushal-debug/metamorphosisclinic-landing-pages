$(document).ready(function () {
    setUTMCookies();

    $("#contactForm").on("submit", function (e) {
        e.preventDefault();

        const form = $(this);
        const submitBtn = $("#submitBtn");
        submitBtn.prop("disabled", true);
        const loader = $("#formLoader");
        const messageBox = $("#formMessage");

        messageBox.removeClass("success error").hide().text("");
        loader.css("display", "flex");

        const name = $("#name").val().trim();
        const email = $("#email").val().trim();
        const phone = $("#phone").val().trim();
        const location = $("#location").val();
        const treatments = $("#treatment").val() || "";


        if (!name || !email || !phone || !location || !treatments) {
            alert("Please fill all required fields.");
            return;
        }

        submitBtn.prop("disabled", true).text("Submitting...");

        // const utms = getStoredUTMs();

        const formData = {
            name: name,
            email: email,
            phone: phone,
            location: location,
            treatments: treatments,
            // message: message,
            // ...utms,
            page_url: window.location.href,
            // recaptcha_token: token
        };

        $.ajax({
            url: window.submitConfig.submitUrl,
            type: "POST",
            dataType: "json",
            data: formData,
            success: function (res) {
            if (res.status === "success") {
                loader.hide(); // ❗ stop loader
                submitBtn.prop("disabled", false);
                form[0].reset();
                showMessage("Form submitted successfully!", "success");
            } else {
                showMessage(res.message || "Something went wrong.", "error");
            }
            },
            error: function () {
                showMessage("Server error. Please try again later.", "error");
            },
            complete: function () {
                loader.hide();
                submitBtn.prop("disabled", false);
                form[0].reset();
            }
        });
        // grecaptcha.ready(function () {
        //     grecaptcha.execute("YOUR_SITE_KEY", { action: "submit" }).then(function (token) {
        //     });
        // });
    });
});

// Helper Functions
function showMessage(msg, type) {
    const messageBox = $("#formMessage");
    messageBox
        .removeClass("success error")
        .addClass(type)
        .text(msg)
        .fadeIn();
}



function getUTMParams() {
    const params = new URLSearchParams(window.location.search);

    return {
        utm_source: params.get("utm_source") || "",
        utm_medium: params.get("utm_medium") || "",
        utm_campaign: params.get("utm_campaign") || "",
        utm_term: params.get("utm_term") || "",
        utm_content: params.get("utm_content") || ""
    };
}

function setUTMCookies() {
    const utms = getUTMParams();

    Object.keys(utms).forEach(function (key) {
        if (utms[key]) {
            document.cookie =
                key + "=" + encodeURIComponent(utms[key]) +
                "; path=/; max-age=2592000; SameSite=Lax";
        }
    });
}

function getCookie(name) {
    const match = document.cookie.match(new RegExp("(^| )" + name + "=([^;]+)"));
    return match ? decodeURIComponent(match[2]) : "";
}

// function getStoredUTMs() {
//     return {
//         utm_source: getCookie("utm_source"),
//         utm_medium: getCookie("utm_medium"),
//         utm_campaign: getCookie("utm_campaign"),
//         utm_term: getCookie("utm_term"),
//         utm_content: getCookie("utm_content")
//     };
// }