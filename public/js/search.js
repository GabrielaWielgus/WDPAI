const search =  document.querySelector("input[ placeholder='Wyszukaj...']");
const dogContainer = document.querySelector(".home");

search.addEventListener("keyup", function(event){
   if(event.key === "Enter"){
       event.preventDefault();

       const data = {search: this.value};
       fetch("/search", {
           method: "POST",
           headers: {
               'Content-Type': 'application/json'
           },
           body: JSON.stringify(data)
       }).then(function(response){
           return response.json();
       }).then(function(dogs){
           dogContainer.innerHTML = "";
           loadDogs(dogs);
       });
   }
});

function loadDogs(dogs){
    dogs.forEach(dogs => {
        console.log(dog);
        createDog(dog);
    })
}

function createDog(dog){
    const template = document.querySelector("#dog-template");
    const clone = template.content.cloneNode(true);

    const image = clone.querySelector(".card-image");
    image.style = `background-image: url('public/uploads/${dog.image}');`;
    const dog_breed = clone.querySelector(".dog_breed")
    dog_breed.innerHTML = dog.dog_breed;
    const dog_gender = clone.querySelector(".dog_gender")
    dog_gender.innerHTML = dog.dog_gender;
    const dog_name = clone.querySelector("h2")
    dog_name.innerHTML = dog.dog_name;
    const dog_description = clone.querySelector("p")
    dog_description.innerHTML = dog.dog_description;

    dogContainer.appendChild(clone);

}