function onClickedPredict() {

  const url = "https://diabetespredictionflask.herokuapp.com/predict";
  console.log(url)

  $.get(url, {
    age: parseFloat($('#age').val()),
    gender: parseFloat($('#gender').val()),
    polyuria: parseFloat($('#polyuria').val()),
    polydipsia: parseFloat($('#polydipsia').val()),
    sudden: parseFloat($('#sudden').val()),
    itching: parseFloat($('#itching').val()),
    irritability: parseFloat($('#irritability').val()),
    delayed: parseFloat($('#delayed').val()),
    partial: parseFloat($('#partial').val()),
    alopecia: parseFloat($('#alopecia').val())
  }, function (response, status) {
    if (response.label === 0) {
      prediction.innerHTML = "<h3>You don't have Diabetes.<br>Keep living healthy. ☺</h3>";
    }
    else if (response.label === 1) {
      prediction.innerHTML = "<h3>You have Diabetes.<br>Consult with a doctor.</h3>"
    }
    else {
      prediction.innerHTML = "<h3>Please provide all the information.</h3>"
    }
  });
}