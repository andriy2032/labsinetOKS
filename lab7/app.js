function clic(){
    let h = document.getElementById('num_1').value;
    let k = document.getElementById('num_2').value;
    let c = document.getElementById('num_3').value;
    let r = document.getElementById('num_4').value;
    let calc = Math.sqrt(Math.pow(r, 2) + k * Math.log(c)) + Math.pow(Math.tan(h), 2);
    console.log(calc);
}