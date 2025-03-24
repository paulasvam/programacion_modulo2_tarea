#include <iostream>
using namespace std;

int main() {
    int numero, cifra1, cifra2, numeroInvertido;
    
    std::cout << "Ingrese un número de dos cifras: ";
    std::cin >> numero;
    
    if (numero >= 10 && numero <= 99) {
        cifra1 = numero / 10; 
        cifra2 = numero % 10; 

        numeroInvertido = (cifra2 * 10) + cifra1;

        std::cout << "El número invertido es: " << numeroInvertido << std::endl;
    } else {
        std::cout << "Error: El número debe ser de dos cifras." << std::endl;
    }

    return 0;
}