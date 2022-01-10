<!-- 

- Creo uno store con 3 t-shirt
- Creo 3 utenti
- Se un utente ha già effettuato più di 10 acquisti avrà dirittop ad uno sconto del 20% 

-->


<?php


// DEFINIZIONE DEL MODELLO-> CLASSE
class Articolo {
    // PROPRIETA'
    public $nome;
    public $immagine;
    public $colore;
    public $prezzo;
    
    // COSTRUTTORE
    function __construct($nome, $immagine, $colore, $prezzo) {
        $this->nome = $nome;
        $this->immagine = $immagine;
        $this->colore = $colore;
        $this->prezzo = $prezzo;  
        
    }
        
}

class Utente {              // classe PADRE
    // PROPRIETA'
    public $firstName;
    public $cognome;
    public $numAcquisti;
    // public $sconto;
    // public $premium;

    
    // COSTRUTTORE
    function __construct($firstName, $cognome, $numAcquisti) {
        $this->firstName = $firstName;
        $this->cognome = $cognome;
        $this->numAcquisti = $numAcquisti;
        // $this->sconto = $sconto;  
        // $this->premium = $premium      
        
    }
    
}

class Premium extends Utente {          //classe FIGLIA
    //PROPRIETA'
    public $sconto;
    public $basic__or__premium;

    // COSTRUTTORE
    function __construct($firstName, $cognome, $numAcquisti, $sconto, $basic__or__premium) {
        
        parent::__construct($firstName, $cognome, $numAcquisti);
        
        $this->sconto = $this-> premium__discount();
        $this->basic__or__premium = $basic__or__premium;

    }    

    public function premium__discount() {
        return $this->sconto = $this->numAcquisti > 10   ?    20   :   0;
    }
    
}




// ISTANZE

// articolo 1
$t_shirt1 = new Articolo('Palma', 'palma_img', 'black', '50');
var_dump($t_shirt1);

// articolo 2
$t_shirt2 = new Articolo('Mario', 'superMario_img', 'white', '50');
var_dump($t_shirt2);

// articolo 3
$t_shirt3 = new Articolo('yoshi', 'yoshi_img', 'black', '50');
var_dump($t_shirt3);


echo '<hr>';


// utente 1
$utente1 = new Utente('Luca', 'Nannetti', 6);
var_dump($utente1);


// utente 2
$utente2 = new Utente('Gino', 'Splizman', 21);
var_dump($utente2);


// utente 3
$utente3 = new Utente('Franco', 'Cappone', 2);
var_dump($utente3);


echo '<hr>';


// ISTANZE da classe figlia
$utente1completo = new Premium('Luca', 'Nannetti', 6, '0', 'basic');
var_dump($utente1completo);

$utente2completo = new Premium('Gino', 'Splizman', 21, '20', 'premium');
var_dump($utente2completo);

$utente3completo = new Premium('Franco', 'Cappone', 2, '0', 'basic');
var_dump($utente3completo);










