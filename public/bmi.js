class ulangtahun {
    constructor( year) {
      this.year = year;
    }

    age() {
      let date = new Date();
      let umur = date.getFullYear() - this.year;
      return umur;
    }
  }

class check extends ulangtahun {
  constructor(year,status) {
    super(year);
    this.status=status
   }
   konsul() {
    if( umur >= 17 && this.status > 30 ){
       return "Anda bisa mendapatkan Konsultasi Gratis"
    } else {
       return "Anda Tidak Dapat Konsultasi Gratis" 
    }
  }
}

function hasil (){

    //bmi
    let BMI = document.getElementById("tinggi").value/100 ;
    let BMI2 = document.getElementById("berat").value ;
    let hasil = (BMI2)/((BMI)*(BMI))
    document.getElementById('bmi').value=hasil
    let status = '';

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

    //konsultasi
    let hasilcheck = new check(document.getElementById("lahir").value, hasil);
    document.getElementById("konsultasi").value =hasilcheck.konsul()
    console.log(hasilcheck)

}

function hapus (){
    document.getElementById('bmi').value = " ";
    document.getElementById('status').value =" ";
    document.getElementById('tampilhobi').value =" ";
    document.getElementById('umur').value =" ";
    document.getElementById('konsultasi').value = " ";
}
