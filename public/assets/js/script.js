  // Show specific fields based on type
    document.getElementById("type").addEventListener("change", function () {
    document.getElementById("book_fields").style.display = "none";
    document.getElementById("dvd_fields").style.display = "none";
    document.getElementById("furniture_fields").style.display = "none";

    if (this.value === "book") {
        document.getElementById("book_fields").style.display = "block";
    } else if (this.value === "DVD") {
        document.getElementById("dvd_fields").style.display = "block";
    } else if (this.value === "furniture") {
        document.getElementById("furniture_fields").style.display = "block";
    }
});