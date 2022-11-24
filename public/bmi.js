

class ulangtahun {
    constructor( year) {
      this.year = year;
    }

    age() {
      let date = new Date();
      return date.getFullYear() - this.year;
    }
  }

  class bmi {
    constructor( tinggi, berat) {
      this.tinggi = tinggi;
      this.berat = berat;
    }

    hasilbmi() {
      return (this.berat)/(this.tinggi)*(this.tinggi);
    }
  }

  class check extends ulangtahun {
    constructor(year,) {
      super(year);
    }
    konsul() {
     if(this.age >= 17 && this.hasilbmi > 30 ){
         return "Anda bisa mendapatkan Konsultasi Gratis"
     } else {
        return "Anda Tidak Dapat Konsultasi Gratis" 
    }
  }
}

function hasil (){
    //konsultas
    let bmicek = new bmi (document.getElementById("tinggi").value/100, document.getElementById("berat").value );
    let hasilcheck = new check(document.getElementById("lahir").value);
    document.getElementById("konsultasi").value =hasilcheck.konsul()

    //bmi
    let BMI = document.getElementById("tinggi").value/100 ;
    let BMI2 = document.getElementById("berat").value ;
    let hasil = (BMI2)/((BMI)*(BMI))
    document.getElementById('bmi').value=hasil

    //status berat badan
    if (hasil < 18.5) {
        result = document.getElementById('status') .value = "Kurus"
    }
    else if ((hasil>18.5) && (hasil<=22.9)){
    result = document.getElementById('status').value = "Normal"}

    else if ((hasil>22.9) && (hasil<=29.9)){
    result = document.getElementById('status').value = "Gemuk"}

    else if (hasil>30){
    result = document.getElementById('status').value = "Obesitas"}

    //umur
    let hasilumur = new ulangtahun (document.getElementById('lahir').value);
    document.getElementById('umur').value = hasilumur.age();

    //hobi
    let hobitampil = document.getElementById("hobi1").value ;
    document.getElementById('tampilhobi').value = hobitampil;
}

function hapus (){
    document.getElementById('bmi').value = " ";
    document.getElementById('status').value =" ";
    document.getElementById('tampilhobi').value =" ";
    document.getElementById('umur').value =" ";
    document.getElementById('konsultasi').value = " ";
}