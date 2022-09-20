let tbl = document.getElementById("tbl")
let nomor = 1
class Gempa{
    constructor(lokasi,skala){
        this.lokasi = lokasi;
        this.skala = skala;
    }
    dampakGempa(){
        if(this.skala <= 2 ) this.dampak = 'dampaknya tidak terasa';
        else if(this.skala <= 4) this.dampak = 'dampaknya bangunan retak-retak';
        else if(this.skala <= 6) this.dampak = 'bangunan roboh';
        else this.dampak = 'dampaknya bangunan roboh dan berpotensi tsunami';

        return this.dampak;
    }
    infoGempa(){
        tbl.innerHTML += `
        <tr>
            <td>${nomor++}</td>
            <td>${this.lokasi}</td>
            <td>${this.skala}</td>
            <td>${this.dampakGempa()}</td>
        </tr>`;
    }
}
const g1 = new Gempa("Makasar",5);
g1.infoGempa();
const g2 = new Gempa("Kalimantan",3);
g2.infoGempa();
const g3 = new Gempa("Papua",4.5);
g3.infoGempa();
const g4 = new Gempa("Bandung",2);
g4.infoGempa();
const g5 = new Gempa("Sby",1.5);
g5.infoGempa();
const g6 = new Gempa("NTT",1);
g6.infoGempa();
const g7 = new Gempa("Jakarta",7);
g7.infoGempa();
const g8 = new Gempa("Semarang",8);
g8.infoGempa();
const g9 = new Gempa("Kudus",3.5);
g9.infoGempa();
const g10 = new Gempa("Kendal",5.5);
g10.infoGempa();


