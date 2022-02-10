

console.log('Hello world');

let container = document.querySelector('.row.livres');
let form_submit = document.querySelector('.form_submit');

async function get_books(search = 'search+terms') {
    const request = await fetch(`https://www.googleapis.com/books/v1/volumes?q=${search}&maxResults=30`);
    const data = await request.json();

    console.log(data.items);
    
    data.items.forEach(el => {
        let title = el.volumeInfo.title;
        let imageBook = el.volumeInfo.imageLinks ? el.volumeInfo.imageLinks.thumbnail : '../img/icon.svg.png';
        let linkRead = el.volumeInfo.previewLink;
        let publisherOne = el.volumeInfo.publisher;
        let author = el.volumeInfo.authors;

     
        var htmlCard = `<div class="col-12 col-md-5 mx-1 my-1">
                            <div class="card" style="">
                            <div class="row no-gutters">
                                <div class="col-2 col-md-4">
                                 <img src="${imageBook}" class="card-img" alt="...">
                                </div>
                                <div class="col-6 col-md-8">
                                <div class="card-body ml-3 mt-3">
                                    <h5 class="card-title">${title}</h5>
                                    <p class="card-text">Author: ${author}</p>
                                    <p class="card-text">Publisher: ${publisherOne}</p>
                                    <a target="_blank" href="${linkRead}" class="btn btn-secondary">Lire Livre</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>`;

        container.innerHTML += htmlCard;

    });

}
get_books();


form_submit.addEventListener('submit' , (e) => {
      e.preventDefault();
      let livre_nom = document.querySelector('.livre_nom');

      console.log(livre_nom);

      if ( livre_nom.value.length == 0 ) {

      }else {
        container.innerHTML = '';
        get_books(livre_nom.value);
      }
})

