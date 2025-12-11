import "./bootstrap";

document.addEventListener("alpine:init", () => {
    Alpine.store("print", {
        printTag(name) {
            var mywindow = window.open("", "PRINT");

            mywindow.document.write(
                "<html><head><title>" + document.title + "</title>"
            );
            mywindow.document.write("</head><body style='margin: 0' >");
            mywindow.document.write(
                "<h1 style='margin: 0; padding: 0 30px; text-align: left; width: 70%; position: absolute; left: 0;top: 70%; font-size: 24px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;'>" +
                    name +
                    "</h1>"
            );
            // mywindow.document.write(document.getElementById(elem).innerHTML);
            mywindow.document.write("</body></html>");

            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10*/

            mywindow.print();
            mywindow.close();

            return true;
        },
    });
});
