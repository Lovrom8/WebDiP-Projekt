function nacrtajPolukrug(ctx, centerX, centerY, radius, pocetniKut, zavrsniKut, boja) {
    ctx.fillStyle = boja;
    ctx.beginPath();
    ctx.moveTo(centerX, centerY);
    ctx.arc(centerX, centerY, radius, pocetniKut, zavrsniKut);
    ctx.closePath();
    ctx.fill();
}

function generirajNasumicneBoje(podaci) {
    boje = [];
    while (boje.length < Object.keys(podaci).length) {
        var nasumicnaBoja = '#' + (Math.random() * 0xFFFFFF << 0).toString(16);
        if (!boje.includes(nasumicnaBoja))
            boje.push(nasumicnaBoja);
    }

    return boje;
}

var TortaGraf = function (postavke) {
    this.podaci = postavke.podaci;
    this.canvas = postavke.canvas;
    this.boje = generirajNasumicneBoje(postavke.podaci);
    this.ctx = this.canvas.getContext("2d");
    this.centarX = this.canvas.width / 2;
    this.centarY = this.canvas.height / 2;

    this.nacrtaj = () => {
        var ukupno = 0;
        var tren = 0;

        $.each(this.podaci, (index, vrijednost) => {
            ukupno += vrijednost;
        });

        var pocetniKut = 0;
        $.each(this.podaci, (index, vrijednost) => {
            var kutIsjecka = 2 * Math.PI * vrijednost / ukupno;

            nacrtajPolukrug(this.ctx, this.centarX, this.centarY, Math.min(this.centarX, this.centarY)/2,
                            pocetniKut, pocetniKut + kutIsjecka, this.boje[tren]);

            pocetniKut += kutIsjecka;
            tren++;
        });
    }

    this.nacrtajLegendu = (podaci) => {
        let tren = 0;
        $.each(podaci, (index, vrijednost) => {
            this.ctx.fillStyle = this.boje[tren];
            this.ctx.fillRect(0, 20 + 20 * tren, 20, 20);
            this.ctx.font = '15px serif';
            this.ctx.fillText(index, 25, 35 + 20 * tren);
            tren++;
        });
    };
}