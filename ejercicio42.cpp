#include <iostream>

int main() {
    int numero;

    std::cout << "Introduce un número entero positivo: ";
    std::cin >> numero;

    if (numero <= 0) {
        std::cout << "Por favor, ingresa un número entero positivo." << std::endl;
        return 1;
    }

    int modulo = numero % 10;

    std::cout << "El módulo de " << numero << " por 10 es: " << modulo << std::endl;

    return 0;
}