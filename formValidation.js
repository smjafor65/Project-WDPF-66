class FormValidation {
  static formSubmit() {
    let form = document.getElementById("f");
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      let name = document.getElementById("name").value;
      let email = document.getElementById("email").value;
      let city = document.getElementById("city").value;
      let comment = document.getElementById("comment").value;

      let selectedGender = "";
      let selectedSubject = "";

      let gender = document.getElementsByName("gender");
      let subject = document.getElementsByName("subject");

      Array.from(gender).forEach((g) => {
        if (g.checked) {
          selectedGender += g.value;
        }
      });
      Array.from(subject).forEach((s) => {
        if (s.checked) {
          selectedSubject += s.value + " ";
        }
      });

      let w = open("", "_blank", "width=500,height=400");
      w.document.write(`<h4>Name:${name}</h4>`);
      w.document.write(`<p>Email:${email}</p>`);
      w.document.write(`<p>City:${city}</p>`);
      w.document.write(`<p>Gender:${selectedGender}</p>`);
      w.document.write(`<p>Subject:${selectedSubject}</p>`);
      w.document.write(`<p>Commment:${comment}</p>`);
      w.document.write(`<button onclick="self.close()">close</button>`);
      w.document.write(`<button onclick="print()">Print</button>`);
    });
  }

  static namevalidation() {
        let name = document.getElementById("name").value;
        let pattern = /^[a-zA-Z]{4,6}$/;
        let nametest = pattern.test(name);
        if (nametest) {
          document.getElementById("name").style.border = "5px solid green";
        } else {
          document.getElementsByClassName("namevalidation")[0].style.display =
            "block";
        }
 }


  static emailValidation(){
    
      let mail = document.getElementById("email");
        mail.addEventListener("blur", function () {
        let emailPattern = /^[a-zA-Z0-9]{3,}[@][a-z]{3,}[.][a-z]{2,}$/;

        if(emailPattern.test(this.value)){
           document.getElementById("email").style.border = "5px solid green";
        }else{
           document.getElementsByClassName("emailvalidation")[0].style.display =
            "block";
        }


      });
  }
}
