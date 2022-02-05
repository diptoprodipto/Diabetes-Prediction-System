
function onClickedPredict() {
  console.log("Predict Button is clicked");
  var age = document.getElementById("age");
  var gender = document.getElementById("gender");
  var polyuria = document.getElementById("polyuria");
  var polydipsia = document.getElementById("polydipsia");
  var sudden = document.getElementById("sudden");
  var itching = document.getElementById("itching");
  var irritability = document.getElementById("irritability");
  var delayed = document.getElementById("delayed");
  var partial = document.getElementById("partial");
  var alopecia = document.getElementById("alopecia");

  var url = "https://diabetespredictionflask.herokuapp.com/predict"; 
  
  $.get(url, {
    age: parseFloat(age.value),
    gender: parseFloat(gender.value),
    polyuria: parseFloat(polyuria.value),
    polydipsia: parseFloat(polydipsia.value),
    sudden: parseFloat(sudden.value),
    itching: parseFloat(itching.value),
    irritability: parseFloat(irritability.value),
    delayed: parseFloat(delayed.value),
    partial: parseFloat(partial.value),
    alopecia: parseFloat(alopecia.value)
  },function(data, status) {
      console.log(data.label);
      if(data.label == 0)
      {
        prediction.innerHTML = "<h3>You don't have Diabetes.<br>Keep living healthy. ☺</h3>";
      }
      else
      {
        prediction.innerHTML = "<h3>You have Diabetes.<br>Consult with a doctor.</h3>"
      }		  
      
      console.log(status);
  });
}

