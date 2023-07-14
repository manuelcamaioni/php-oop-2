<?php 
include_once __DIR__ . "/../classes/Item.php";
$categories = [new Category("Cani"), new Category("Gatti")];

$items = [
    new Item("Questo guinzaglio retrattile è perfetto per i proprietari di cani di taglia media che desiderano dare un po' di libertà al loro amico a quattro zampe durante le passeggiate. È realizzato con materiali resistenti e dispone di un meccanismo di blocco sicuro per mantenere il cane al sicuro.",
    "Guinzaglio retrattile resistente per cani di taglia media", "./img/guinzaglioRetrattile.jpg", "Cani", "Accessori", 19.99),

    new Item("Questo letto per gatti offre un comfort lussuoso al tuo amico felino. Realizzato con tessuti morbidi e imbottito con materiale soffice, il letto offre un luogo accogliente per il tuo gatto per riposare e rilassarsi. È lavabile in lavatrice per una facile pulizia.",
    "Letto morbido", "./img/lettoGatti.jpg", "Gatti", "Accessori", 39.90),

    new Item("Questa ciotola antiscivolo è progettata per evitare che il cibo o l'acqua si rovescino durante l'alimentazione del tuo cane. Ha una base antiscivolo che tiene la ciotola stabile anche durante i pasti più animati. È adatta a cani di tutte le taglie.",
    "Ciotola antiscivolo", "./img/ciotolaAntiscivolo.jpg", "Cani", "Accessori", 7.50),

    new Item("Questo giocattolo interattivo intratterrà il tuo gatto per ore. Dotato di piume colorate e una corda resistente, il giocattolo stimola l'istinto di caccia del tuo gatto e lo mantiene attivo e impegnato. È perfetto per giocare da solo o con il tuo gatto.", 
    "Giocattolo interattivo a piume", "./img/giocattoloPiume.jpg", "Gatti", "Giochi", 15.50),

    new Item("Queste crocchette sono appositamente formulate per soddisfare le esigenze nutrizionali dei cani adulti di razza grande. Ricche di ingredienti di alta qualità, forniscono una nutrizione equilibrata e supportano la salute delle articolazioni e della pelle. Sono gustose e croccanti, garantendo un pasto delizioso per il tuo cane.", 
    "Crocchette per cani adulti di razza grande", "./img/crocchetteCaniGrandi.jpg", "Cani", "Cibo", 10.00),

    new Item("Questa torre giochi e arrampicata offre un'esperienza divertente e stimolante per il tuo gatto. È dotata di diverse piattaforme, tunnel, palle e corde per arrampicarsi, giocare e affilare le unghie. La struttura solida e stabile garantisce la sicurezza del tuo gatto durante le sue avventure.", 
    "Torre giochi e arrampicata", "./img/torregiochi.jpg", "Gatti", "Giochi", 60.00),

    new Item("Questi snack dentali sono progettati per promuovere l'igiene orale del tuo cane. La loro consistenza speciale aiuta a ridurre il tartaro e la placca, mantenendo i denti puliti e sani. Gli snack sono anche gustosi, rendendo l'igiene orale una piacevole esperienza per il tuo cane.", 
    "Snack dentali per l'igiene orale", "./img/snackdentali.jpg", "Cani", "Cibo", 7.90),

    new Item("Questa palla interattiva è un divertimento garantito per il tuo gatto. Dotata di luci colorate e movimenti irregolari, la palla attira l'attenzione del tuo gatto e stimola il suo istinto di caccia. È un modo divertente per tenere il tuo gatto attivo e impegnato.", 
    "Palla interattiva con luci", "./img/pallaluci.jpg", "Gatti", "Giochi", 11.20),

];
?>