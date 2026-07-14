function loadData() {
    fetch("fetch.php")
    .then(response => response.text())
    .then(data => {
        document.getElementById("studentTable").innerHTML = data;

        document.querySelectorAll(".toggle").forEach(button => {
            button.onclick = function () {

                let formData = new FormData();
                formData.append("id", this.dataset.id);

                fetch("toggle.php", {
                    method: "POST",
                    body: formData
                })
                .then(() => loadData());
            };
        });

    });
}

loadData();

document.getElementById("studentForm").addEventListener("submit", function(e){

    e.preventDefault();

    let formData = new FormData();

    formData.append("name", document.getElementById("name").value);
    formData.append("age", document.getElementById("age").value);

    fetch("insert.php",{
        method:"POST",
        body:formData
    })
    .then(()=>{
        this.reset();
        loadData();
    });

});