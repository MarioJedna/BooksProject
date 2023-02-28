const div = document.getElementById("latest-books");
// console.log(div);

const loader = document.getElementById("loader");
// console.log(loader);

async function getData() {
    //await the response of the fetch call
    let response = await fetch("/api/books/latest");
    //proceed once the first promise is resolved.
    let data = await response.json();
    //proceed only when the second promise is resolved
    loader.classList.add("hidden");
    return data;
}

setTimeout(() => {
    //call getData function
    getData().then((data) =>
        data.forEach((book) => {
            div.innerHTML += `
  <div class="book">
  <img class="image" src="${book.image}" alt="">
  <div class="book-content">
  <div class="title">${book.title}</div>
  <div class="isbn">${book.isbn}</div>
  <div class="author">author${book.authors
      .map((author) => author.name)
      .join(",")}</div>
  <div class="desc">${book.description}</div>
  </div>
  </div>`;
        })
    ); //log the data
}, 0);
