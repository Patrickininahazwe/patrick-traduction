const val=document.querySelectorAll('#val');
const  bnt=document.querySelector('button');
const text1=document.querySelector('#text1');
const text2=document.querySelector('#text2');

const langPays={
    "en-GB":"English",
    "br-FR":"Breton",
    "fr-FR":"Francais"
}

val.forEach((deb,index)=>{
    for(langcode in langPays){
        let selt;
        if(index ==0 && langcode=='en-GB'){
            selt='selected';
        }else if(index==1 && langcode=='fr-FR'){
            selt='selected';
        }
        let opt =`<option value= "${langcode}" ${selt}>${langPays[langcode]}</option>`;
        deb.insertAdjacentHTML('beforeend',opt);
    }
});
bnt.addEventListener('click', () =>{
let text = text1.value;
    translateFrom = val[0].value;
    translateTo= val[1].value;

    let msg=`https://api.mymemory.translated.net/get?q=${text}&langpair=${translateFrom}|${translateTo}`;
    fetch(msg).then(resultat=>resultat.json()).then(data=>{
       text2.innerHTML=data.responseData.translatedText
        text2.value=data.responseData.translatedText;
}).catch((Error)=>{
    text2.innerHTML="Erreur de connexion";

    })
})