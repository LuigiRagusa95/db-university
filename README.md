# db-university

Modellizzare la struttura delle tabelle di un database per memorizzare tutti i dati riguardanti una università:

- sono presenti più Dipartimenti (es.: Lettere e Filosofia, Matematica, Ingegneria ecc.);
- ogni Dipartimento offre più Corsi di Laurea (es.: Civiltà e Letterature Classiche, Informatica, Ingegneria Elettronica ecc..)
- ogni Corso di Laurea prevede diversi corsi (es.: Letteratura Latina, Sistemi Operativi 1, Analisi Matematica 2 ecc.);
- ogni corso può essere tenuto da diversi insegnanti;
- ogni corso prevede più appelli di esame;
- ogni studente è iscritto al corso di Laurea;
- ogni studente può iscriversi a più appelli di esame;
- per ogni esame a cui lo studente ha partecipato, è necessario memorizzare il voto ottenuto.

Pensiamo a quali entità (tabelle) creare per il nostro database e cerchiamo poi di stabilirne le relazioni.
