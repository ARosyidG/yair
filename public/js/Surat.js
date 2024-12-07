console.log("LOL");
const jumlah = document.querySelector('#jumlah');
const ttd = document.querySelector('#TTD');
const ttdForm = document.querySelector('#ttdForm');
// const 
let NameSelector = document.querySelectorAll('.NameSelector');
let Name = document.querySelectorAll('.Nama');
jumlah.addEventListener('change', function(){
    console.log(jumlah.value);
    ttd.innerHTML= null;
    
    for (let index = 0; index < jumlah.value; index++) {
        console.log(ttdForm);
        ttd.innerHTML += ttdForm.innerHTML;
    }
    NameSelector = document.querySelectorAll('.NameSelector');
    Name = document.querySelectorAll('.Nama');

    NameSelector.forEach(item => {
        item.addEventListener('change', event => {
            for (let index = 0; index < NameSelector.length; index++) {
                // console.log(Name[])
                Name[index].value = NameSelector[index].value;
                if (Name[index].value == "costum") {
                    Name[index].type = "text"; 
                }else{
                    Name[index].type = "hidden";
                }
            }
        })
      })
    // console.log(NameSelector);
});
// var mailContents = $('#textisi').html(); alert(mailContents+' mailContents');
let isiSurat = document.querySelector('#isiSurat');
let ttdSurat = document.querySelector('#ttdSurat');
let ttdtemplate = document.querySelector('#ttdtamplate');

function Refresh() {
    let isitext = document.querySelector('.ck-content');
    isiSurat.innerHTML = isitext.innerHTML;
    ttdSurat.innerHTML= null;
    
    for (let index = 0; index < jumlah.value; index++) {
        ttdSurat.innerHTML += ttdtemplate.innerHTML;
    }
    let NamattdAnggota = document.querySelectorAll('.NamattdAnggota');
    let SebagittdAnggota = document.querySelectorAll('.SebagaittdAnggota');
    let TempatttdAnggota = document.querySelectorAll('.TempatttdAnggota');
    let TanggalttdAnggota = document.querySelectorAll('.TanggaltdAnggota');


    let Name = document.querySelectorAll('.Nama');
    let Tempat = document.querySelectorAll('.Tempat');
    let Sebagai = document.querySelectorAll('.Sebagai');
    let Tanggal = document.querySelectorAll('.Tanggal');
    for (let index = 0; index < jumlah.value; index++) {
        console.log(Name[index].value);
        console.log(NamattdAnggota[index]);
        NamattdAnggota[index].innerHTML = Name[index].value; 
        TempatttdAnggota[index].innerHTML = Tempat[index].value; 
        SebagittdAnggota[index].innerHTML = Sebagai[index].value; 
        TanggalttdAnggota[index].innerHTML = Tanggal[index].value; 
        
    }
}
setInterval(Refresh, 10000);

