(function ($) {
    var data = {
        status: "success",
        id: 2,
    };

    const form = $("#spracuj");
    const input = form.find("#text");
    const select = $("#positions");

    input.focus();

    form.on("submit", function (e) {
        e.preventDefault();

        let req = $.ajax({
            url: form.attr("action"),
            type: "POST",
            data: form.serialize(),
        });

        req.done(function (data) {
            if (data === "success") {
                $.ajax({
                    url: site_url,
                }).done(function (html) {
                    var newItem = $(html).find("li:last-child");
                    newItem
                        .appendTo(".list")
                        .css({ backgroundColor: "#7d0b1b" })
                        .delay(200)
                        .animate({
                            backgroundColor: "#ffffff",
                        });
                    input.val("").focus();
                });
            }
        });
    });
    // edit select textu
    $("#edituj").find("#text").select();

    delete $("#deleted").on("submit", function (e) {
        return confirm("Určite zmazať?");
    });
})(jQuery);
