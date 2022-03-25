function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

// Coba bot
// function checkPassword() {
//     var password = document.getElementById('password').value;
//     var confirmPassword = document.getElementById('confirmPassword').value;
//     if (password != confirmPassword) {
//       alert("Passwords do not match.");
//       return false;
//     }
//     return true;
//   }

//   function showPassword() {
//     var x = document.getElementById("password");
//     if (x.type === "password") {
//       x.type = "text";
//     } else {
//       x.type = "password";
//     }
//   }
