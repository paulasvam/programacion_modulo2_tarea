var numero = 100, 
    pares = 0; 
    impares = 0; 
    
for(var i = numero; i >= 0; i--){ 
    if(i % 2 == 0){ 
        pares = pares + i; 
    }else{ 
        impares = impares + i; 
    } 
} 
console.log("LA SUMA DE LOS NUMEROS PARES ES IGUAL A:", pares);
console.log("LA SUMA DE LOS NUMEROS IMPARES ES IGUAL A:", impares);