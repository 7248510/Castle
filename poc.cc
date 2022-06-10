#include <iostream>
int main()
{
    std::system("dir");
    //std::system("certutil.exe -encode lin.sh encodedString.txt");
    std::system("certutil.exe -decode encodedString.txt testLin.sh");
    std::cout << "Encoded linsh\n";
}
