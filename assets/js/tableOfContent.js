$( document ).ready(function() {
    var toc =
    "<nav role='navigation' class='table-of-content'>" +
        "<h5>NESTE POST</h5>" +
        "<ul class='table-of-content-list'>";

    var newLine, el, title, link;

    $("article p.title").each(function() {

        el = $(this);
        title = el.text();
        link = "#" + el.attr("id");

        newLine =
            "<li>" +
            "<a class='text-decoration-none link-table-of-content' href='" + link + "'>" +
                title +
            "</a>" +
            "</li>";

        toc += newLine;

    });

    toc +=
        "</ul>" +
        "</nav>";

    $(".all-titles").html(toc);

    console.log(toc);
});

