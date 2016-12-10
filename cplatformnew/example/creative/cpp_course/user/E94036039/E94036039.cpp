#include <iostream>  //Basic library
using namespace std;

const int number=3;
int main()
{ 
       
       rain r;
       for(int j=0;j<number;j++)
      {
       r.print1(j);
       r.print2(j);
       }
	return 0;
}

class rain
{
    public:
       rain(string a[number],int b[number])
      {
       a[number]={"台北市","台中市","台南市"};
       b[number]={0,80,200};
       name[number]=a[number];
       rainfall[number]=b[number];
      }
       void print1(int m)
      {
         cout<<name[m]<<"雨量為"<<rain[m]<<endl;
      }
       void print2(int i)
      {
         if(rain[i]==0)
         cout<<"可能為乾旱前兆"<<endl;
         else if(rain[i]<=130&&rain[i]>=50)
         cout<<"分級為大雨"<<endl;
         else if(rain[i]>=130)
         cout<<"分級為豪雨  可能淹水或土石流"<<endl;
      }
    private:
      string name[number];
      int rainfall[number];
};