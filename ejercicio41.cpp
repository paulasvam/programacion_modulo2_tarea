#include <iostream>
#include <string>

int main() {
    std::string texto;
    int contadorVocales = 0;

    std::cout << "Introduce una palabra: ";
    std::getline(std::cin, texto);

    for (char c : texto) {

        if (c == 'a' || c == 'e' || c == 'i' || c == 'o' || c == 'u' ||
            c == 'A' || c == 'E' || c == 'I' || c == 'O' || c == 'U') {
            contadorVocales++;
        }
    }

    std::cout << "La cantidad de vocales en la palabra es de: " << contadorVocales << std::endl;

    return 0;
}