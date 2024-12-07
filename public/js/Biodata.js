function imgPreview(){
    const img = document.querySelector('#Gambar');
    const imgPre = document.querySelector('#imgPre');
    const oFReader = new FileReader();
    oFReader.readAsDataURL(img.files[0]);
    // console.log(oFReader.readAsDataURL(img.files[0]));
    oFReader.onload = function(oFREvent){
        imgPre.src = oFREvent.target.result;
    }

}