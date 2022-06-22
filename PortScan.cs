// See https://aka.ms/new-console-template for more information
using System.Net.Sockets;

Console.WriteLine("Hello, World!");
bool test = false;

int portNum = 0;
//https://stackoverflow.com/questions/11837541/check-if-a-port-is-open
while (!test)
{
        using (TcpClient tcpClient = new TcpClient())
        try
        {
            tcpClient.NoDelay = true;
            tcpClient.Connect("127.0.0.1", portNum);
            portNum++;
            Console.WriteLine("Open {0}", portNum);
            //Add to a map/list and send the data to a DB/log to a text file.
        }
        catch (Exception)
        {
            Console.WriteLine("Closed {0}", portNum);
            portNum++;
        }
    if (portNum == 100)
    {
        test = true; 
        return;
    }    
    }
