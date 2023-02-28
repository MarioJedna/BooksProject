const input = document.getElementById("search");
console.log(input);

const suggest = document.querySelector(".suggest");
console.log(suggest);

input.addEventListener("input", (evt) => {
    // console.log(evt.target.value);
    let value = evt.target.value;
    const load = async () => {
        const response = await fetch(`/api/books/search?search=${value}`);
        const data = await response.json();
        // return data;
        // console.log(response);
        console.log(data);
        suggest.innerHTML = "";
        data.forEach((book) => {
            suggest.innerHTML += `<div>${book.title}</div>`;
        });
    };
    load();
});
