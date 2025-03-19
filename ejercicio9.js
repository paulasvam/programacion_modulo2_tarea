let numero = prompt("Ingrese un número para generar su tabla de multiplicación:"); 

let numero_elegido = parseInt ( numero , 10 ); 

if ( ! isNaN ( numero_elegido )) { console . log ( `Tabla de multiplicación para ${ numero_elegido } ` ); 
for ( let i = 1 ; i <= 10 ; i ++ ) { console . log ( ` ${ numero_elegido } * ${ i } = ${ numero_elegido * i } ` ); } 
} else { 
    
    console . log ( "Por favor ingrese un número válido." ); }