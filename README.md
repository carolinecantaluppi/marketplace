Alcune osservazioni sul progeto:

- Non ho potuto accedere le cartelle publiche (/img) a causa di CORS, che causa problemi nel momento di generare il dataURL di canvas. Quindi, come una alternative per fare funzionare ho usato questo commando per aprire il Chrome senza la validazione di CORS: 
open -n -a /Applications/Google\ Chrome.app/Contents/MacOS/Google\ Chrome --args --user-data-dir="/tmp/chrome_dev_test" --disable-web-security

Cose da migliorare in questo progetto avendo più tempo:

- Watermark. Ho provato a farlo ma non sono ancora riuscito.
- Interface. Lasciandola più bella.
- Personalizzazione. Mettere più funzionalità come aggiungere un'immagine, cambiare il colore, grandezza e tipo del testo, visualizzare tutti i lati della maglietta, aggiungere personalizzazione in altre regione della maglietta.
- Creare un'autenticazione per i clienti (registrazione/login/logout).
- Creare una sessione per visualizzare le tue personalizzazione, ogni clienti con il proprio login potrebbe vedere le proprie personalizzazioni salvate.
- Migliorare l'organizzazione di: Model, View e Controller.