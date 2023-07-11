//COSTANTI
const searcBar = document.getElementById("searcBar")
const searchbarreplace = document.getElementById("searchbarreplace")
const contactForm = document.getElementById("contactForm")
const lastAnnuncementRow = document.getElementById("lastAnnuncementRow")

// DICHIARAZIONI JS
function getCategories(){
  fetch("/js/categories.json")
  .then(res => res.json())
  .then(categories=>{
      categories.forEach(category =>{
      
      createDropdownElements(category)//INVOCAZIONE
      createSelectCategory(category)//INVOCAZIONE
      
    })
  })

  console.log(category)
}

// function createDropdownElements(categoria){

//           const dropdown = document.getElementById("dropdownCategory")

//            let li = document.createElement("li");
//            let ancor = document.createElement("a");
            
//            ancor.classList.add("dropdown-item");
   
//            ancor.setAttribute("href", categoria.link);
//            ancor.innerHTML = categoria.name;
   
//            li.appendChild(ancor);
//            dropdown.appendChild(li);
    
// }

// function createSelectCategory(categoria){

//      const select = document.getElementById("categorySelect")
    
//       let option = document.createElement("option");
      
//       option.value = categoria.name;
//       option.textContent = categoria.name;

//       select.appendChild(option)
    
// }

function createCard(){
  
  fetch("/js/categories.json")
  .then(res => res.json())
  .then(categories => {

      const container = document.getElementById("container");

      const p =  document.createElement("p");
      const row = document.createElement("div");

      p.classList.add("text-center","fs-1")
      p.innerText = "Le nostre Categorie!";
      row.classList.add("row", "p-5");

      categories.forEach(category => {
    
        const cardDiv = document.createElement("div");
        cardDiv.classList.add("col-12","col-md-6","col-lg-3")

        const cardTemplate = `
                    <div class="my-card card text-center mb-5 my-card-bg hoverBounce" style="width: 100%">
                      <div class="card-body py-5 my-text-card">
                        <i class="${category.icon}"></i>
                        <p class="card-text fs-3 mt-4">${category.name}</p>
                        <p class="card-text mt-4 fs-6"><span>${category.announcementsCount}</span> annunci</p>
                      </div>
                    </div>
                  `;
    
        cardDiv.innerHTML = cardTemplate;
    
        container.appendChild(p);
        p.appendChild(row);
        row.appendChild(cardDiv);
    })
  })
}

function submitForm (event){

  event.preventDefault();

  let data = {}

  const fullnameInput = document.getElementById("fullnameInput");
  const emailInput = document.getElementById("emailInput");
  const messageInput = document.getElementById("messageInput");
  

  data.fullnameInput = fullnameInput.value;
  data.emailInput = emailInput.value;
  data.messageInput = messageInput.value;

  console.log(data)

  fullnameInput.classList.remove("is-invalid")

  if (fullnameInput.value === "") {
    fullnameInput.classList.add("is-invalid")
    alert("Inserisci nome e cognome")
    return;
  }
  if (emailInput.value === "") {
    emailInput.classList.add("is-invalid")
    alert("Inserisci un indirizzo email valido")
    return;
  }
  if (messageInput.value === "") {
    messageInput.classList.add("is-invalid")
    alert("Compila il campo!")
    return;
  }

  const confirmModal = new bootstrap.Modal("#confirmModal", {})
  confirmModal.show()

  fullnameInput.value = "";
  emailInput.value = "";
  messageInput.value = "";
}



//INVOCAZIONI JS
getCategories();
createCard();
contactForm.addEventListener("submit", submitForm)
// getLastAnnuncement(6,lastAnnuncementRow)

//esecuzione submit del form
fullnameInput.addEventListener("input", () => {
  if (fullnameInput.value.length > 3){
    fullnameInput.classList.remove("is-invalid");
    fullnameInput.classList.add("is-valid");
  } else{
    fullnameInput.classList.add("is-invalid");
  }
})
emailInput.addEventListener("input", () => {
  if (emailInput.value.length > 3){
    emailInput.classList.remove("is-invalid");
    emailInput.classList.add("is-valid");
  } 
  else{
    emailInput.classList.add("is-invalid");
  }
})
messageInput.addEventListener("input", () => {
  if (messageInput.value.length > 1){
    messageInput.classList.remove("is-invalid");
    messageInput.classList.add("is-valid");
  } else if(messageInput.value === ""){
    alert("Compila il campo!")
  }
  else{
    messageInput.classList.add("is-invalid");
  }
})

fullnameInput.addEventListener("click", () =>{
  fullnameInput.classList.add("my-hover-input")
})


// Animazione Carousel

var splide = new Splide( '.splide' );
splide.mount();