#include <iostream>

int main() {
    int numero;
    int mayor = 0;

    std::cout << "Ingrese 5 números:" << std::endl;

    for (int i = 0; i < 5; i++) {
        std::cin >> numero;

        if (i == 0) {
            mayor = numero;
        } else if (numero > mayor) {
            mayor = numero; 
        }
    }

    std::cout << "El número mayor es: " << mayor << std::endl;

    return 0;
}